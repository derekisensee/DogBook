<?php
    /*$target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["userFile"]["name"]);
    $uploadOk = 1; 
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    //check if file is an image or fake
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        }
        else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    //allow certain file types
    if($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
        echo "Sorry, only .jpg, .jpeg, or .png type files are allowed.";
        $uploadOk = 0;
    }

    //checks if $uploadOk is good
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    }
    else {
        if (move_uploaded_file($_FILES["userFile"]["name"], $target_file)) {
            echo "The file " . basename($FILES["fileToUpload"]["name"]) . " has been uploaded.";
        }
        else {
            echo "Error uploading file.";
        }
    }*/

    //WORKS with image in image/ directory, didn't work with different image.
    $uploaddir = 'images/';
    $uploadfile = $uploaddir . basename($_FILES['userFile']['name']);

    echo '<pre>';
    if (move_uploaded_file($_FILES['userFile']['tmp_name'], $uploadfile)) {
        echo "File is valid, and was successfully uploaded.\n";
    } else {
        echo "Possible file upload attack!\n";
    }

    echo 'Here is some more debugging info:';
    print_r($_FILES);

    print "</pre>";
?>