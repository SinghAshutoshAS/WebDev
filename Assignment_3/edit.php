<?php
include('config.php');
$id=$_GET['id'];
$fetch = mysqli_query($conn,"select * from users where id = $id");
    $data = mysqli_fetch_array($fetch);
$val1= $data['username'];
$val2= $data['email'];
$val3= $data['gender'];
$val4= $data['city'];
if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $check_user = "SELECT * FROM users WHERE username='$username'";
  	$res = mysqli_query($conn, $check_user);
    if($val1 == $username || mysqli_num_rows($res) == 0){
        $sql= "UPDATE users SET username='$username', email='$email', gender='$gender', city='$city' WHERE id = $id" ;
    mysqli_query($conn,$sql);
    header("Location:viewDetails.php");
    }
    else 
    {
      echo "Username already exists.."; 	
    }
}
?>

<html>
    <head>
        <title>HTML Forms</title>
    </head>
<body>
<form method="POST" action="edit.php?id=<?php echo "$id"?>">
    Username<br><input type="text" name="username" value="<?php echo "$val1" ?>" required><br><br>
    Email<br><input type="email" name="email" value="<?php echo "$val2" ?>" required><br><br>
    Gender<br><input type="radio" id="male" name="gender" value="male" <?php if($val3=="male"){echo "checked";}?>>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female" <?php if($val3=="female"){echo "checked";}?>>
        <label for="female">Female</label>
        <input type="radio" id="other" name="gender" value="other" <?php if($val3=="other"){echo "checked";}?>>
        <label for="other">Other</label>
    <br><br>
    City<br><select name="city">
        <option value="Chandigarh" <?php if($val4=="Chandigarh"){echo "selected";}?>>Chandigarh</option>
        <option value="Chennai" <?php if($val4=="Chennai"){echo "selected";}?>>Chennai</option>
        <option value="Dehradun" <?php if($val4=="Dehradun"){echo "selected";}?>>Dehradun</option>
        <option value="Delhi" <?php if($val4=="Delhi"){echo "selected";}?>>Delhi</option>
        <option value="Kolkata" <?php if($val4=="Kolkata"){echo "selected";}?>>Kolkata</option>
        <option value="Lucknow" <?php if($val4=="Lucknow"){echo "selected";}?>>Lucknow</option>
        <option value="Mumbai" <?php if($val4=="Mumbai"){echo "selected";}?>>Mumbai</option>
        <option value="Nagpur" <?php if($val4=="Srinagar"){echo "selected";}?>>Srinagar</option>
        <option value="Shimla" <?php if($val4=="Shimla"){echo "selected";}?>>Shimla</option>
        <option value="Other" <?php if($val4=="Other"){echo "selected";}?>>Other</option>
    </select><br><br>
    <input type="submit" name="submit" value="Update Info">
</form>
</body>
</html>