<?php
	if(isset($_POST['submit']))
	{
		$hostname="localhost";
		$username="root";
		$password="";
		$database="dbms";
		
		$connect=mysqli_connect($hostname,$username,$password,$database) or die("SYSTEM CANNOT CONNECT TO THE SERVER");
        /*if($connect)
		{
			echo "connection set up successfully";
		}
		else
		{
			echo "connection abort";
		}*/
		$name = $_POST['name'];
		$address= $_POST['address'];
		$contact= $_POST['contact'];
		$email= $_POST['email'];
		$birthday= $_POST['birthday'];
		$gender= $_POST['gender'];
		$empid= $_POST['emp_id'];
		
		$sql1="UPDATE `employee` SET `name`='$name',`e-mail`='$email',`birthday`='$birthday',`contact`='$contact',`address`='$address',`gender`='$gender' WHERE `emp_id`='$empid'";
		$result1 = mysqli_query($connect,$sql1);
		
		if($result1)
		{
			//header('Location: admin_logpage.html');
		}
		else{
			header('Location: admin_login.php');
		}
		
		mysqli_close($connect);
	}

?>

<html>
	<head>
		<title>STUDENT REGISTRATION SYSTEM</title>
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
		<div class="body">YOUR IMFORMATION IS <br>UPDATED WITH<br>IN OUR SYSTEM
			<form method="post" action="admin_logpage.html">
				<button style="margin-top:30px;">GO BACK</button>
			</form>
		</div>
	</body>
<html>