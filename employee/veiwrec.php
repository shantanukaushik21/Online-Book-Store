<!DOCTYPE html>
<?php
	$database= mysqli_connect("localhost","root","","bookmgt") or die("unable to connect");
	$sql="SELECT * FROM `transaction`";
	$record=mysqli_query($database,$sql);
?>	

<html>
	<head>
		<title>STUDENT REGISTRATION SYSTEM</title>
		
		<meta charset="utf-8">
	</head>
	<!-- -->
	<style>
		.table1{
			padding-top: 10px;
			margin-top:50px;
			padding-bottom:250px;
			margin-left:700px;
			margin-right:500px;
			text-align:center;
			color:white;
			border:2px solid black;
			background-color:black;
			opacity:0.8;
		}
		.table2{
			padding-top: 10px;
			margin-top:50px;
			padding-bottom:250px;
			margin-left:500px;
			margin-right:500px;
			text-align:center;
			color:white;
			border:2px solid black;
			background-color:black;
			opacity:0.8;	
		}
		.table3{
			padding-top: 10px;
			margin-top:50px;
			padding-bottom:250px;
			margin-left:400px;
			margin-right:500px;
			text-align:center;
			color:white;
			border:2px solid black;
			background-color:black;
			opacity:0.8;	
		}
		
		.th1
		{	padding-right:31px;
			padding-left:31px;
		}
		.th2{
			padding-right:59px;
			padding-left:59px;
		}
		.th3{
			padding-right:40px;
			padding-left:40px;
		}
		body{
			background-image:url('images/lib2.jpg');
			background-size:cover;
			background-repeat:no-repeat;
			background-attachment:fixed;
			margin-top:0px;
		}
		.head{
			margin-left:400px;
			margin-right:400px;
			text-align:center;
			color:white;
			border:2px solid black;
			background-color:black;
			opacity:0.8;
			
		}
		.butt{
			margin-top:100px;
			margin-left:850px;
		}
		
	</style>
	
	<body>
	
	 
	<table class="table1">
		
		<tr><h1 class="head">TRANSACTION RECORD</h1></tr>
		<tr>
			<th class="th1">CARD NUMBER</th>
			<th class="th1">AMOUNT</th>
			<th class="th1">BANK</th>
			
		</tr>
		
		<tr>
		<?php
		while($row = mysqli_fetch_array($record)){
		?>	
			<td><?php echo $row['cardno']; ?></td>
			
			
			<td><?php echo $row['amount']; ?></td>
			
			
			<td><?php echo $row['bank']; ?></td>
			
			<tr>
			</tr>
			
		<?php
		}
		?>
		</tr>
		
	</table>
	<!------------------------------------------------------------------------------------------------------>
		<form method="POST" action="admin_logpage.html">
			<input type="submit" name="submit" value="GO BACK"class='butt' style="width:150px;height:30px; ">
		</form>

	
	</body>
</html>











