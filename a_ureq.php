  <?php
  // session_start();
  // //authorization
  // if(!isset($_SESSION['username'])||$_SESSION['user']!='admin')
  // {
  //   echo"<script>alert('You are not authorized to view this page!');</script>";
  //   echo"<script>location.href='../../index.php';</script>";
  // }
  include('admin_nav.php');
?>
   <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> User approval</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered">
                <thead>      
		
		<!-- <div class="row">
			<div class="col-xl-10">
				
                New Customers
                  <div class="card card-table-border-none">
                    <div class="card-header justify-content-between ">
                      <h2>New Requests</h2>
                      
                    </div>
					
                    <div class="card-body pt-0" data-simplebar style="height: 468px;">
                      <table class="table ">
                        <tbody>
						<tr><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>-->
              <!-- <th>Id</th>  -->
              <th>Name</th><th>Email</th><th>Qualification</th><th>Phone no.<th>Address</th></th><th>Approve</th><th>Reject</th></tr>
						<?php

              include 'dbconnect.php';
              $p=1;
			  //$uname=$_SESSION['username']; 
               $result = mysql_query("SELECT * FROM customer,users where 
               customer.loginid=users.UID and users.status='0'");
              // echo $result;

              while($row = mysql_fetch_array($result))
              {
?>
                          <tr>

            <!--   <td> </td>
              <td> </td>
              <td> </td>
              <td> </td>
              <td> </td>
              <td> </td>
              <td> </td>
               <td> </td> -->
            
              
              <td><?php echo $row['name'];?></td>               
              <!-- <td><?php echo $row['password'];?></td> -->
              <td><?php echo $row['email'];?></td>
              <td><?php echo $row['quali'];?></td>
              <td><?php echo $row['phno'];?></td>
              <td><?php echo $row['address'];?></td>
              <td><a href="a_uapprove.php?id=<?php echo $row['UID'];?>"> <form><input type='button' value="APPROVE" style="background: green;color: white"></input></form></a></td><td>
              <a href="a_ureject.php?id=<?php echo $row['UID'];?>"> <form><input type='button' value=" REJECT"  style="background: red;color: white"></input></form></a></td>
							<td>
							<!-- <a href="details.php?id=  <?php echo $row['UID'];?>   ">Read More</a> -->
							</td>
                          </tr>
                         <?php
			  }
   
?> 
                        </tbody>
                      </table>
                    </div>
                  </div>

			</div>

			
		</div>


	
</div>


	

		

		

		





      </div> <!-- End Content -->
    </div> <!-- End Content Wrapper -->
    
    
    <!-- Footer -->
   

    </div> <!-- End Page Wrapper -->
  </div> <!-- End Wrapper -->


    <!-- <script type="module">
      import 'https://cdn.jsdelivr.net/npm/@pwabuilder/pwaupdate';

      const el = document.createElement('pwa-update');
      document.body.appendChild(el);
    </script> -->

    <!-- Javascript -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/plugins/simplebar/simplebar.min.js"></script>
 
    <script src='assets/plugins/charts/Chart.min.js'></script>
    <script src='assets/js/chart.js'></script>

    
    

    <script src='assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js'></script>
    <script src='assets/plugins/jvectormap/jquery-jvectormap-world-mill.js'></script>
    <script src='assets/js/vector-map.js'></script>

    <script src='assets/plugins/daterangepicker/moment.min.js'></script>
    <script src='assets/plugins/daterangepicker/daterangepicker.js'></script>
    <script src='assets/js/date-range.js'></script>

    

    
    
    
    

    <script src='assets/plugins/toastr/toastr.min.js'></script>

    

    
    
    

    
    

    

    <script src="assets/js/sleek.js"></script>
  <link href="assets/options/optionswitch.css" rel="stylesheet">
<script src="assets/options/optionswitcher.js"></script>
</body>
</html>

