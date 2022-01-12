<?php

#Condiciones en PHP
$a = 5;
$b = 10;

if ($a < $b) {
    echo "a es menor que b";
}
echo "<br><br>";

#Swiches
$dia = "sabado";
switch ($dia){
    case 'sabado':
        echo "voy a coger";
        break;

        case 'domingo':
            echo "Voy a ordenar mi habitacion";
            break;

            case 'viernes':
                echo "manana trabajo";
                break;

                default: echo "no se que onda";
}
echo "<br><br>";

#Ciclos
$n = 1;
while($n <= 5){
    echo $n;
    $n++;
}
echo "<br><br>";

#Ciclo do while
$p = 1;
do {
    echo $p;
    $p++;
} while ($p <= 5);
echo "<br><br>";

#Ciclo for
for ($i=1; $i <= 5; $i++) { 
    echo $i;
}

?>