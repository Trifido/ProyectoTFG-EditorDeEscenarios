<?php
	include 'Escenario.php';
	session_start();

	echo $_SESSION["nameScene"] . '</br>';
	$var = $_SESSION["auxVar"];

	//echo $var;

	

	//echo "punto minimo ( " . $punto->getX() . " , " . $punto->getY() . " , " . $punto->getZ() . " ) </br>";

	for($i=0; $i<count($var); $i++){
		echo $var[$i] . "<br>";
	}

	//echo $_SESSION["auxVar2"];
	echo $_SESSION["auxVar2"]->getX() . "  " . $_SESSION["auxVar2"]->getY() . "  " . $_SESSION["auxVar2"]->getZ();

	//echo 'coords = ' . $_SESSION["puntoMinCuadro"] . '</br>';

	//echo 'cX = ' . $_SESSION["posX"] . '</br>';
	//echo 'cZ = ' . $_SESSION["posZ"] . '</br>';

	//$escena = $_SESSION["scene"];

	//$escena->getCaras();
	//$escena->getCoords();
	
/*
	unset($_SESSION["puntoMinCuadro"]); 
	unset($_SESSION["nameScene"]);
	session_destroy();
*/

	//echo $_SESSION["auxVar"] . '</br>';

	//echo $_SESSION["puntoMinCuadro"];

?>
