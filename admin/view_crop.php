<?php
require_once './admin_nav.php';
require_once '../config/conn.php';
?>
<section id="main-content">
	<section class="wrapper">
            <div style="height: 800px;">
		<br><br>
                   
                <h1 style="text-align: center;color: #D81B60;text-decoration: underline;">View Crop</h1><br><br>
                <div>
                    <table class="table table-bordered" style="color: green">
    <thead>
      <tr>
        <th>Crop ID</th>
        <th>Product Name</th>
        <th>Description</th>
        <th>Cost</th>
        <th>Edit</th>
        <th>Remove</th>
      
      </tr>
    </thead>
    <tbody>
      <?php
  $sql="SELECT * FROM `products`";
    $res=$con->query($sql);      
  if($res->num_rows>0)
{
    while($row=$res->fetch_assoc())
    {?>
    <tr>
          <td><?php echo $row['p_id'];?></td>
          <td><?php echo $row['pdt_name'];?></td>
       
       <td><?php echo $row['desc'];?></td>
       
    <td><?php echo $row['price'];?></td>

<td><input type="button" value="Edit" class="btn btn-success" id="btnHome" 
onClick="document.location.href='edit_crop.php?sid=<?php echo $row['p_id'];?>'" />  </td>
<td><input type="button" value="Remove" class="btn btn-danger" id="btnHome" 
onClick="document.location.href='del_crop.php?sid=<?php echo $row['p_id'];?>'" />  </td>



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
