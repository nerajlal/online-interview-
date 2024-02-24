<?php
	include('head.php');
	include('dbconnect.php');
?>

<br><br>
<center>
	<b><u><h1 style="color: white">REGISTRATION</h1></u></b><br>
	<form enctype="multipart/form-data" method="post">
		<table>
			<tr>
				<td style="color: white;">Name</td><td><input type="text" name="fname" class="form-control" style="margin-bottom: 8px;margin-left: 8px" required></td>
			</tr>
			<tr>
				<td style="color: white;">Address</td><td><input type="text" name="address" class="form-control" style="margin-bottom: 8px;margin-left: 8px" required></td>
			</tr>
			<tr>
				<td style="color: white;">Qualification</td><td><input type="text" name="quali" class="form-control" style="margin-bottom: 8px;margin-left: 8px" required></td>
			</tr>
			<tr>
				<td style="color: white;">Phone</td><td><input type="text" name="phno" class="form-control" style="margin-bottom: 8px;margin-left: 8px" pattern="(?=.*[0-9]).{10}" title="10 digit phone number" required></td>
			</tr>
			<tr>
				<td style="color: white;">Email</td><td><input type="email" name="email" class="form-control" style="margin-bottom: 8px;margin-left: 8px" required></td>
			</tr>
			<tr>
				<td style="color: white;">Password </td><td><input type="text" name="password" class="form-control" style="margin-bottom: 8px;margin-left: 8px" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required></td>
			</tr>
			<tr>
				<td></td><td><input type="submit" name="submit" value="submit" class="btn btn-success" style="padding: 10px 25px"></td>
			</tr>
		</table>
	</form>
</center>
</div>
</div>
</div>
</div>
</div>
</section>

<?php
if (isset($_POST['submit'])) {
	$name = $_POST['fname'];
	$address = $_POST['address'];
	$quali = $_POST['quali'];
	$phno = $_POST['phno'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	// Get the last used UID from the 'users' table, excluding 'T001'
	$q_last_uid = "SELECT MAX(UID) AS last_uid FROM users WHERE UID NOT LIKE 'T001'";
	$result_last_uid = mysql_query($q_last_uid, $conn);
	$row_last_uid = mysql_fetch_assoc($result_last_uid);
	$last_uid = $row_last_uid['last_uid'];

	// Determine the next UID
	$next_uid = 'S' . str_pad((intval(substr($last_uid, 1)) + 1), 3, '0', STR_PAD_LEFT);

	// Insert into 'users' table with the determined UID
	$q = "INSERT INTO users(email,password,status,type,UID) VALUES ('$email','$password','0','user','$next_uid')";
	if (mysql_query($q, $conn)) {
		// Insert into 'customer' table with the obtained UID
		$q2 = "INSERT INTO customer(name, email, quali, address, phno, loginid) VALUES ('$name','$email','$quali','$address','$phno','$next_uid')";

		if (mysql_query($q2, $conn)) {
			echo "<script>alert('Your account has been created!');
				location.href='login.php';
				</script>";
		} else { 
			// Handle the error if the second query fails
			echo "<script>alert('Error creating customer record');</script>";
		}
	} else {
		// Handle the error if the first query fails
		echo "<script>alert('Error creating user record');</script>";
	}
}
?>
