<?php
include('admin_nav.php');
include('dbconnect.php');
?>
<style>
    table {
        font-family: Arial, sans-serif;
        border-collapse: collapse;
        width: 80%;
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
        color: white; /* Set text color to white */
    }
</style>
<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Students Score</h3>
        <div class="row mb">
            <!-- page start-->
            <div class="content-panel">
                <div class="adv-table">
                    <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered">
                        <thead>
                            <tr>
                                <th>Student ID</th><th>Total Questions Attended</th><th>2 Marks</th><th>1 Marks</th><th>0 Marks</th><th>Total Marks</th><th>Expression</th><th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $p = 1;
                            $result = mysql_query("SELECT r.UID, 
                                COUNT(*) AS totalQuestions,
                                SUM(CASE WHEN r.mark = 2 THEN 1 ELSE 0 END) AS count2Marks,
                                SUM(CASE WHEN r.mark = 1 THEN 1 ELSE 0 END) AS count1Marks,
                                SUM(CASE WHEN r.mark = 0 THEN 1 ELSE 0 END) AS count0Marks,
                                SUM(r.mark) AS totalMarks,
                                e.expression AS maxExpression
                                FROM recordings r
                                LEFT JOIN (
                                    SELECT t1.UID, t1.expression
                                    FROM (
                                        SELECT UID, expression, COUNT(*) AS expression_count
                                        FROM facial_expression
                                        GROUP BY UID, expression
                                    ) t1
                                    JOIN (
                                        SELECT UID, MAX(expression_count) AS max_expression_count
                                        FROM (
                                            SELECT UID, expression, COUNT(*) AS expression_count
                                            FROM facial_expression
                                            GROUP BY UID, expression
                                        ) t2
                                        GROUP BY UID
                                    ) t3 ON t1.UID = t3.UID AND t1.expression_count = t3.max_expression_count
                                ) e ON r.UID = e.UID
                                GROUP BY r.UID");

                            while ($row = mysql_fetch_array($result)) {
                            ?>
                                <tr>
                                    <td><?php echo $row['UID']; ?></td>
                                    <td><?php echo $row['totalQuestions']; ?></td>
                                    <td><?php echo $row['count2Marks']; ?></td>
                                    <td><?php echo $row['count1Marks']; ?></td>
                                    <td><?php echo $row['count0Marks']; ?></td>
                                    <td><?php echo $row['totalMarks']; ?></td>
                                    <td><?php echo $row['maxExpression']; ?></td>
              <td><a href="a_expdelete.php?id=<?php echo $row['UID'];?>"> <form><input type='button' value="DELETE"  style="background: red;color: white"></input></form></a></td>

                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</section>
