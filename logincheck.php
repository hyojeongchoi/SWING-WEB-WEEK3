<?php
session_start();
if (($_SESSION['id']==$_POST['id']) && ($_SESSION['pw']==$_POST['pw']))
{
  header("location: index.php");
}
else
{
  header("location: loginfailed.php");
}
?>
