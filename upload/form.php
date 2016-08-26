<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
        <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css'>
        <link rel="stylesheet" href="css/upload.css">
        <div class="container">
            <h1>DogBook Upload</h1>
        </div>
        <hr>
    </head>
    
    <body>
        <div class="container">
            <form enctype="multipart/form-data" action="upload.php" method="post">
                <input type="hidden" name="MAX_FILE_SIZE" value="30000">
                <input id="userFile" name="userFile" type="file">
                <input type="submit" value="Click to Upload Image">
            </form>
        </div>
    </body>
</html>
