<?php
require_once '../config/conn.php';
$id=$_GET['rem'];
$up="delete farmer,login from login inner join farmer on login.reg_id=farmer.id WHERE login.log_id='$id'";
$con->query($up);
echo "<script type='text/javascript'>alert('Farmer Removed');</script>";
       header("Refresh:0; url=index.php");
       
       
       
       ?>