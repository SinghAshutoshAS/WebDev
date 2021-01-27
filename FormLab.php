<?php
$n="";
$e="";
$pn="";
$ct="";
$cou="";    
$arr=array(" ");
$s="";
if(isset($_POST["submit"])){
	$n=$_POST["name"];
	$e=$_POST["email"];
	$pn=$_POST["no"];
	$ct=$_POST["city"];
	$cou=$_POST["course"];    
	$arr=($_POST["c"]);
	$s=count($arr);
	if($s<3)
	{
		echo '<script>alert("Please select atleast 3 options")</script>'; 
		$n="";
		$e="";
		$pn="";
		$ct="";
		$cou="";    
		$arr=array("");
	}
} 
?> 
<html>
<head>
	<title>FORM</title>
	<style>
		body{
			background-color: rgb(105,105,105);
			color: white;
		}
		h2{
			text-align: center;
			color: #990066;
		}
		#table2,#td2,#th2{
			border: 4px solid black;
			border-collapse: collapse;
		}
		table{
			margin: auto;
		}
		#submit{
			color: white;
			background-color: skyblue;
			width: 200px;
		}
	</style>
</head>
<body>
<h2><u>Enter Your Details!</u></h2>
<form method="POST" action="FormLab.php">
<table cellspacing=" 25">
	<tr>
		<td>Name*</td>
		<td><input type="text" placeholder=" Name" style="width: 422px" name="name" required></td>
	</tr>
	<tr>
		<td>E-Mail Address*</td>
		<td><input type="email" placeholder="Mail@gmail.com" style="width: 422px " name="email" required></td>
	</tr>
	<tr>
		<td>Contact No*</td>
		<td><input type="text" placeholder="Phone Number" style="width: 422px" name="no"  minlength="10" required></td>
	</tr>
	<tr>
		<td>City*</td>
		<td><input type="text" name="city"  style="width: 422px" placeholder="City" required></td>
	</tr>
	<tr>
		<td>Course</td>
		<td><select style="width: 422px " name="course">
		<option >Btech</option>
		<option>Bca</option>
		<option>Bcom</option>
		<option>Bba</option>
		<option>Bsc</option>
		<option>Other</option>
	    </select></td>
	</tr>
	<tr>
		<td>Interests*</td>
		<td>Sports<input type="checkbox" value="Sports" name="c[]">
			Travel<input type="checkbox" value="Travel" name="c[]">
			Reading<input type="checkbox" value="Reading" name="c[]">
			Cooking<input type="checkbox" value="Cooking" name="c[]">
			Blogging<input type="checkbox" value="Blogging" name="c[]">
			Other<input type="checkbox" value="Other" name="c[]">
		</td>
	</tr>
	<tr>
		<td></td>
		<td style="padding-left: 60px;"><input id="submit" type="submit"  value="SUBMIT" name="submit"></td>
	</tr>
</table>
</form>
<table id="table2" cellpadding="10" >
		<tr>
			<th id="th2">Name</th>
			<th id="th2">E-Mail</th>
			<th id="th2">Contact</th>
			<th id="th2">city</th>
			<th id="th2">Course</th>
			<th id="th2">Interests</th>
		</tr>
		<tr>
		   <td id="td2"><?php echo $n ?></td>
		   <td id="td2"><?php echo $e ?></td>
		   <td id="td2"><?php echo $pn ?></td>
		   <td id="td2"><?php echo $ct ?></td>
		   <td id="td2"><?php echo $cou ?></td>
		   <td id="td2"><?php 
			   for($x=0;$x<$s;$x++)
			   {
			   	 if($arr[$x]!="")
			   	 {
			   	 	echo $arr[$x];
			   	 	if($x!= $s-1 )
			   	 	{
			   	 		echo " ," ;
			   	 	}
			   	 }
			   } 
			   ?></td>
		</tr>
</table>
</body>
</html>