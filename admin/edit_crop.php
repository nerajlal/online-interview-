<?php
require_once './admin_nav.php';
require_once '../config/conn.php';
$sid=$_GET['sid'];
$sql="SELECT * FROM `tbl_crops` where `crop_id`='$sid'";
$res=$con->query($sql);
  if($res->num_rows>0)
  {
    
?>
<section id="main-content">
	<section class="wrapper">
            <div style="height: 800px;">
		<br><br>
                   
                <h1 style="text-align: center;color: chocolate;text-decoration: underline">Edit Crop Details</h1><br><br>
                <div>
                    <div class="container">
  
                        <form class="form-horizontal" action="" method="post">
    <div class="form-group">
         <?php
                    while ($row = $res->fetch_assoc()) {
                       ?> 
      <div class="form-group">
        <div class="form-group">
      <label class="control-label col-sm-4" for="email">Crop Name:</label>
      <div class="col-sm-8">
          <input type="text" class="form-control" id="email" placeholder="Enter Crop Name" name="cname" value="<?php echo $row['crop_name']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Soil Name:</label>
      <div class="col-sm-8">          
          <input type="text" class="form-control" id="pwd" placeholder="Enter Soil Name" name="sname" value="<?php echo $row['soil_name']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Crop Cost:</label>
      <div class="col-sm-8">          
          <input type="text" class="form-control" id="pwd" placeholder="Crop Cost" name="cost" value="<?php echo $row['crop_cost']; ?>">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-5 col-sm-7">
          <button type="submit" class="btn btn-success" name="update">Update</button>
      </div>
    </div>
      
  </form>
                        <?php
                    }
                    ?>
</div>

                </div>		
            </div>

</section>

</section>
            
            <div class="footer">
			<div class="wthree-copyright">
                            <p style="text-align: center">© 2020| Design by <a href="http://w3layouts.com">Nyeste Venture Technologies, kOllam</a></p>
			</div>
		  </div>
<?php
}
if(isset($_POST['update']))
{
   // $sid=$_POST['sid'];
    $cname=$_POST['cname'];
    $soil=$_POST['sname'];
    $cost=$_POST['cost'];
    $sql="UPDATE `tbl_crops` SET `crop_name` = '$cname', `soil_name` = '$soil',`crop_cost`='$cost' WHERE `tbl_crops`.`crop_id` = '$sid'";
    if($con->query($sql)===TRUE)
    {
         echo "<script type='text/javascript'>alert('Crop Updated Successfully');</script>";
        header("Refresh:0; url=view_crop.php");
    }
    else
    {
    echo "<script type='text/javascript'>alert('Failed');</script>";
     header("Refresh:2; url=view_crop.php");
    }
}




?>