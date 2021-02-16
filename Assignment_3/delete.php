<?php
include('config.php');
$id=$_GET['id'];
$sql= "delete from users where id=$id";
    mysqli_query($conn,$sql);
    header("Location:viewDetails.php");
?>