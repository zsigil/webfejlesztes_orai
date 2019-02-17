<?php
if(isset($_POST['abc']))
	$order = $_POST['abc'];

include("dbconnect.php");

function Listing($conn, $order="asc"){
	$output = "";
	$query = "SELECT username
			  FROM users
			  ORDER BY username ".$order;
	$result = $conn->query($query);
	
	if($result->num_rows>0){
		while($row = $result->fetch_assoc()){
			$output .="<tr>";
				$output .= "<td>".$row['username']."</td>";
				$output .= "<td><form action='deleteuser.php' method='POST'>";
				$output .= "<input type='hidden' name='uname' value='".$row['username']."'/>";
				$output .= "<input type='submit' value='Törlés'/>";
				$output .= "</form></td>";
			$output .="</tr>";
		}
	}
	else{
		$output .= "Az eredményhalmaz nem tartalmaz rekordod!";
	}
	return $output;
}

?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<table>
		 <tr>
			<td>
				<form action="list.php" method="POST">
					<input type="hidden" value="asc" name="abc"/>
					<input type="submit" value="ABC Növekvő"/>
				</form>
			</td>
			<td>
				<form action="list.php" method="POST">
					<input type="hidden" value="desc" name="abc"/>
					<input type="submit" value="ABC Csökkenő"/>
				</form>
			</td>
		 </tr>
		 <tr>
			<th>Felhasználók</th>
			<th>Törlés</th>
		 </tr>
		 <?php 
			if(isset($order))
				echo Listing($conn, $order);
			else
				echo Listing($conn);
		 ?>
	</table>
</body>
</html>
<?php
$conn->close();
?>