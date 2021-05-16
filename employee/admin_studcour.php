<!DOCTYPE html>
<html>
	<head>
		<title>ONLINE BOOK STORE</title>
		<link rel="stylesheet" type="text/css" href="admin_studcour.css">
		<meta charset="utf-8">
	</head>
	
	<body style="background-image:url('images/lib2.jpg');">
		<form class="form" method="post" action="admin_studcor.php">
			<table style="width:100%;">
				<tr>
					<h1 class="head">INSERT BOOK</h1>
				</tr>
				<tr>
					<td>BARCODE</td>
					<td><input type="text" name="bcode" required placeholder="XXXXXXXXXXXXXXXX"></td>
				</tr>
				<tr>
					<td>BOOK NAME</td>
					<td><input type="text" name="bname" required placeholder="DBMS"></td>
				</tr>
				<tr>
					<td>TYPE</td>
					<td><input type="text" name="type" required placeholder="COMP.SCI"></td>
				</tr>
				<tr>
					<td>AUTHOR</td>
					<td><input type="text" name="author" required placeholder="ALMASRI">
				</tr>
				<tr>
					<td>PRICE</td>
					<td><input type="text" name="price" required placeholder="300">
				</tr>
			</table>
			 
			 <br><br>
			 <br><br>
			
			<input type="submit" name="submit" style="width:60px;height:30px;font-size:15px;margin-right:20px">
		</form>
	</body>
</html>