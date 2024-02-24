

<?php
 include ('dbconnect.php');

if (isset($_GET['qid'])) {
    $qid = $_GET['qid'];

    // Perform the deletion
    $deleteSql = "DELETE FROM questions WHERE qid = '$qid'";
    $deleteResult = mysql_query($deleteSql, $conn);

    if ($deleteResult) {
	echo "<script>alert(' Deleted!');location.href='a_viewqn.php';</script>";

        //echo "Question with ID $qid has been deleted successfully.";
    } else {
	echo "<script>alert(' Can't Delete!');location.href='a_viewqn.php';</script>";
        //echo "Error deleting question: " . mysql_error();
    }
} else {
    echo "Invalid request. QID parameter is missing.";
}

mysql_close($conn);
?>