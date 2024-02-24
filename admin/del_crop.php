
 <?php
require_once '../config/conn.php';
$sid=$_GET['sid'];

$up="DELETE FROM `tbl_crops` WHERE `tbl_crops`.`crop_id` = '$sid'";
$con->query($up);
echo "<script type='text/javascript'>alert('item Removed');</script>";
       header("Refresh:0; url=view_crop.php");
       
       
       
       ?>