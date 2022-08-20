<?php

// printf('<pre>%s</pre>',print_r($_FILES,true));

if(isset($_FILES['my_pic'])){
    $fileName = $_FILES['my_pic']['name'];
    $fileType = $_FILES['my_pic']['type'];
    $tmpnName = $_FILES['my_pic']['tmp_name'];
    $error = $_FILES['my_pic']['error'];
    $fileSize =$_FILES['my_pic']['size'];

    if($error!=0){
        echo "Submit successful!<br>";
    }
    
    echo 'The file name is '. $fileName;
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
            <input type="hidden" name="MAX_FILE_SIZE" value="10000">
            <input type="file" name ="my_pic">
            <button>submit</button>
        </fieldset>
    </form>
</body>
</html>