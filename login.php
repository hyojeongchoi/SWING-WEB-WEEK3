<?php
session_start();
echo $_SESSION['id'], $_SESSION['pw'];
echo "<br>";
?>

<meta charset='UTF-8'>
<!DOCTYPE html>
<html>
<head>
  <title>
    로그인 페이지
  </title>
</head>

<body>
  <h1>
    LOGIN PAGE
  </h1>
  <form action="login_check.php" method="POST">
    ID : <input type="text" name="id"><br>
    PW : <input type="password" name="pw">
    <br>
    <input type="reset" name="reset" value="회원가입" onclick="location.href='signup.html'">
    <input type="submit" name="login" value="login" onclick="location.href='logincheck.php'">
  </form>
</body>
</html>
