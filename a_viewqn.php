<?php
 include ('dbconnect.php');
  include('admin_nav.php');
?>
 <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Questions</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
                <?php
            $sql = "SELECT qid, question, answer FROM questions";
$result = mysql_query($sql, $conn);

// Check if there are rows in the result set
if (mysql_num_rows($result) > 0) {
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Question Table</title>
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
                margin-top: 20px;
            }

            th, td {
                border: 1px solid #ddd;
                padding: 8px;
                text-align: left;
            }

            th {
                background-color: #f2f2f2;
            }

            .delete-btn {
                background-color: #ff6666;
                color: white;
                padding: 5px 10px;
                text-decoration: none;
                border-radius: 5px;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>Question ID</th>
                <th>Question</th>
                <th>Answer</th>
                <th>Action</th>
            </tr>

            <?php
            while ($row = mysql_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $row['qid']; ?></td>
                    <td><?php echo $row['question']; ?></td>
                    <td><?php echo $row['answer']; ?></td>
                    <td>
                        <a href="delete_question.php?qid=<?php echo $row['qid']; ?>" class="delete-btn">Delete</a>
                    </td>
                </tr>
                <?php
            }
            ?>

        </table>
    </body>
    </html>

    <?php
} else {
    echo "0 results";
}

mysql_close($conn);
?>