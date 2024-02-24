<?php
require_once './admin_nav.php';
require_once '../config/conn.php';
?>
<section id="main-content">
	<section class="wrapper">
            <div style="height: 800px;">
		<br><br>
                   
                <h1 style="text-align: center;color: #D81B60;text-decoration: underline;">View Soil</h1><br><br>
                <div>
                    <table class="table table-bordered" style="color: green">
    <thead>
      <tr>
        <th>Soil ID</th>
        <th>Soil Name</th>
        <th>Related Crop</th>
        <th>Edit</th>
        <th>Remove</th>
      
      </tr>
    </thead>
    <tbody>
      <?php
  $sql="SELECT * FROM `tbl_soil`";
    $res=$con->query($sql);      
  if($res->num_rows>0)
{
    while($row=$res->fetch_assoc())
    {?>
    <tr>
          <td><?php echo $row['soil_id'];?></td>
          <td><?php echo $row['soil_name'];?></td>
    <td><?php echo $row['rcrops'];?></td>

<td><input type="button" value="Edit" class="btn btn-success" id="btnHome" 
onClick="document.location.href='edit_soil.php?sid=<?php echo $row['soil_id'];?>'" />  </td>
<td><input type="button" value="Remove" class="btn btn-danger" id="btnHome" 
onClick="document.location.href='del_soil.php?sid=<?php echo $row['soil_id'];?>'" />  </td>



                 <?php
    }
}
?>
             
                
                
                
                
                
                
    </tbody>
  </table>
                
                </div>		
            </div>	
		  

            <div>	 

        
                
         
</section>

</section>
            
            <div class="footer">
			<div class="wthree-copyright">
                            <p style="text-align: center">© 2020| Design by <a href="http://w3layouts.com">Nyeste Venture Technologies, kOllam</a></p>
			</div>
		  </div>
