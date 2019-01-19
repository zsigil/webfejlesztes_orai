<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<?php
		/*Kiíratás PHP-ben*/
		echo "Első PHP kódom!";
		/*HTML címkéket is tudunk kiíratni*/
		echo "<h1> Ez egy cím</h1>";
		
		/*Gyengén típusos nyelv a PHP... de miért?*/
		$szam = 5; //változó deklaráció
		var_dump($szam);	//megmondja egy változóról, hogy mi az értéke és típusa
		$szam2 = "5";
		var_dump($szam2);
		$log_ertek = true;
		var_dump($log_ertek);
		$log_ertek = "igaz";
		var_dump($log_ertek);
		
		echo "<br/><br/>";
		/*String összefűzés a . karakterrel*/
		echo "A szám értéke: ".$szam."<br/>";
		
		/*Operátorok működése - + - * / . %*/
		$a = 5;
		$b = "3";
		$x = $a+$b;	//vajon mi lesz x értéke?
		echo $x ."<br/>";	//értéke: 8, típusa: int
		$y = $a.$b;
		echo $y ."<br/>";		//értéke: "53", típusa: string
		
		$egyik = 8;
		$masik = 9;
		$atlag = ($egyik+$masik)/2;
		var_dump($atlag);
		
		/**/
		
		
	?>
</body>
</html>
