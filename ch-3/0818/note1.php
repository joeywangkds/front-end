<?php

// printf('<pre>%s</pre>',print_r($_FILES,true));
//
if (isset($_FILES['my_pic'])) {
    $fileName = $_FILES['my_pic']['name'];
    $fileType = $_FILES['my_pic']['type'];
    $tmpName = $_FILES['my_pic']['tmp_name'];
    $error = $_FILES['my_pic']['error'];
    $fileSize = $_FILES['my_pic']['size'];

    if ($error == 0) {
        
        if (is_uploaded_file($tmpName)) {
            $allow = ['jpg', 'jpeg', 'png', 'gif'];
            $ext = pathinfo($fileName)['extension'];

            if (in_array($ext, $allow)) {
                $path = 'upload/';

                $dest = $path . md5($fileName) . '.' . $ext;

                if (move_uploaded_file($tmpName, $dest)) {
                    echo "Submit successful!<br>";
                    echo "<img src = '$dest' width = '300'></img>";
                } else {
                    echo 'not success';
                }
            } else {
                echo 'The file extension is not support';
            }
        } else {
            echo 'Upload method is wrong';
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
    <title>Upload Sheet</title>
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Upload</legend>
            <!-- <input type="hidden" name="MAX_FILE_SIZE" value="10000"> -->
            <input type="file" name="my_pic">
            <button>submit</button>
        </fieldset>
    </form>
</body>

</html>