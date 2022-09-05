<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>view->user->hello.php</h3>
    <h3>hello, <?=$username?></h3>
 
    <ul>
        <?php foreach ($courses as $course): ?>
            <li>The course is <?=$course?></li>
        <?php endforeach ?>
    </ul>
    
</body>
</html>