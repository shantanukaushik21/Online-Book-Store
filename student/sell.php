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
		$barcode = $_POST['barcode'];
		$bname= $_POST['bname'];
		$bauthor= $_POST['bauthor'];
		$price= $_POST['price'];
		
		
		$sql1="INSERT INTO `buy_sell`(`barcode`, `bname`, `bauthor`, `price`) VALUES ('$barcode','$bname','$bauthor','$price')";
		$sql2="DELETE FROM `books` WHERE `barcode`='$barcode'";
		$result1 = mysqli_query($connect,$sql1);
		$result2 = mysqli_query($connect,$sql2);
		
		
	
		
		if($result1 and $result2)
		{
			//header('Location: officalrec.html');
		}
		else{
			//header('Location: error.php');	
			echo $result2;
		}
		
		mysqli_close($connect);
	}

?>
<html>
	<head>
		<title>online Book Store</title>
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
		<div class="body">Your Book has been added to our database, keep checking your emails for best buyer<br>
			<form method="post" action="logpage.html">
				<button style="margin-top:30px;">GO BACK</button>
			</form>
		</div>
	</body>
<html>