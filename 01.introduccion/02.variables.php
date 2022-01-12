<?php

#Variable numerica
$numero_cinco = 5;
echo "Esto es una variable numero: $numero_cinco<br>";
var_dump($numero_cinco);
echo "<br><br>";
#Variable de texto
$palabra = "Hola mundo";
echo "Esto es una variable de texto: $palabra<br>";
var_dump($palabra);
echo "<br><br>";
#Variable boleana
$boleano = true;
echo "Esto es una variable boleana: $boleano<br>";
var_dump($boleano);
echo "<br><br>";
#Variable de arreglo
$colores = array("azul","verde","amarillo");
echo "Esto es una variable arreglo: $colores[0]<br>";
var_dump($colores);
echo "<br><br>";
#Variable de arreglo con propiedades
$verduras = array("verdura1"=>"tomate", "verdura2"=>"papas", "verdura3"=>"locote");
echo "Esto es una variable arreglo con propiedades: $verduras[verdura1]<br>";
var_dump($verduras);
echo "<br><br>";
#Variables Objetos
$frutas = (object) ["fruta1"=>"pera", "fruta2"=>"manzana", "fruta3"=>"banana"];
echo "Esto es una variable objeto: $frutas->fruta2<br>";
var_dump($frutas);

?>