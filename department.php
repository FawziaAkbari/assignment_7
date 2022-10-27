<?php
    require_once 'connection.php';

    $query1 = "INSERT INTO department (department_name, start_date, end_date, time, teacher, student_id) VALUES ('IS', '2017/3/12', '2022/9/4','8-12PM', 3,4)";
    $result = $db_connection->query($query1);

    $query2 = "UPDATE department SET teacher=1 WHERE department_id=1";
    $result = $db_connection->query($query2);

    $query3 = "DELETE FROM department WHERE department_id=2";
    $result = $db_connection->query($query3);
    
    $query4 = "select * from department";
    $result = $db_connection->query($query4);




?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>University</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Department_ID</th>
            <th>Department_Name</th>
            <th>Start_Date</th>
            <th>End_Date</th>
            <th>Time</th>
            <th>Teacher</th>
            <th>Student</th>
        </tr>
            <?php foreach($result as $show) {?>
                <tr>
                    <td><?php echo $show['department_id'] ?></td>
                    <td><?php echo $show['department_name'] ?></td>
                    <td><?php echo $show['start_date'] ?></td>
                    <td><?php echo $show['end_date'] ?></td>
                    <td><?php echo $show['time'] ?></td>
                    <td><?php echo $show['teacher'] ?></td>
                    <td><?php echo $show['student_id'] ?></td>
                    
                  
                </tr>
            <?php } ?>
    </table>
</body>
</html>