<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <?php 
          $name=$email='';
          if ($_SERVER['REQUEST_METHOD']==='POST') {
               if (!empty($_POST['name'])) {
                    $name=test_input($_POST['name']);
     ?>
                    <span>Welcome <?php echo $name;?></span>
     <?php
               }

               if(!empty($_POST['email'])){
                    $email=test_input($_POST['email']);
     ?>
                    <span>
                         Your email is 
                         <?php
                              $email_show=preg_match('/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/',$email)?$email:'invalid email';
                              echo $email_show;
                         ?>
                    </span>
     <?php
               }
          }

          function test_input($data) {
               $data = trim($data);
               $data = stripslashes($data);
               $data = htmlspecialchars($data);
               return $data;
          }
     ?>
</body>
</html>