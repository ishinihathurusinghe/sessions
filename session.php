<?php
     session_start();

     $_SESSION['user_id'] = 30;

     $_SESSION['first_name'] = 'dileep';


?>

<html>
  <head>
       <title> session </title>
</head>

<body>
        <?php
              echo "user id : {$_SESSION['user_id']} <br>";

              echo "first name : {$_SESSION['first_name']} <br>";

        ?>
</body>

</html>

