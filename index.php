<!DOCTYPE html>
<html>
    <head>
        <title>DogBook Home</title>
        <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
        <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css'>
        <link rel="stylesheet" href="css/index.css">
        
        <h1 class="container">DogBook</h1>
        <h3 class="container">FaceBook, but for dogs.</h3>
        <h5 class="container">Created by Derek Isensee</h5>
        
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <a href="upload/form.php"><button class="btn btn-primary">POST</button></a>
                </div>
            </div>
        </div>
        
        <hr>
    </head>
    
    <body>
        <div class="frontPage">
            <h2>Posts</h2>
            <div class="container">
                <?php
                    $dirname = "upload/images/";
                    $images = glob($dirname."*.{jpg,png,jpeg,JPEG,JPG,PNG}", GLOB_BRACE); 
                    foreach($images as $image) {
                        echo '<img src="' . $image . '" /<br />'; //resize images to fit screen better
                    }
                ?>
            </div>
        </div>
        <!--The jquery/javascript stuff-->
        <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js'></script>
        <script src='js/index.js'></script>
    </body>
</html>
