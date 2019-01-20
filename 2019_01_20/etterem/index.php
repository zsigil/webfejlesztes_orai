<?php
include("functions.php");

FileBeolvas($kinalat);

//diagnosztika
//print_r($kinalat);
?>
<!DOCTYPE html>
<html>
<head>
	<link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<h1> Üdvözöllek a Hamburger világ honlapján</h1>
	<?php
		echo Kiir($kinalat);
	?>
</body>
</html>







