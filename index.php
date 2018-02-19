<!DOCTYPE html>
	<html>
		<body>
			<h1 style="text-align:center">LOGIN</h1>			
			<br> <br>
				<a align="center" href="registration.php" >Registration</a>
			<form style="text-align:center" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
					
				<br><br>	
				Username:
				<input type="text" name="username"><br> <br>
				Password:
				<input type="password" name="password">	  
				<br> <br>
				  
				<input style="text-align:center;" type="submit" value="Submit">	  
			</form>
	<?php
		//$errors=array('match' => "Only letters and white space allowed",);
		session_start();
		if ($_SERVER["REQUEST_METHOD"] == "POST")
		{
			if(!empty($_POST["username"]))
			{				
				if(preg_match("/^[a-zA-Z ]*$/",$name)) 
				{
					if($_POST["username"]==$_SESSION['V1'] && $_POST["password"]==$_SESSION['V2'] )
					{
						header("location:home.php");
					}
					else
					{
						echo "use name or pass wrong";
					}
			    }
			    else
			    {
			    	echo "user name should conltain only letters";
			    }
			}
			if(empty($_POST["username"]))
			{
				echo "input user name first.<br/>"; 
			}
			if(empty($_POST["password"]))
			{
				echo "input password please"; 
			}
		}
	?>
		</body>	
</html>