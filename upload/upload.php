<?php
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

<script>
    setTimeout(function() {
       window.location='/socialSite/index.php'; 
    }, 3000);
</script>