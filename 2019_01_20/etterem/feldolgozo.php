<?php
include("functions.php");
FileBeolvas($kinalat);

if(isset($_POST['kaja']))
{
	$kaja = $_POST['kaja'];
	echo "A rendelésed: ".$kaja;
	echo " az étel ára: ".ArKeres($kinalat, $kaja);

}
else
{
	echo "Nem rendeltél!!!";
}

?>