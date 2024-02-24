<?php
require_once './admin_nav.php';
require_once '../config/conn.php';
?>
<br><br><br><br><br><br>

<h1 style="text-align:center;color: chocolate;">View Advertisements</h1><br><br>
<table class="table table-bordered" style="width:70%; margin-left: 275px;border: 1px solid red">
   <tr>
      <td>ID</td>
      <td>Name</td>
      <td>Description</td>
      <td>Image</td>
   </tr>
   <?php
   $sql="SELECT * FROM `tbl_adv`";
   $res=$con->query($sql);
            
if($res->num_rows>0)
{
    while($row=$res->fetch_assoc())
    {
   ?>
 <tr>
    <td><?php echo $row['ad_id'];?></td>
    <td><?php echo $row['ad_name'];?></td>
    <td><?php echo $row['desc'];?></td>
<td><a target="_blank" href="../retailer/uploads/<?php echo $row['photo'];?>">
    <img src="../retailer/uploads/<?php echo $row['photo'];?> "alt ="<?php echo $row['photo'];?>" width='80px' height="80px"></a></td>

<?php   
}
}
            
?>
</table>