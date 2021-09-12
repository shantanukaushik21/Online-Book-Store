<html>
<?php
//if(isset($_POST['submit']))
	{
		$hostname="localhost";
		$username="root";
		$password="";
		$database="dbms";
		
		$connect=mysqli_connect($hostname,$username,$password,$database) or die("SYSTEM CANNOT CONNECT TO THE SERVER");
		$sql1="SELECT * FROM `spotlight`";
		$record = mysqli_query($connect,$sql1);
		
		
		?><head>
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
			<div class="body">MESSAGE:<br>
			<?php 
			$i=1;
			while($row = mysqli_fetch_array($record)){
					echo $i;
					echo ".)  ";
					echo $row['information']; 
					echo "</br></br>";
					$i=$i + 1;
			}
					?>
				<form method="post" action="logpage.html">
						<input type="submit" name="submit" value="GO BACK" style="margin-top:30px;">
				</form>
			</div>
		</body>
		<?php
		
		mysqli_close($connect);
	}
		?>
</html>