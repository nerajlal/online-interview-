<?php
require_once './admin_nav.php';
require_once '../config/conn.php';
?>
<section id="main-content">
	<section class="wrapper">
            <div style="height: 600px;">
		<br><br>
                   
                <h1 style="text-align: center;color: blue;">View Farmer</h1><br><br>
                <div>
                    <table class="table table-hover" style="color: green">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Address</th>
        <th>Phone Number</th>
        <th>District</th>
        <th>User Name</th>
        <th>Password</th>
      
      </tr>
    </thead>
    <tbody>
      <?php
  $sql="SELECT `farmer_fname`,`farmer_lname`,`farmer_address`,`farmer_phone`,`farmer_district`,`username`,`password`,`log_id` from farmer,login WHERE farmer.id=login.reg_id AND login.status='1' AND login.user_type='Farmer'";
    $res=$con->query($sql);      
  if($res->num_rows>0)
{
    while($row=$res->fetch_assoc())
    {?>
    <tr>
          <td><?php echo $row['farmer_fname'];?></td>
          <td><?php echo $row['farmer_lname'];?></td>
    <td><?php echo $row['farmer_address'];?></td>
<td><?php echo $row['farmer_phone'];?></td>
<td><?php echo $row['farmer_district'];?></td>
<td><?php echo $row['username'];?></td>
<td><?php echo $row['password'];?></td>




                 <?php
    }
}
?>
             
                
                
                
                
                
                
    </tbody>
  </table>
                
                </div>		
            </div>	
		  

            <div>	 

<h1 style="text-align: center;color: blueviolet;">View Retailer</h1><br><br>
                <div>
                    <table class="table table-hover" style="color: green">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Address</th>
        <th>Phone Number</th>
        <th>District</th>
        <th>User Name</th>
        <th>Password</th>
        
      </tr>
    </thead>
    <tbody>
      <?php
  $sql="SELECT `user_fname`,`user_lname`,`user_address`,`user_phone`,`user_district`,`log_id`,`username`,`password` from retailer,login where retailer.id=login.reg_id AND login.status=1 and login.user_type='Retailer'";
    $res=$con->query($sql);      
  if($res->num_rows>0)
{
    while($row=$res->fetch_assoc())
    {?>
    <tr>
          <td><?php echo $row['user_fname'];?></td>
          <td><?php echo $row['user_lname'];?></td>
    <td><?php echo $row['user_address'];?></td>
<td><?php echo $row['user_phone'];?></td>
<td><?php echo $row['user_district'];?></td>
<td><?php echo $row['username'];?></td>
<td><?php echo $row['password'];?></td>





                 <?php
    }
}
?>
             
                
                
                
                
                
                
    </tbody>
  </table>
                    
                
                </div>		
            </div>

</section>

</section>
            
            <div class="footer">
			<div class="wthree-copyright">
                            <p style="text-align: center">© 2020| Design by <a href="http://w3layouts.com">Nyeste Venture Technologies, kOllam</a></p>
			</div>
		  </div>