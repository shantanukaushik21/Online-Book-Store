<!DOCTYPE html>
<html>
	<head>
		<title>STUDENT REGISTRATION SYSTEM</title>
		<link rel="stylesheet" type="text/css" href="admin_update.css">
		<meta charset="utf-8">
	</head>
	
	<body style="background-image:url('images/lib2.jpg');">
		
		<form class="form" method="post" action="admin_upd.php">
		 
			<table style="width:100%;">
				<tr>
					<h1 class="head">UPDATE RECORD</h1>
				</tr>
				<tr>
					<td>EMPLOYEE ID </td>
					<td><input type="text" name="emp_id" required placeholder="16BCEXXX"></td>
				</tr>
				<tr>
					<td>NAME</td>
					<td><input type="text" name="name" required placeholder="Abhishek gupta"></td>
				</tr>
				<tr>
					<td>ADDRESS</td>
					<td><input type="text" name="address" required placeholder="model town"></td>
				</tr>
				<tr>
					<td>CONTACT</td>
					<td><input type="text" name="contact" required placeholder="98999808175"></td>
				</tr>
				<tr>
					<td>E-MAIL</td>
					<td><input type="email" name="email" required placeholder="abc@gmail.com">
				</tr>
				<tr>
					<td>BIRTHDAY</td>
					<td><input type="text" name="birthday" required placeholder="YYYY-MM-DD"></td>
				</tr>
				<tr>
					<td>GENDER </td>
					<td><input type="text" name="gender" required placeholder="Male/Female"></td>
				</tr>
				
			</table>
			 
			 <br><br>
			 <br><br>
			
			<input type="submit" name="submit" style="width:60px;height:30px;font-size:15px;margin-right:20px">
		</form>
	</body>
</html>