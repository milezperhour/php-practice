<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP Directory Operations</title>
    </head>
    <body>
        <!--Feature Set 1-->
        <div id="image_container" style="width:100vw; height:100vh;">
            <?php
                $directory = "images/";
                $jpgFiles = glob($directory . "*.jpg");
                foreach ($jpgFiles as $jpgFile) {
                    $image = "<img src='$jpgFile' width='180'/>";
                    echo $image;
                }
            ?>
        </div>
    </body>
</html>
