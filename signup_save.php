<?php
session_start();
$_SESSION['id'] = $_POST['id'];
$_SESSION['pw'] = $_POST['pw'];
$_SESSION['name'] = $_POST['name'];
?>
<meta charset='UTF-8'>
<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <input type="button" name="success" value="OK" onclick="location.href='login.php'">
  </body>
</html>
