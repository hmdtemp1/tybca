<?php

//defination
$cars = array();
$cars = [];
//initialization
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";



//inline defination & initialization
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ". <br>";


echo 'Total Cars: ' . count($cars) . '<br>';

for( $i=0; $i<count($cars); $i++)
{
	echo "<br>" . $cars[$i];
}

echo "<br>";

foreach($cars as $car){
	echo "<br>" . $car;
}

?>