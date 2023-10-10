<?php
//1. Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.

$numeros = [2, 4, 6, 8, 10, 12, 14, 16, 18, 20];

foreach ($numeros as $key => $value) {
    print("</br>");
    print($value);
}
print("</br>");

//2. Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la
//matriz. Mostrar el esquema del array con print_r().
$array2 = ["Pedro", "Ana", 34, 1];
print_r($array2);
print("</br>");

/* 
3. Crear un array asociativo e introducir los siguientes valores:
Nombre: Pedro
Apellido: Torres
Dirección: Av. Mayor 3703
Teléfono: 1122334455
*/
$asociativo = [
    "Nombre" => "Pedro",
    "Apellido" => "Torres",
    "Direccion" => " Av Mayor 342432",
    "Telefono" => "1122334455"
];

/* 
4. Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y
Chicago, sin asignar índices al array. A continuación, muestra el contenido del array.
Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.
*/
$ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Angeles", "Chicago"];
foreach ($ciudades as $key => $value) {
    print("</br>");
    print("La ciudad con el indice $key tiene el nombre $value");
}

/* 5. Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona,
LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.
Ejemplo: El índice de Madrid es MD.
 */
$ciudades2 = [
    "MD" => "Madrid",
    "BCL" => "Barcelona",
    "LD" => "Londres",
    "NY" => "New York",
    "LA" => "Los Angeles",
    "CCG" => "Chicago"
];

foreach ($ciudades2 as $key => $value) {
    print("</br>");
    print("La ciudad con el indice $key tiene el nombre $value");
}
