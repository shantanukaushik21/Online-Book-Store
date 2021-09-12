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
		$card= $_POST['cardno'];
		$cvv= $_POST['cvv'];
		$pincode= $_POST['pincode'];
		$amount= $_POST['amount'];
		$bank= $_POST['bank'];
		
		$sql1="INSERT INTO `transaction`(`cardno`, `cvv`, `pincode`, `amount`, `bank`) VALUES ('$card','$cvv','$pincode','$amount','$bank')";
		$result1 = mysqli_query($connect,$sql1);
		if($result1)
		{
			//header('Location: transaction.html')
		}
		else{
			header('Location: error.php');
		}
		
		mysqli_close($connect);
	}

?>
<<html>
	<head>
		<title>ONLINE BOOK STORE</title>
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
		<div class="body"> CHECK OUR MAIL FOR CONFIRMATION AND PAYMENT<br> 
			<form method="post" action="logpage.html">
				<button style="margin-top:30px;">GO BACK</button>
			</form>
		</div>
	</body>
<html>