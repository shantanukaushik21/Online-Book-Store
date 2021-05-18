
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
		$studid= $_POST['student_id'];
		$course1= $_POST['course1'];
		$course2= $_POST['course2'];
		$course3= $_POST['course3'];
		$credits= $_POST['credits'];
		
		$sql1="UPDATE `reg_course` SET `course1`='$course1',`course2`='$course2',`course3`='$course3',`credits`='$credits' WHERE `student_id`='$studid'";
		$result1 = mysqli_query($connect,$sql1);
		if($result1)
		{
			//header('Location: admin_logpage.html');
		}
		else{
			echo $result1;		
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
		<div class="body">COURSES UPDATED<br>IN OUR DATABASE
			<form method="post" action="admin_logpage.html">
				<button style="margin-top:30px;">GO BACK</button>
			</form>
		</div>
	</body>
<html>