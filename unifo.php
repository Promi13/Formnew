<!DOCTYPE html>
	<html>
		<body>
		<?php
		session_start();
	$t1=$_SESSION['V5'];
	$t2=$_SESSION['V4'];
	$t3=$_SESSION['V3'];
		?>
			<h1 style="text-align:center;"> USER INFO </h1>
			<br><br>
			<form style="text-align:center" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">		
				<br><br>

				<input style="text-align: center" type="submit" value= "Logout" formaction="index.php">
				<input style="text-align:center;" type="submit" value="Home" formaction="home.php"><br> <br> <br>
				<table border="1px" align="center">
   			<tr>
   				<th>sl</th>
   				<th>full-Name </th>
   				<th> Phone </th>
   				<th> Email </th>
   			</tr>
   			<tr>
   				<td>1</td>
   				<td><?php echo$_SESSION['V5'];?> </td>
   				<td><?php echo $_SESSION['V4'];?> </td>
   				<td><?php echo $_SESSION['V3'];?></td>
   			</tr>

   		</table>	  
			</form>
		</body>
</html>