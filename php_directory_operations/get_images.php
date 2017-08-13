<?php
    $directory = "images/";
    $jpgFiles = glob($directory . "*.jpg");
    $fileArray = array();

    foreach ($jpgFiles as $jpgFile) {
        array_push($fileArray, $jpgFile);
    }

    $ouput = array(
        'success'=> 'It worked!',
        'error'=> 'Something went wrong',
        'files'=> $fileArray
    );


    $jsonData = json_encode($ouput);
    print $jsonData;
?>
