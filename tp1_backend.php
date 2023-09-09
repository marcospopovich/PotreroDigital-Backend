<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP 1 php --- Potrero Digital</title>
    
<style>
    body {
    margin 0;
    padding 0;
    font-size: 1.5rem;  
    background-color: #331D2C;
color: #EFE1D1;

}
 p {
    color: #A78295;
    font-size: 1.8rem;
 }
 h2 {
    color: #331D2C;
 }
 footer {
text-align: center;
 }
 span {
    text-decoration: none;
 }
</style>
 
</head>
<body>
    
    <h1>TP 1 Backend - Potrero Digital</h1>

<h4>Ejercicio 1</h4>

<p>1. Imprima por pantalla: “Hola mundo”.</p>
    <?php
    // Ejercicio 1
    print("Hola Mundo");
    print("</br>");
    ?> 
    <h2>Ejercicio 2</h2>
    <p>2. Cargue en una variable la cadena de caracteres “Hola mundo” y luego la imprima por pantalla.</p>
    <?php
    //Ejercicio 2
    $mensaje = "Hola Mundo";
    print("</br>");
    print($mensaje);
    print("</br>");
    ?>
    <h2>Ejercicio 3</h2>
    <p>3. Crear dos variables enteras y mostrar por pantalla, la suma, la resta, la multiplicación, la división
entera y el resto de la división entera.</p>
    <?php
    //Ejercicio 3
    $num1 = 23;
    $num2 = 15;
    print("Los numeros elegidos son: " . $num1 . " y " . $num2);
    print("</br>");
    print("Suma: ".($num1 + $num2));
    print("</br>");

    print("Resta: ". ($num1 - $num2));
    print("</br>");

    print("Multiplicacion: ". ($num1 * $num2));  
    print("</br>");

    print("Division: ".($num1 / $num2));
    print("</br>");

    print("Resto: ". ($num1 % $num2));
    ?>
    <h2>Ejercicio 4</h2> 
    <p>4. Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por
pantalla.</p>
    <?php
    $celcius = 20;
    $fahrenheit = ($celcius * 9 / 5) + 32;
    print($celcius. " grados celcius son: " .$fahrenheit . "  Grados fahrenheit");
    ?>

    <h2>Ejercicio 5</h2>
    <p>5. Implementar algoritmos que permitan:
</br>
a) Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm.
</br>

b) Calcular el perímetro y el área de un círculo dado que su radio es de 30cm.</p>
</br>

<?php
$rectanguloBase = 18;
$rectanguloAltura = 12;
$circuloRadio = 30;
$PI = 3.14;

$perimetroRectangulo = $rectanguloBase + $rectanguloAltura; 
$areaReactangulo = $rectanguloBase * $rectanguloAltura;
$perimetroCirculo = $PI * $circuloRadio + $circuloRadio ;
$areaCirculo =  $PI * ($circuloRadio * $circuloRadio) ;


print("El perimetro del rectangulo es " . $perimetroRectangulo . " cm y el area es ". $areaReactangulo . " cm") ;
print("</br>");
print("El perimetro del circulo es ".$perimetroCirculo ." cm  y el area es: " . $areaCirculo . " cm.")
?>
    

    <footer>
</br>
    <span >&copy; <?php echo date('Y') ?>  Desarrollado  por <a target="_blank" href="http://www.linkedin.com/in/marcos-popovich">Marcos Popovich</a> </span> 
    </footer>
</body>
</html>