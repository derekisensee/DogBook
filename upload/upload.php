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
        <div class="row">
            <div class="col-sm-5">
                <div class="input-group">
                    <form enctype="multipart/form-data" action="*.php" method="post">
                        <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                        <input name="userfile" type="file" />
                        <input type="submit" value="Upload Image" />
                    </form>
                </div>
            </div>
        </div>
        <button class="btn-primary"></button>
    </body>
</html>
