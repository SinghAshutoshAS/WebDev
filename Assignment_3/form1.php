<?php
include 'config.php';
if(isset($_POST["submit"])){
	$uname = $_POST["username"];
	$email = $_POST["email"];
    $gender = $_POST["gender"];
    $city = $_POST["city"];
    $check_user = "SELECT * FROM users WHERE username='$uname'";
    $res = mysqli_query($conn, $check_user);
    if (mysqli_num_rows($res) > 0) {
  	  echo "Username already exists.."; 	
    }
    else{
        $sql = "insert into users (username, email, gender, city) values ('$uname', '$email', '$gender', '$city')";
        mysqli_query($conn, $sql);
    }
} 
?>

<html>
    <head>
        <title>Homepage</title>
    </head>
    <body>
        <h3 style="text-align: center;">Enter your details</h3>
        <hr>
        <form method = "POST" action = "form1.php">
        <table cellspacing = "10">
            <tr>
                <td>Username</td>
                <td><input type="text" placeholder=" Username" style="width: 210px" name="username" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" placeholder="Mail@gmail.com" style="width: 210px " name="email" required></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td id = "radio">
                    <input type="radio" id="male" name="gender" value="male" required>
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Female</label>
                    <input type="radio" id="other" name="gender" value="other">
                    <label for="other">Other</label> 
                </td>
            </tr>
            <tr>
                <td>City</td>
                <td>
                    <select style="width: 210px " name="city" required>
                    <option>Chandigarh</option>
                    <option>Chennai</option>
                    <option>Dehradun</option>
                    <option>Delhi</option>
                    <option>Kolkata</option>
                    <option>Lucknow</option>
		            <option>Mumbai</option>
                    <option>Nagpur</option>
                    <option>Shimla</option>
		            <option>Other</option>
	                </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td style="padding-left: 60px;"><input type="submit"  value="SUBMIT" name="submit"></td>
            </tr>
        </table>
        </form>
        <hr>
        <h1></h1>
        <a href="viewDetails.php">Click here to view all details..</a>
        <br>
        <a href="alterInfo.php">Click here to alter details..</a>
    </body>
</html>