<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP Directory Operations</title>
        <?php

         ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script>
        $(document).ready(function(){
            load_files();
        });

        function load_files() {

            $.ajax({
                dataType: 'JSON',
                url: 'http://localhost:8888/projects/php-practice/php_directory_operations/get_images.php',
                success: function(result) {
                    console.log("files:",result.files);
                    createImageContainer(result);
                }
            });
        }

        function createImageContainer (result) {
            var imageContainer = '<div id=image_container style="width:800px; height:800px; border:2px solid black;"></div>'
            $('body').append(imageContainer);
            insertImages(result);
        }

        function insertImages(result) {
            for (var i=0; i<result.files.length; i++){
                var imageSrcAttr = result.files[i];
                var image = '<img src=' + '"' + imageSrcAttr + '"' + ' style="width:25%;"' + ' />';
                $('#image_container').append(image);
            }
            applyClickHandler();
        }

        function applyClickHandler() {
            $('img').click(function(){
                
            });
        }

        </script>
    </head>
    <body>

    </body>
</html>
