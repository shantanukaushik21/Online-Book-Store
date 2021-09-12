<?php

	if(isset($_POST['submit']))
	{
		$data=mysqli_connect("localhost","root","","bookmgt") or die("SYSTEM CANNOT CONNECT TO THE SERVER");
		$myusername= $_POST['emailid']; 
        $mypassword= $_POST['password'];
		$sql="SELECT * FROM `cust_id`";
		//-----------------------------------------------------------
		$result = mysqli_query($data,$sql);
		//-----------------------------------------------------------
		while($row = mysqli_fetch_array($result)) 
		{ if($row['emailid'] == $myusername and $row['password'] == $mypassword)
			{
				header('Location: logpage.html');
			}
			else if(empty($row['emailid']))
			{
				header('Location: logpage.html');
			}
			else{
				header('Location: login.html');
			}
		}
		
		
		mysqli_close($data);
	} 
	?>
