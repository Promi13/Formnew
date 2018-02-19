<!DOCTYPE html>
	<html>
		<body>			
			<h2 style="text-align:center;"> REGISTER </h2>		
			<a href="index.php"> Login</a>
			<br><br>
			
			<form style="text-align:center" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
					
				<br><br>
				
				Username:
				<input type="text" name="username"><br> <br>
				Password:
				<input type="password" name="password"><br> <br>
				R-Password:
				<input type="password" name="r-password"><br> <br>
				Email:
				<input type="text" name="email"><br> <br>
				Phone:
				<input type="text" name="phone"><br> <br>
				Full-Name:
				<input type="text" name="fullname">
				<br/> <br/>
				  
				<input style="text-align:center;" type="reset" value="Reset">
				<button type="submit" value="Submit">Submit</button>
				  
			</form>
			<?php

		//$errors=array('match' => "Only letters and white space allowed",);

		session_start();

		if ($_SERVER["REQUEST_METHOD"] == "POST")
		{
				$_SESSION['V1']=$_POST["username"];
				$_SESSION['V2']=$_POST["password"];
				$_SESSION['V3']=$_POST["email"];
				$_SESSION['V4']=$_POST["phone"];
				$_SESSION['V5']=$_POST["fullname"];
				header("Location:index.php");
		}
	
	?>			
		</body>		
</html>