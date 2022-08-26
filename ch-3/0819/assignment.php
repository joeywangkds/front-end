<?php


namespace _0819;

use PDO;

$db = new PDO('mysql:dbname=phpedu;', 'root', 'root');



$sql = <<<SQL
    SELECT COUNT(*) as `total` FROM `staff`

SQL;

$stmt = $db->prepare($sql);
$stmt->execute();

$stmt->bindColumn('total', $total);
$stmt->fetch();

echo $_SERVER['PHP_SELF'];


$page = $_GET['p'] ?? 1;

$num = 5;

$offset = ($page - 1) * $num;

$totalPage = ceil($total / $num);

echo 'The total page is ' . $totalPage . "<br>";
echo 'The total record is ' . $total;
echo "<hr>";

$sql = <<<SQL

    SELECT * FROM `staff`
    LIMIT $offset, $num
SQL;

$stmt = $db->prepare($sql);
$stmt->execute();

$staffs = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($staffs == 0) {
    echo 'Fetch nothing';
} else {
    foreach ($staffs as $staff) {
        extract($staff);
        printf('id: %d, name: %s, gender: %d, email: %s', $id, $name, $gender, $email . "<br>");
    }
}

// var_dump($staff);


function createPages(int $page, int $pages): array
{
    // 当前是第8页, 共计20页
    // [1,  ...    6, 7, 8, 9, 10,  ....    20]
    // 当前是第10页, 共计20页
    // [1,  ...    8, 9, 10, 11, 12,  ....    20]

    // 1. 生成与总页数长度相同的递增的整数数组
    $pageArr = range(1, $pages);

    // 2. 只需要当前和前后二页, 其它页码用 false/null 来标记

    $paginate =  array_map(function ($p) use ($page, $pages) {
        return ($p == 1 || $p == $pages || abs($page - $p) <= 2) ? $p : null;
    }, $pageArr);

    // dump($paginate);
    // 去重, 替换
    $before = array_unique(array_slice($paginate, 0, $page));
    $after = array_unique(array_slice($paginate, $page));


    // 用解构进行合并
    return [...$before, ...$after];
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 400px;
            border-collapse: collapse;
            text-align: center;
        }

        table th,
        table td {
            border: 1px solid;
            padding: 5px;
        }

        table thead {
            background-color: lightcyan;
        }

        table caption {
            font-size: larger;
            margin-bottom: 8px;
        }

        body>p {
            display: flex;
        }

        p>a {
            text-decoration: none;
            color: #555;
            border: 1px solid;
            padding: 5px 10px;
            margin: 10px 2px;
        }

        .active {
            background-color: seagreen;
            color: white;
            border: 1px solid seagreen;
        }
    </style>
</head>

<body>
    <hr>
    <table>
        <caption>The Staff Form</caption>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>gender</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($staffs as $staff) : extract($staff) ?>
                <tr>
                    <td><?= $id ?></td>
                    <td><?= $name ?></td>
                    <?php if ($gender == 1) {
                        $sex = "female";
                    } elseif ($gender == 0) {
                        $sex = "male";
                    }
                    ?>
                    <td><?= $sex ?></td>
                    <td><?= $email ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <form action="">
        <br>
    <input type="number" id="fname" name="p"><br><br>
    <button>submit</button>
    </form>


    <p> <?php
        
        

        $page = $_GET['p'] ?? 1; ?>
        <?php $results = createPages($page, $totalPage);

        // var_dump($results);

        foreach ($results as $result) {
            $active= ($result == $_GET['p']) ? 'active' : null;
            if($result != NULL){
                echo '<a href='.$_SERVER['PHP_SELF'].'?p=' . $result. ' class ="'.$active.'">'. $result.'</a>';
                
            }else{
                echo '<a href="">...</a>';
            }
            
        
        }
        ?>
        
        
    </p>
</body>

</html>