<!DOCTYPE html>
	<html>
	
		<body>
			
			<h1 style="text-align:center;"> HOME </h1>		
			<br><br>

			<form style="text-align:center" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			<input style="text-align: center" type="submit" value= "Logout" formaction="index.php"><br> <br>	
			<?php
				session_start();
				echo 'Hello!'. $_SESSION['V5'] ;
				//session_destroy(); 
			?>			
			<hr/>
			<input style="text-align:center;" type="submit" value="User Info" formaction="uinfo.php">
			<br> <br>
			<input style="text-align:center;" type="submit" value="User Login Info" formaction="ulinfo.php">
			</form>
		</body>	
</html>