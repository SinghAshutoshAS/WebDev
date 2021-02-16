<?php
    include 'config.php';
?>

<html>
    <head>
        <title>Alter Info</title>
        <style>
            table, td, th{
                border: 2px solid black;
                border-collapse: collapse;
                padding: 10px;
            }
        </style>
    </head>
    <body style="text-align: center;"> 
        <form method = "POST">
        Username  <input type="text" placeholder=" Username" style="width: 210px" name="username" required><br><br>
        <input type="submit" name="submit" value="Click Here">
        <hr>
        </form>
    </body>
</html>

<?php
if(isset($_POST['submit']))
{
$username= $_POST['username'];
$sql= "select * from users where username='$username'";
$result=mysqli_query($conn,$sql);

if($result->num_rows >0){?>
    <table align="center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Userame</th>
                <th>Email</th>
                <th>Gender</th>
                <th>City</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php
        while($row=$result->fetch_assoc()){
        ?>
            <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['username']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['gender']?></td>
                <td><?php echo $row['city']?></td>
                <td><a href="edit.php?id=<?php echo $row['id']?>">
                <input style="background-color: lightblue;"type="button" value="  Edit  "></a></td>
                <td><a href="confirmDelete.php?id=<?php echo $row['id']?>">
                <input style="background-color: rgba(255,99,71,0.5);" type="button"value="Delete" name="delete"></a></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
<?php
}
else
{
    echo"No Data Found!";
}
}
?>
