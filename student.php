<?php
    require_once 'connection.php';

    $query1 = "INSERT INTO student (name, last_name, gender, phone, address, email, photo) VALUES ('Ahmad', 'Mohammadi', 1, 97654332, 'Kabul street_10', 'ahad@gamil.com','imag.jpg' )";
    $result = $db_connection->query($query1);

    $query2 = "UPDATE student SET phone=+937987433, name='Ahmad Ali' WHERE student_id=1";
    $result = $db_connection->query($query2);

    $query3 = "DELETE FROM student WHERE Student_id=2";
    $result = $db_connection->query($query4);
    
    $query4 = "select * from student";
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
            <th>Student_ID</th>
            <th>Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Phone</th>
            <th>address</th>
            <th>Email</th>
            <th>Photo</th>
        </tr>
            <?php foreach($result as $show) {?>
                <tr>
                    <td><?php echo $show['student_id'] ?></td>
                    <td><?php echo $show['name'] ?></td>
                    <td><?php echo $show['last_name'] ?></td>
                    <td><?php if($show['gender'] = 0) {
                        echo "Female";
                    }
                    elseif($show['gender'] = 1) {
                        echo "Male"; 
                    }
                    
                      ?></td>
                    <td><?php echo $show['phone'] ?></td>
                    <td><?php echo $show['address'] ?></td>
                    <td><?php echo $show['email'] ?></td>
                    <td><?php echo $show['photo'] ?></td>
                  
                </tr>
            <?php } ?>
    </table>
</body>
</html>