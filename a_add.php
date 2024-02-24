<?php
  // session_start();
  // //authorization
  // if(!isset($_SESSION['username'])||$_SESSION['user']!='admin')
  // {
  //   echo"<script>alert('You are not authorized to view this page!');</script>";
  //   echo"<script>location.href='../../index.php';</script>";
  // }
  include('admin_nav.php');
  include('dbconnect.php');
?>
<style>
    form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 5px;
    color: #555;
}

input {
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

input[type="submit"] {
    background-color: #4caf50;
    color: #fff;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}
</style>
   <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Add Questions</h3>
        <br>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered">
                <thead>      
		
        
                <form method="POST">
        <label for="question">Question:</label>
        <input type="text" id="question" name="question" required><br>

        <label for="answer">Answer:</label>
        <input type="text" id="answer" name="answer" required><br>

        <input type="submit" value="Submit" name="submit">
    </form>
        
        
        
        
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


<?php

if(isset($_POST['submit'])){

	

	$qn=$_POST['question'];
  $ans=$_POST['answer'];
	
	$q="INSERT into questions(question,answer) values('$qn','$ans')";
	// echo $q;
	if(mysql_query($q,$conn))
	{
					echo "<script>alert('Question Added!');
							location.href='a_add.php';
					</script>";
				}
	
	}


?>