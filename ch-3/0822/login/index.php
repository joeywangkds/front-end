<?php

namespace _0822;

session_start();

if (isset($_SESSION['user'])) {
    $user = unserialize($_SESSION['user']);
}

global $user;

// printf('<pre>%s</pre>',print_r($user,true));

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <header>
        <span>Home</span>

        <?php if (isset($user)) : ?>


            <span><?=$user['name']?></span>
            <span><a href="handler.php?action=logout">logout</a></span>

        <?php else : ?>

            <span><a href="login.php">Login</a></span>

        <?php endif; ?>


    </header>

</body>

</html>