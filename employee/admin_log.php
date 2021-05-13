<?php
		if(isset($_POST['submit']))
	{
		$data=mysqli_connect("localhost","root","","bookmgt") or die("SYSTEM CANNOT CONNECT TO THE SERVER");
		$myusername= $_POST['emp_id']; 
        $mypassword= $_POST['password'];
		$sql="SELECT * FROM `admin`";
		$result = mysqli_query($data,$sql);
		//-----------------------------------------------------------
		while($row = mysqli_fetch_array($result)) 
		{ if($row['emailid'] == $myusername and $row['password'] == $mypassword)
			{
				header('Location: admin_logpage.html');
			}
			else
			{
				header('Location: admin_login.php');
			}
		}
		
		
		mysqli_close($data);
	}
?>