<?php


$id=$_GET['id'];

include 'dbconnect.php';
$sql="delete from  facial_expression WHERE UID = '$id'";
if(mysql_query($sql,$conn))
	echo "<script>alert(' Deleted!');location.href='a_score.php';</script>";
     else
     	{"<script>alert('error!');location.href='a_score.php';</script>";
		}

?>