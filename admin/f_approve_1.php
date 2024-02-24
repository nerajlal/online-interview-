<?php
require_once '../config/conn.php';
$id=$_GET['app'];
$up="UPDATE `login` SET `status` = '1' WHERE `login`.`log_id` = '$id'";
$con->query($up);
echo "<script type='text/javascript'>alert('Farmer Approved');</script>";
       header("Refresh:0; url=index.php");
       
       
       
       ?>