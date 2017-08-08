<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Get Client IP Address</title>
    </head>
    <body>
        <?php
        //whether ip is from share internet
        if (!empty($_SERVER['HTTP_CLIENT_IP']))
          {
            $ip_address = $_SERVER['HTTP_CLIENT_IP'];
          }
        //whether ip is from proxy
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
          {
            $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
          }
        //whether ip is from remote address
        else
          {
            $ip_address = $_SERVER['REMOTE_ADDR'];
          }
        echo 'IP Address ' . $ip_address;
        ?>
    </body>
</html>
