<?php
include 'connection.php';
?>
<!DOCTYPE HTML>
<html>  
<body>

<form action="search-query.php" method="post">
<input type="text" name="search"><br>
<input type="submit">
</form>

<?php
			$sql = "SELECT * FROM events";
			$result = $conn->query($sql);
			$queryResults = mysqli_num_rows($result);
			
			if($queryResults > 0)
			{
				while($row = $result->fetch_assoc()){
					echo "<h2>".$row['eventName']."</h2>";
					echo "<h3>".$row['location']."|".$row['dn']."</h3>";
					echo "<p>".$row['musicType']."|".$row['cost']."|",$row['hours']."</p>";
					echo "<p>".$row['date']."</p>";
				}
				
			} 
		?>



</body>
</html>