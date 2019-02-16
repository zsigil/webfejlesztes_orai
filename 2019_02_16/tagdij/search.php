<?php
include("dbconnect.php");
include("functions.php");
$orszag = $_POST['orsz'];
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>Név</th>
				<th>Születési év</th>
				<th>Irányítószám</th>
				<th>Országjel</th>
			</tr>
		</thead>
		<tbody>
			<?php echo Listazo($orszag, $conn);?>
		</tbody>
	</table>
</body>
</html>
<?php
	$conn->close();
?>



