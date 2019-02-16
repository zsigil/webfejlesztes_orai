<?php
/*Lekérdezés, amely kiírja az ügyfelek nevét ABC sorrendben*/
function Ugyfelek($conn){
	$output = "";
	$query = "SELECT azon, nev
			  FROM ugyfel
			  ORDER BY nev";	
	/*Futtasok le az SQL scriptet az adatbázison*/	
	$result = $conn->query($query);	
	/*Eredményhalmaz feldolgozása*/
	if($result->num_rows >0)	{
		/*Soronként szétdaraboljuk az eredményhalmazt
			Egy sor($row) egy asszociatív tömb, amelyben
			a kulcsok az eredményhalmaz mezőnevei lesznek*/
		while($row = $result->fetch_assoc()){
			$output .= $row['nev'];
			$output .= "<form style='display: inline;' method='POST' action='delete.php'>";
			$output .= "<input type='hidden' name='azon' value='".$row['azon']."'/>";
			$output .= "<input type='submit' value='Törlés'/>";
			$output .= "</form><br/><br/>";
		}
	}
	else	{
		$output = "A lekérdezés nem adott vissza egyetlen rekordot sem!";
	}
	/*Függvény visszatérése az eredmény*/
	return $output;
}

function UjUgyfel($nev, $szulido, $irszam, $orszag, $conn){
	$query = "SELECT MAX(azon) AS id
			  FROM ugyfel";
	
	$result = $conn->query($query);
	$output = "";
	$azon;

	if($result->num_rows >0){
		$row =$result->fetch_assoc();
		$azon = $row['id']+1;
	}
	else{
		/*Ha nincs egyetlen ügyfél sem a táblában*/
		$azon = 1001;
	}
	/*Most már tudjuk, hogy milyen azonosítóval kell beszúrni az ügyfelet
	az adatbázisba ... szúrjuk be (Insert Into)*/
	
	$nev = $conn->real_escape_string($nev); //SQL Injection elleni védelem!!!
	$query = "INSERT INTO ugyfel
			  VALUES('".$azon."', '".$nev."', '".$szulido."',
			    '".$irszam."', '".$orszag."')";
				
	$result = $conn->query($query);
	if($result === true)
		$output = "Sikeres ügyfél felvétel az adatbázisba!";
	else
		$output = "Nem sikerült felvenni az ügyfelet az adatbázisba";
	
	return $output;
}

function Listazo($orszag, $conn){	
	$output = "";
	$orszag = strtoupper($orszag);
	$orszag = $conn->real_escape_string($orszag);
	$query = "SELECT nev, szulev, irszam, orsz
			  FROM ugyfel
			  WHERE orsz LIKE '%".$orszag."%'";
	
	$result = $conn->query($query);	
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			$output .="<tr>";
				$output .="<td>".$row['nev']."</td>";
				$output .="<td>".$row['szulev']."</td>";
				$output .="<td>".$row['irszam']."</td>";
				$output .="<td>".$row['orsz']."</td>";
			$output .="</tr>";
		}			
	}
	else{
		$output .="<h2>Nincs ilyen ország az adatbázisban!</h2>";
	}
	return $output;
}

?>




















