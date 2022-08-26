<?php
printf('<pre>%s</pre>', print_r($_FILES, true));

if (isset($_FILES['img_name'])) {
    // echo 'true';
    $name = $_FILES['img_name']['name'];
    $type = $_FILES['img_name']['type'];
    $tmp_name = $_FILES['img_name']['tmp_name'];
    $error = $_FILES['img_name']['error'];
    $size = $_FILES['img_name']['size'];

    if ($error === 0) {
        if (is_uploaded_file($tmp_name)) {
            $allow = ['gif', 'png', 'jpg', 'jpeg'];
            $ext = pathinfo($name)['extension'];
            // var_dump();

            if (in_array($ext, $allow)) {
                // echo "it's allowed";
                $path = "uploads/";
                $dest = $path.md5($name).'.'.$ext;
                if(move_uploaded_file($tmp_name,$dest )){
                    echo "Upload successful!";
                    echo "<img src = '$dest' width = '200'></img>";
                }else{
                    echo 'not success';
                }
            }
        }else{
            echo "it's not upload through http.";
        }
    } else {
        switch ($error) {
            case 1:
                echo 'The size is larger than php.ini maximum upload size';
                break;
            case 2:
                echo 'The size is larger than (MAX_FILE_SIZE)) maximum upload size';
        }
    }
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single file upload</title>
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Single file upload</legend>
            <input type="file" name="img_name">
            <button>Submit</button>
        </fieldset>
    </form>
</body>

</html>