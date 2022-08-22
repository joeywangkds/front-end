<?php

printf('<pre>%s</pre>',print_r($_FILES,true));


foreach($_FILES['my_pic']['error'] as $key=>$error){
    if ($error===UPLOAD_ERR_OK){

        $tmpName = $_FILES['my_pic']['tmp_name'][$key];
        $name = $_FILE['my_pic']['name'][$key];

        $dest = 'upload/'.$name;

        move_uploaded_file($tmpName,$dest);
        echo "Submit successful!<br>";
        echo "<img src = '$dest' width = '200'></img>";
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
            <input type="file" name="my_pic[]">
            <input type="file" name="my_pic[]">
            <input type="file" name="my_pic[]">
            <button>submit</button>
        </fieldset>
    </form>
</body>

</html>