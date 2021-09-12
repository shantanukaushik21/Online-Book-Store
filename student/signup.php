<?php
	if(isset($_POST['submit']))
	{
		$hostname="localhost";
		$username="root";
		$password="";
		$database="bookmgt";
		
		$connect=mysqli_connect($hostname,$username,$password,$database) or die("SYSTEM CANNOT CONNECT TO THE SERVER");
        /*if($connect)
		{
			echo "connection set up successfully";
		}
		else
		{
			echo "connection abort";
		}*/
		$fname = $_POST['fname'];
		$lname= $_POST['lname'];
		$pincode= $_POST['pincode'];
		$phoneno= $_POST['phoneno'];
		$emailid= $_POST['emailid'];
		$password= $_POST['password'];
		$birthday= $_POST['birthday'];
		$city= $_POST['city'];
		$state= $_POST['state'];
		
		
		$sql1="INSERT INTO `customer`(`emailid`, `fname`, `lname`, `phoneno`, `city`, `pincode`, `state`) VALUES ('$emailid','$fname ','$lname','$phoneno','$city','$pincode','$state')";
		$sql2="INSERT INTO `cust_id`(`emailid`, `password`) VALUES ('$emailid','$password')";
		$result1 = mysqli_query($connect,$sql1);
		$result2 = mysqli_query($connect,$sql2);
		if($result1 and $result2)
		{
			//header('Loaction: login.html');
		}
		else{
			echo $result1;
			echo $result2;
		}
		
		mysqli_close($connect);
	}

?>
<html>
	<head>
		<title>online book store</title>
		<link rel="stylesheet" type="text/css" href="admin_delete.css">
		<meta charset="utf-8">
	</head>
	<style>
		.body
		{
			color:white;
			background-color:black;
			opacity:0.8;
			background-position:fixed;
			background-size:cover;
			text-align:center;
			padding-top:100px;
			padding-bottom:100px;
			margin-top:100px;
			margin-left:300px;
			margin-right:300px;
			font-size:40px;	
		}
	</style>
	
	<body  style="background-image:url('images/lib2.jpg');">
		<div class="body">YOU ARE REGISTERED <br>FOR OUR SYSTEM
			<form method="post" action="login.html">
				<input type="submit" name="submit" value="GO BACK" style="margin-top:30px;">
			</form>
		</div>
	</body>
<html>