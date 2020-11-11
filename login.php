<?php
seesion_start();
echo $_SESSION['id'], $_SESSION['pw'];

 ?>

 <!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
</head>
<body>
  <form action="logincheck.php" method="POST">
    ID : <input type="text" name="id"><br>
    PW :
    <input type="password" name="pw">
    <br>
    <input type="submit" value="login" onclick="location.href='logincheck.php'"</p>
    <p><button type="reset">다시쓰기</button></p>
  </fORM>
</body>
</html>
