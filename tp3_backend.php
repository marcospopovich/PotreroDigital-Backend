<?php

echo("<h1>Trabajo numero 3 de Backend Potrero Digital</h1>");

echo '<h2>1. Mostrar los números del 1 al 100.</h2>';

$contador1 = 1;
while ($contador1 <= 100) {
    print($contador1);
    print('<br>');
    $contador1 ++ ;

}

print('<br>');

echo('<h2>2. Mostrar los números del 100 al 1.</h2>'); 
$contador2 = 100;

while ($contador2 > 0) {
    print($contador2);
    print('<br>');
    $contador2 -- ;

}

print('<br>');

echo('<h2>3. Mostrar los números pares del 1 al 100.</h2>'); 

for ($i=1; $i <= 100; $i++) { 
    if($i % 2 == 0){
        print('<br>');
        print($i);
    }
}

echo('<h2>4. Mostrar los números impares del 1 al 100..</h2>');

print('<br>');



for ($i=0; $i <= 100; $i++) { 
    if($i % 2 !== 0){
        print('<br>');
        print($i);
    }
}

echo('<h2>5. Mostrar la suma de los números de 1 a 20.</h2>');

print('<br>');
$contador4 = 0;
for ($i=0; $i <=20 ; $i++) { 
    $contador4 = $contador4 + $i;
    print('<br>');
    print($contador4);
}



echo('<h2>6. Mostrar la suma de números pares de 1 a 20.</h2>');

print('<br>');

print('<br>');
$contador5 = 0;
for ($i=0; $i <=20 ; $i++) { 
    if($i % 2 == 0){
        $contador5 = $contador5 + $i;
        print('<br>');
        print($contador5);
    }
   
}


echo("<h3>realizado por Marcos Popovich</h3>");