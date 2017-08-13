<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP Directory Operations</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                console.log('image was clicked');
                $('img').attr({
                    "data-toggle":"modal",
                    "data-target":"#myModal"
                });

                var modalBody = $('.modal-body');
                $(this).clone().appendTo(modalBody);
                modalBody.children().css('width', '100%');
            });
            closeButtonClicked();
        }

        function closeButtonClicked() {
            $('#closeButton').click(function(){
                var modalBody = $('.modal-body');
                modalBody.children().remove();
            });
        }

        </script>
    </head>
    <body>
        <!-- Modal -->
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                  <!--<img src="images/beagle_.jpg" width="100%"/>-->
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" id="closeButton" data-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
          </div>
    </body>
</html>
