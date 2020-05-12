<?php
include 'connection.php';
?><html>
<body>

<?php 
	if(isset($_POST["search"])){
		//echo "hello";
		
		$search = $_POST["search"];
		$sql = "SELECT * FROM events WHERE eventName LIKE '%$search%' OR date LIKE '%$search%' OR location LIKE '%$search%' OR dn LIKE '%$search%' OR cost LIKE '%$search%' OR hours LIKE '%$search%' OR musicType LIKE '%$search%' ";
		
		$result = $conn->query($sql);
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