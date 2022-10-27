<?php
    require_once 'connection.php';

    $query1 = "INSERT INTO salary (teacher_id, amount, remain, paid) VALUES (3, 2000.90, 20, 0)";
    $result = $db_connection->query($query1);

    $query2 = "UPDATE salary SET teacher_id=1 WHERE salary_id=2";
    $result = $db_connection->query($query2);

    $query3 = "DELETE FROM salary WHERE salary_id=2";
    $result = $db_connection->query($query3);
    
    $query4 = "select * from salary";
    $result = $db_connection->query($query4);




?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table border="1">
        <tr>
            <th>Salary_ID</th>
            <th>Teacher_ID</th>
            <th>Amount</th>
            <th>Remain</th>
            <th>Paid</th>
        </tr>
            <?php foreach($result as $show) {?>
                <tr>
                    <td><?php echo $show['salary_id'] ?></td>
                    <td><?php echo $show['teacher_id'] ?></td>
                    <td><?php echo $show['amount'] ?></td>
                    <td><?php echo $show['remain'] ?></td>
                    <td><?php echo $show['paid'] ?></td>
                </tr>
            <?php } ?>
    </table>
</body>
</html>