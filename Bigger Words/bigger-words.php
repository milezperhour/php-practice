<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Bigger Words</title>
    </head>
    <body>
        <!--Build a function that takes in a string and an array of strings.
        The function should output an array of strings that are longer than the single input string.

                Write a function that takes two parameters
        Parameter 1 - A string
        Parameter 2 - An array of strings
        The function should output all the words from the input array (parameter 2) that are longer than
        the input string (parameter 1)
        Example:
                var myArray = ['bug', 'insect', 'mammal', 'reptile', 'mammoth', 'turtles'];
        biggerWords('whales', myArray);
        Output - ['reptile', 'mammoth', 'turtles']-->

        <?php
            $myArray = array('bug', 'insect', 'mammal', 'reptile', 'mammoth', 'turtles');
            $string = 'Whales';

            function biggerWords ($string, $myArray) {
                $output = array();

                for ($i = 0; $i < count($myArray); $i++){
                    $singleItem = $myArray[$i];
                    if (strlen($singleItem) > strlen($string)){
                        array_push($output, $singleItem);
                    }
                }
                foreach ($output as $word){
                    echo $word . ' ';
                }
            }

            biggerWords($string, $myArray);
         ?>

    </body>
</html>
