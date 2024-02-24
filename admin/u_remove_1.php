<?php
require_once '../config/conn.php';
$id=$_GET['rem'];
$up="delete user,login from login inner join user on login.reg_id=user.id WHERE login.log_id='$id'";
$con->query($up);
echo "<script type='text/javascript'>alert('User Removed');</script>";
       header("Refresh:0; url=index.php");
       
       
       
       ?>