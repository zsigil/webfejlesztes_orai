<?php
function FileBeolvas(&$kinalat){
	//file megnyitása olvasásra
	$file = fopen("kin-allat.txt", 'r');
	
	
	$i=0;
	while(!feof($file)){
		$sor = fgets($file);//újabb sort beolvasunk
		//string darabolása ; mentén
		$ertekek = explode(';', $sor);	
		$etel = array("Név"=>$ertekek[0],
					  "Méret"=>$ertekek[1],
					  "Ár"=>$ertekek[2]);
		$kinalat[$i]=$etel;
		$i++;		 
	}		
	//file lezárása
	fclose($file);
}

function Kiir($kinalat){
	$output = "";
	$output .="<form action='feldolgozo.php' method='post'>";
	$output .="<table>";
	$output .="<tr><th>Étel neve</th><th>Méret</th>";
	$output .="<th>Ár</th><th>Rendelés</th></tr>";
	
	
	for($i=0; $i<sizeof($kinalat); $i++)
	{		
		$output .="<tr id='sor' ";
		$output .= ($i%2==0)?"class='paros'":"class='paratlan'";
		$output .=">";
		foreach($kinalat[$i] as $key=>$value)
		{
			$output .= "<td>".$value."</td>";
		}
		$output .="<td id='radio'>";
		$output .="<input type='radio' name='kaja'";
		$output .="value='".$kinalat[$i]['Név']." : ".$kinalat[$i]['Méret']."'/>";
		
		$output .="</td>";
		$output .="</tr>";
		
	}
	$output .="</table>";
	$output .="<input type='submit' value='Megrendelem'/>";
	$output .="</form>";
	
	
	return $output;
}
function ArKeres($kinalat, $rendeles){
	$rendeles = explode(" : ", $rendeles);
	$nev = $rendeles[0];
	$meret = $rendeles[1];
	
	for($i=0; $i<sizeof($kinalat); $i++)
	{
		if($kinalat[$i]['Név']==$nev && $kinalat[$i]['Méret']==$meret){
			return $kinalat[$i]['Ár'];			
		}
	}
	
}
if(!isset($kinalat))
	$kinalat= array();

?>








