<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Fib Sequence</title>
    </head>
    <body>
        <!--print out the first 10 numbers in the Fibonacci sequence and push them to an array-->
        <?php
            function fibSeq(){
                $fibArray = array();
                $fibArray[0] = 1;
                $fibArray[1] = 1;

                for ($i = 2; $i<10; $i ++){
                    $nextNumber = $fibArray[$i - 1] + $fibArray[$i - 2];
                    array_push($fibArray, $nextNumber);
                }

                foreach ($fibArray as $item){
                    echo $item . ' ';
                }
            }

            fibSeq();
         ?>
    </body>
</html>
