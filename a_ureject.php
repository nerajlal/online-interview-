<?php


$id=$_GET['id'];

include 'dbconnect.php';
$sql="UPDATE `users` SET status = '2' WHERE UID = '$id'";

if(mysql_query($sql,$conn))
	echo "<script>alert(' Rejected!');location.href='a_ureq.php';</script>";
     else
     	{"<script>alert('error!');location.href='a_ureq.php';</script>";
		}

?>