<?php
  include('uhead.php');
  include('dbconnect.php');
  session_start();
$mail = $_SESSION['email'];
$lid = $_SESSION['UID'];
?>
<style>
            table {
                font-family: Arial, sans-serif;
                border-collapse: collapse;
                width: 50%;
                margin-top: 20px;
            }

            th, td {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            th {
                background-color: #f2f2f2;
            }
            td {
                color: white; 
            }
          </style>
<?php

$query = "SELECT COUNT(*) AS totalQuestions,
                 SUM(CASE WHEN Mark = 2 THEN 1 ELSE 0 END) AS count2Marks,
                 SUM(CASE WHEN Mark = 1 THEN 1 ELSE 0 END) AS count1Mark,
                 SUM(CASE WHEN Mark = 0 THEN 1 ELSE 0 END) AS count0Marks,
                 SUM(Mark) AS totalMarks FROM recordings WHERE UID = '$lid'";
                 //echo $query;
$result = mysql_query($query); 

if ($result) {
    $row = mysql_fetch_assoc($result);
    echo "<table border='1'>";
    echo "<tr><th>Total Questions Attended</th><th>2 Marks</th><th>1 Mark</th><th>0 Marks</th><th>Total Marks</th></tr>";
    echo "<tr>";
    echo "<td>{$row['totalQuestions']}</td>";
    echo "<td>{$row['count2Marks']}</td>";
    echo "<td>{$row['count1Mark']}</td>";
    echo "<td>{$row['count0Marks']}</td>";
    echo "<td>{$row['totalMarks']}</td>";
    echo "</tr>";
    echo "</table>";
}
    ?>
<script>
    // Auto-refresh the page every 45 seconds
    setTimeout(function () {
        location.reload();
    }, 30000); // 30 seconds in milliseconds
</script>