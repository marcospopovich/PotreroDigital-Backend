<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tp2 Backend Potrero Digital</title>
</head>
<body>
    <h2>Crear un archivo “tp2_backend.php” y realizar los siguientes ejercicios:</h2>
    <h3>1. Crear una variable n y validar que sea un número positivo.</h3>
<?php
$n = 9;
echo "El numero Elegido es " . $n . "</br>"; 
if ($n>0){
    echo "el numero es positivo";
}elseif($n == 0){
   echo"el numero es cero";
}else{
    echo "el numero es negativo";
}

echo "</br>";
?>

<h3>2. Crear una variable n y validar que sea un número mayor a 1 y menor a 10.</h3>

<?php
if ($n>1 & $n < 10){
    echo "El numero es mayor a 1 y menor a 10";
}else{
    echo "El numero NO es mayor a 1 y menor a 10";
}
echo "</br>"
?>
<h3>3. Crear una variable n y validar que sea un número mayor a 10 o menor a 2.</h3>
<?php
echo "</br>";

if ($n>10 || $n<2){
    echo "El número es mayor a 10 o menor a 2";
}else{
    echo "El número NO es mayor a 10 o menor a 2";
}
echo "</br>"

?>
<h4>4. Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es
mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1,
mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y
numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”.</h4>

<?php
echo "</br>";
$numero1 = 14;
$numero2 = 14;
echo "Los numeros elegidos son $numero1 y $numero2: " ."</br>";
if ($numero1 > $numero2){
    echo "La suma del $numero1 + el $numero2 es " . ($numero1 + $numero2);
}elseif ($numero2 > $numero1){
    echo "La multiplicacion del numero $numero2 y el $numero1 es " . ($numero2 * $numero1) ."</br>". " La division es ". ($numero2 / $numero1) . "</br>"." y el resto es ". ($numero1 % $numero2);
   
}else{
    echo "Los Numeros Son Iguales";
}


    ?>
</body>
</html>