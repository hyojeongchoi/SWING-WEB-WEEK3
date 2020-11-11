<?php
session_start();
echo $_SESSION['id'], $_SESSION['pw'];
?>

<!DOCTYPE html>
<meta charset='UTF-8'>
<html>
<head>
  <title>
  </title>
</head>
<body>
  <h1>
    LOGIN PAGE
  </h1>
  <form action="logincheck.php" method="POST">
    ID : <input type="text" name="id"><br>
    PW :
    <input type="password" name="pw"><br>
    <input type="reset" name="reset" value="회원가입" onclick="location.href='signup.html'">
    <input type="submit" name="login" value="login" onclick="location.href='logincheck.php'">
  </form>
</body>
</html>
