<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>HTML form</title>
    </head>
    <style>
        .box{
            height:200px;
            width:400px;
            border: 2px solid lightblue;
            margin: auto;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            position: absolute;
            border-radius: 5px;
        }

        h3{
            font-family: Helvetica;
            text-align:center;
        }

        form{
            text-align:center;
        }

        button{
            margin-left:10px;
        }
    </style>
    <body>
        <div class="box">
            <h3>Please input your name:</h3>
            <br />
            <form method="POST">
                <input type="text" name="name" /><button type="submit" value="Submit Name">Submit</button>
            </form>
            <?php
                if(!isset($_POST['name'])){
                    $name = "";
                } else {
                    $name = $_POST['name'];
                    echo "<h3>Hello $name</h3>";
                 }
            ?>
        </div>
    </body>
</html>
