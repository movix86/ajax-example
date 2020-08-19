<?php

$busqueda = $_REQUEST["busqueda"];

$json = '[
	{"nombre":"Juan","apellido":"Franco","Edad":"35"},
	{"nombre":"Sandra","apellido":"Guzman","Edad":"34"},
	{"nombre":"Nelly","apellido":"Martinez","Edad":"55"},
	{"nombre":"Andres","apellido":"Escobar","Edad":"31"},
	{"nombre":"Andres","apellido":"Palomo","Edad":"31"},
	{"nombre":"Ana","apellido":"Paez","Edad":"30"},
	{"nombre":"Fernanda","apellido":"Gutierrez","Edad":"22"},
	{"nombre":"Luisa","apellido":"Arebalo","Edad":"22"},
	{"nombre":"Magnolia","apellido":"Sequia","Edad":"23"},
	{"nombre":"Ruben","apellido":"Nuñez","Edad":"55"},
	{"nombre":"Dario","apellido":"Suarez","Edad":"70"},
	{"nombre":"Marta","apellido":"Alva","Edad":"20"},
	{"nombre":"Lissa","apellido":"Francis","Edad":"21"},
	{"nombre":"Isabela","apellido":"Larrarte","Edad":"45"},
	{"nombre":"Alvaro","apellido":"Fierro","Edad":"50"},
	{"nombre":"Andrea","apellido":"Franco","Edad":"21"}
	
]';
$b ="";
$c ="";
$d ="";

$array = json_decode($json, true);

//var_dump($array);
if ($busqueda !== "") {
	foreach($array as $result) {
	    //var_dump($result);
	    /*
	    if ($result["nombre_fruta"]=="Platano") {
	    	echo "<h2>". $result["nombre_fruta"] ."</h2>";
	    }
	    */
	    if ($result["nombre"] == $busqueda) {
	    	$b = $result["nombre"];
	    	$c = $result["apellido"];
	    	$d = $result["Edad"];
	    	echo "<h2>". $b . " " . $c . "</h2>";
	    }
	}
}
 ?>