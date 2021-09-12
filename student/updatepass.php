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
		//----------------------------------------------------------------------------------------------------
		$opassword= $_POST['opassword'];
		$npassword= $_POST['npassword'];
		//----------------------------------------------------------------------------------------------------
		$sql1="UPDATE `cust_id` SET `password`= '$npassword' WHERE `password`= '$opassword'";
		$result1 = mysqli_query($connect,$sql1);
		
		if($result1)
		{
			//echo "<h1>password update successfully</h1>";
		}
		else{
			header('Location: logpage.html');		
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
		<div class="body">PASSWORD IS UPDATED <br>IN OUR DATABASE
			<form method="post" action="logpage.html">
				<button style="margin-top:30px;">GO BACK</button>
			</form>
		</div>
	</body>
<html>
