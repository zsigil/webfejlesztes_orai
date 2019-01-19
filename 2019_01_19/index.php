<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<?php
		/*Vezérlési szerkezetek*/
		
		/*Elágazások (if-elsif-else)*/
		
		$szam = 5;
		$szam2 = "5";
		if($szam == $szam2) //== csak értéket vizsgál
		{
			echo "Egyenlő az értékük<br/>";
		}
		else
		{
			echo "Nem egyenlő az értékük<br/>";
		}
		
		if($szam === $szam2) //=== értéket és típust is vizsgál
		{
			echo "Értéké és típus is megegyezik<br/>";
		}
		else
		{
			echo "Nem egyezik az érték vagy a típus<br/>";
		}
		
		/*Switch-case szerkezek*/
		
		$x = "péntek";
		switch($x)
		{
			case "hétfő":
				echo "A hét első napja";
				break;
			case "kedd":
				echo "Kedd van!";
				break;
			case "szerda":
				echo "Mindjárt péntek";
				break;
			case "csütörtök":
				echo "Csütörtök";
				break;
			case "péntek":
				echo "Mehetünk haza";
				break;
			default:
				echo "Hétvége";
				break;
		}
		
		/*For ciklus*/
		echo "<br/><br/>";
		for($i=1; $i<=6; $i++)
		{
			echo "<h".$i;
			echo " style='color: #".$i.$i.$i."'";
			echo "> Címsor ".$i."</h".$i.">";
		}
		
		/*while ciklus*/
		$i=1;
		while($i<=5){
			?>
			<p> Valami </p>
			<?php
			$i++;
		}
		
		/*Alternatív írásmód a vezérlési szerkezetben*/
		$i=0;
		while($i<5):
		?>
			<p> Más valami</p>
		<?php
		$i++;
		endwhile;
		
		
		/*Tömbök*/
		$tomb = array(167, 178, 190, 169, 201, 159, 163, 175, 176, 178);
		
		echo "<h2> Magasságok: </h2>";
		echo "<ul>";
		
		for($i=0; $i<sizeof($tomb); $i++){
			echo "<li>".$tomb[$i]." cm</li>";
		}	
		echo "</ul>";
		
		/*Max elem kiválasztás*/
		$max = $tomb[0];
		for($i=1; $i<sizeof($tomb); $i++)
			if($tomb[$i]>$max)
				$max = $tomb[$i];
			
		echo "<h2> Max magasság: ".$max." cm</h2>";
		
		
		/*Asszociatív tömbök (kulcs->érték párok)*/
		$tantargy = array("Hálózatok"=>1,
						  "Webfejlesztés"=>5,
						  "Szoftverfejlesztés"=>4,
						  "Foglalkoztatás"=>"Pótvizsga");
						  
		/*Asszociatív tömb bejárása foreach-el*/
		$i = 0;
		$output = "";
		$output .= "<table>";
		$output .= "<tr><th>Tantárgy</th><th>Érdemjegy</th></tr>";
		foreach($tantargy as $key=>$value){
			$output .= "<tr";
			$output .= ($i%2==1)?(" style='background-color: #ccc;'"):'';
			$output .= ">";
			$output .= "<td>".$key."</td>";
			$output .= "<td>".$value."</td>";
			$output .= "</tr>";
			$i++;
		}
		$output .= "</table>";
		echo $output;
		
		/*Kombináljuk a tömböket*/
		$toyota = array("Corolla"=>"1.6 benzin",
						"Yaris"=>"1.3 benzin",
						"Avensis"=>"1.5 diesel");
		$ford = array("Focus"=>"1.8 diesel",
					  "Fiesta"=>"1.0 ecoboost");
		$trabant = array("601"=>"Kétütemű csodajárgány",
						 "1100"=>"Négyütemű csodajárgány");
		$opel = array("Astra"=>"1.6 benzin",
					  "Zafira"=>"1.9 TdCi",
					  "Vectra"=>"2.0 benzin");
		
/*//Alternatív mód		
		$autok = array();
		$autok[0] = $toyota;
		$autok[1] = $ford;
		$autok[2] = $trabant;
		$autok[3] = $opel;
*/	
		$autok = array($toyota, $ford, $trabant, $opel);
		//print_r($autok);  //rendezetlen kiíratás

		$output = "";
		$output .= "<br/>Autók: <br/>";
		for($i=0; $i<sizeof($autok); $i++) //autok tömb bejárása
		{
			foreach($autok[$i] as $key=>$value) //autótípus tömbök bejárása
			{
				$output .= $key . "=>" . $value."<br/>";
			}
			$output .= "<br/>";
		}
		echo $output;
	?>
</body>
</html>









