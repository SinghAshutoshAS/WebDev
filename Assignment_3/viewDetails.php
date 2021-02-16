<?php
    include 'config.php';
    $data = mysqli_query($conn, "select * from users");
?>

<html>
    <head>
        <title>User Details</title>
        <style>
            table, td, th{
                border: 2px solid black;
                border-collapse: collapse;
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <br>
        <a href="form1.php">Click here to go to homepage..</a>
        <h1></h1>
        <table align="center">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Gender</th>
                <th>City</th>
            </tr>
            <?php
                while($row = mysqli_fetch_array($data)):
            ?>
            <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['username']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['gender']?></td>
                <td><?php echo $row['city']?></td>
            </tr>
            <?php
                endwhile;
            ?>
        </table>
        <h1></h1>
    </body>
</html>