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
		$fname= $_POST['father_name'];
		$mname= $_POST['mother_name'];
		$address= $_POST['address'];
		$contact= $_POST['contact'];
		$email= $_POST['email'];
		$birthday= $_POST['birthday'];
		$gender= $_POST['gender'];
		$studentid= $_POST['student_id'];
		
		$sql1="UPDATE `personal_info` SET `name`='$name',`father_name`='$fname',`mother_name`='$mname',`gender`='$gender',`birthday`='$birthday' WHERE `student_id`='$studentid'";
		$sql2="UPDATE `contact_info` SET `email`='$email',`address`='$address',`contact`='$contact' WHERE `student_id`='$studentid'";
		
		$result1 = mysqli_query($connect,$sql1);
		$result2 = mysqli_query($connect,$sql2);
		
		
		if($result1 and $result2)
		{
			//echo "<h1 class="ins">DATA UPDATED SUCCESSFULLY IN THE TABLE</h1>";
		}
		else{
			echo $result1;
			echo $result2;
			echo $result3;			
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
		<div class="body">STUDENT DATABASE IS <br>INSERTED IN OUR DATABASE
			<form method="post" action="admin_logpage.html">
				<button style="margin-top:30px;">GO BACK</button>
			</form>
		</div>
	</body>
<html>