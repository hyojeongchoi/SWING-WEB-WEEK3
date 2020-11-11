<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['pw']))
{}
else
{
    Header('location: login.php');
}
?>
<meta charset='UTF-8'>
<!DOCTYPE html>
<html>
<head>
  <title>
  </title>
</head>

<body>
  <h1>
  INDEX PAGE
  </h1>

  <?php
  echo $_SESSION['name'], "의 블로그에 오신걸 환영합니다. <br>";
  echo "ID : ", $_SESSION['id'], "<br>";
  echo "PW : ", $_SESSION['pw'], "<br>";
  ?>

  <b>활동</b>
  <form>
    <input type="button" name="post" value="글쓰기" onclick="location.href='post.html'">
    <br>
    <input type="button" name="logout" value="logout" onclick="location.href='logout.php'">
  </form>
</body>
</html>
