<?php
require_once './admin_nav.php';
require_once '../config/conn.php';
?>
<section id="main-content">
	<section class="wrapper">
            <div style="height: 800px;">
		<br><br>
                   
                <h1 style="text-align: center;color: #D81B60;text-decoration: underline;">View Feedback</h1><br><br>
                <div>
                    <table class="table table-bordered" style="color: green">
    <thead>
      <tr>
        
        <th>User Type</th>
        <th>Comment</th>
        <th>Reply</th>
       
      
      </tr>
    </thead>

 <tbody>
      <?php
  $sql="SELECT * FROM `feedback`";
    $res=$con->query($sql);      
  if($res->num_rows>0)
{
    while($row=$res->fetch_assoc())
    {?>
    <tr>
<td><?php echo $row['user_type'];?></td>
<td><?php echo $row['comment'];?></td>

<td><input type="button" value="Reply" class="btn btn-success" id="btnHome" 
onClick="document.location.href='reply.php?sid=<?php echo $row['fb_id'];?>'" />  </td>
</tr>

    </tbody>
                     <?php
    }
}
?>      
  
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
