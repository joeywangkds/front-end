<?php

namespace _0822;

use PDO;

session_start();


$db = new PDO('mysql:dbname=phpedu', 'root', 'root');

$sql = <<<SQL
SELECT * FROM `user`;
SQL;

$stmt = $db->prepare($sql);
if ($stmt->execute()) {
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // print_r( $users);
} else {
    print_r($stmt->errorInfo());
}




$action = strtolower($_GET['action']);

switch ($action) {
    case 'login':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = md5($_POST['password']);

            // $result = array_filter($users, function ($user) use ($email, $password) {
            //     return $user['email'] === $email && $user['password'] === $password;
            // });

            $result = array_filter($users, function ($user) use ($email, $password) {
                return $user['email'] === $email && $user['password'] === $password;
            });

            printf('<pre>%s</pre>', print_r($result, true));


            if (count($result) === 1) {


                $_SESSION['user'] = serialize(array_shift($result));
                // printf('<pre>%s</pre>',print_r($_SESSION['user'],true));

                exit('<script>alert("login successful");location.href="index.php"</script>');
            }
            break;

            exit('请求类型错误');
        }

    case 'logout':
        if (isset($_SESSION['user'])) {
            session_destroy();
            exit('<script>alert("logout successfult");location.href = "index.php"</script>');
        }


    case 'register':

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = md5($_POST['p1']);

        $sql = <<<SQL
        INSERT `user` 
        SET `name` = ?, `email` = ?, `password` = ?;
        SQL;

        $stmt = $db->prepare($sql);
        $data = [$name, $email, $password];
        if ($stmt->execute($data)) {
            if ($stmt->rowCount() > 0) {
                // $sql='SELETE * FROM `user` WHERE `id` = ' . $db->lastInsertId();
                $sql = 'SELECT * FROM `user` WHERE `id` = ' . $db->lastInsertId();
                $stmt = $db->prepare($sql);
                $stmt->execute();
                $newUser = $stmt->fetch(PDO::FETCH_ASSOC);

                $_SESSION['user'] = serialize($newUser);

                exit('<script>alert("Register successful");location.href = "index.php"</script>');
            } else {
                exit('<script>alert("Register unsuccessful");location.href = "register.php"</script>');
            }
            // print_r( $users);
        } else {
            print_r($stmt->errorInfo());
        }
    default:
        exit('参数非法或未定义操作');
}
