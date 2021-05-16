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
		$password= $_POST['password'];
		
		$sql1="INSERT INTO `employee`(`emp_id`, `name`, `e-mail`, `birthday` ,`contact`, `address`, `password`, `gender`) VALUES ('$empid','$name','$email','$birthday','$contact','$address','$password','$gender')";
		$sql2="INSERT INTO `emp_log`(`emp_id`, `password`) VALUES ('$empid','$password')";
		$result1 = mysqli_query($connect,$sql1);
		$result2 = mysqli_query($connect,$sql2);
		if($result1 and $result2)
		{
			//header('Loaction: admin_logpage.html');
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
		<div class="body">SUCCESSFULLY REGISTERED<br>FOR OUR MANAGEMENT SYSTEM
			<form method="post" action="admin_logpage.html">
				<button style="margin-top:30px;">GO BACK</button>
			</form>
		</div>
	</body>
<html>

