<?php
      include('uhead.php');
      include('dbconnect.php');
    ?>

<form action="" method="POST">
		<div class="card card-default">
			<div class="card-header card-header-border-bottom">
			<h2 style="color: white">Update  Password</h2>
			</div>

           <?php

session_start();
$lid = $_SESSION['email'];

              $p=1;
			  //$uname=$_GET['id'];
			  //$uname=$_SESSION['username']; 
              $result = mysql_query("SELECT * FROM users where email='$lid'");

//echo "SELECT * FROM users where email='$lid'";
              while($row = mysql_fetch_array($result))
              {
				$k=$row['UID'];
              ?>
     
			<div class="col-sm-12">
				<label class="text-dark font-weight-medium" for="" >User Name</label>
				<div class="input-group mb-2">

					<input type="text" class="form-control" id="hname" name="email" value="<?php echo $row['email'];?>" 
					required>
				</div>
			</div>
			
			<div class="col-sm-12">
				<label class="text-dark font-weight-medium" for="">Password</label>
				<div class="input-group mb-2">

					<input type="text" class="form-control" id="password" name="password" value="<?php echo $row['password'];?>" 
					pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
					title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required
					>
				</div>
			</div>
			
		
			<div class="col-sm-12">
				<label class="text-dark font-weight-medium" for=""></label>
				<div class="input-group mb-2">
			<button class="my-1 btn btn-sm btn-success" name="submit"  type="submit">Update</button>
		</div>
	</div>

			<?php
			  }
?>
		</div>
	</div></form>
<?php
							  //include 'includes/dbconnect.php';
							 if(isset($_POST['submit']))
							 {
								 
								
								  


								 $sql="update users set password='$_POST[password]',email='$_POST[email]' where UID='$k'";
								 echo"$sql";
								 $result=mysql_query($sql,$conn);
								if($result)
								{
									echo "<script>alert('Password updated!');location.href='uhome.php';</script>";
								}
							 	else
								{
									echo "<script>alert('Not updated!');location.href='uprofile .php';</script>";
								}
							 }	
								
						 
							
						?>

	
