<?php
session_start();
if(($_SESSION['id']==$_POST['id']&& ($_SESSION['pw']==$_POST['pw']))
{
  Header('location: index.php');
}
else
{
  Header("location: loginfailed.php");
}
 ?>
