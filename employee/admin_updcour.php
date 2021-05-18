<!DOCTYPE html>
<html>
	<head>
		<title>STUDENT REGISTRATION SYSTEM</title>
		<link rel="stylesheet" type="text/css" href="admin_updcour.css">
		<meta charset="utf-8">
	</head>
	
	<body style="background-image:url('images/lib2.jpg');">
		
		<form class="form" method="post" action="admin_updco.php">
		 
			<table style="width:100%;">
				<tr>
					<h1 class="head">COURSE RECORDS</h1>
				</tr>
				<tr>
					<td>COURSE CODE</td>
					<td><input type="text" name="course_code" required placeholder="CSEXXXX"></td>
				</tr>
				<tr>
					<td>COURSE NAME</td>
					<td><input type="text" name="course_name" required placeholder="CRYPTOGRAPHY"></td>
				</tr>
				<tr>
					<td>FACULTY</td>
					<td><input type="text" name="faculty" required placeholder="PROF. NAGARAJUM"></td>
				</tr>
				<tr>
					<td>CREDITS</td>
					<td><input type="number" name="credits" required placeholder="5">
				</tr>
				
			</table>
			 
			 <br><br>
			 <br><br>
			
			<input type="submit" name="submit" style="width:60px;height:30px;font-size:15px;margin-right:20px">
		</form>
	</body>
</html>