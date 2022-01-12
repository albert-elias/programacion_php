<?php

#Funciones sin parametros
function saludo(){
    
    echo "Hola mundo<br>";

}

saludo();

#Funciones con parametros

function despedida($adios) {

    echo $adios."<br>";

}

despedida ("Adios");

#Funciones con retorno

function retorno ($retornar){

    return $retornar;

}

echo retorno ("retornar");

?>