<!DOCTYPE html>
<html>
	<head>
		<title>STUDENT REGISTRATION SYSTEM</title>
		<link rel="stylesheet" type="text/css" href="admin_signup.css">
		<meta charset="utf-8">
	</head>
	
	<body style="background-image:url('images/lib2.jpg');">
		
		<form class="form" method="post" action="admin_sign.php">
		 
			<table style="width:100%;">
				<tr>
					<h1 class="head">EMPLOYEE <br> REGISTRATION FORM</h1>
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
					<td><input type="text" name="birthday" style="width:160px" required placeholder="YYYY-MM-DD"></td>
				</tr>
				<tr>
					<td>GENDER </td>
					<td><input type="text" name="gender" style="width:160px" required placeholder="Male/Female"></td>
				</tr>
				<tr>
					<td>EMPLOYEE ID </td>
					<td><input type="text" name="emp_id" style="width:160px" required placeholder="16BCEXXX"></td>
				</tr>
				<tr>
					<td>PASSWORD </td>
					<td><input type="password" name="password" style="width:160px" required placeholder="password"></td>
				</tr>
			</table>
			 
			 <br><br>
			 <br><br>
			
			<input type="submit" name="submit" style="width:60px;height:30px;font-size:15px;margin-right:20px">
		</form>
	</body>
</html>