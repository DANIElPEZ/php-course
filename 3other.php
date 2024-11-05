<?php
     session_start();
     setcookie('juan-user', 'clave', time() + 3600, "/"); //1 hour
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <h1>
          <?php
               if (!isset($_COOKIE['juan-user'])) {
                    echo 'doens\'t exist ';
               }else{
                    echo $_COOKIE['user'].' ';
               }

               $_SESSION['favcolor']='green';
               echo 'session '.$_SESSION['favcolor'].' ';

               $_SESSION['favcolor']='yellow';
               echo 'session '.$_SESSION['favcolor'];

               session_unset();
               session_destroy();
          ?>
     </h1>
</body>
</html>