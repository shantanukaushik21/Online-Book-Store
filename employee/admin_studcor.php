
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
		$bcode = $_POST['bcode'];
		$bname= $_POST['bname'];
		$type= $_POST['type'];
		$author= $_POST['author'];
		$price= $_POST['price'];
		
		$sql1="INSERT INTO `genre`(`bcode`, `bname`, `type`, `author`, `price`) VALUES ('$bcode','$bname','$type','$author','$price')";
		$result1 = mysqli_query($connect,$sql1);
		if($result1)
		{
			//header('Location: admin_logpage.html');
		}
		else{
			header('Location: admin_logpage.html');			
		}
		
		mysqli_close($connect);
	}

?>

<html>
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
		<div class="body">BOOK IS ADDED TO THR LIBRARY
			<form method="post" action="admin_logpage.html">
				<button style="margin-top:30px;">GO BACK</button>
			</form>
		</div>
	</body>
<html>