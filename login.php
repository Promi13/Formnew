<!DOCTYPE html>
	<html>
		<body>
		<?php
		session_start();
	$t1=$_SESSION['V1'];
	$t2=$_SESSION['V2'];

		?>
			<h1 style="text-align:center;"> USER LOGIN INFO </h1>
			<br><br>
			
			<form style="text-align:center" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				<br><br>
				<input style="text-align: center" type="submit" value= "Logout" formaction="index.php">
				<input style="text-align:center;" type="submit" value="Home" formaction="home.php"><br> <br> <br>
				<table border="1px" align="center">
   			<tr>
   				<th>sl</th>
   				<th>User-Name </th>
   				<th> Password </th>
			</tr>
   			<tr>
   				<td>1</td>
   				<td><?php echo $t1;?></td>
   				<td> <?php echo $t2;?> </td>
   			
   			</tr>

   		</table>
				
				  
			</form>
			
		</body>
		
</html>