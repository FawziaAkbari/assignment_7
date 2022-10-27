<?php
    require_once 'connection.php';

    $query1 = "INSERT INTO teacher (name, last_name, position,gender, phone, address, email, photo) VALUES ('Ahmad', 'Mohammadi', 'teacher', 1, 897654332, 'Kabul street_7', 'ahad@gamil.com','imag.jpg' )";
    $result = $db_connection->query($query1);

    $query5 = "INSERT INTO teacher (name, last_name, position,gender, phone, address, email, photo) VALUES ('Akbar', 'Mohammadi', 'teacher', 1, 897650332, 'Kabul street_7', 'adhad@gamil.com','imag.jpg' )";
    $result = $db_connection->query($query5);

    $query2 = "UPDATE teacher SET phone=+937987433, name='Ahmad Ali' WHERE teacher_id=1";
    $result = $db_connection->query($query2);

    $query4 = "DELETE FROM teacher WHERE teacher_id=2";
    $result = $db_connection->query($query4);
    
    $query7 = "select * from teacher";
    $result = $db_connection->query($query7);




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
            <th>Teacher_ID</th>
            <th>Name</th>
            <th>Last Name</th>
            <th>Position</th>
            <th>Gender</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Email</th>
            <th>Photo</th>
        </tr>
            <?php foreach($result as $show) {?>
                <tr>
                    <td><?php echo $show['teacher_id'] ?></td>
                    <td><?php echo $show['name'] ?></td>
                    <td><?php echo $show['last_name'] ?></td>
                    <td><?php echo $show['position'] ?></td>

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