<!DOCTYPE html>
<html>
<body>

<?php
//EJERCICIO 1

// crear array con los datos
$persona = array("nombre"=> "Sara","apellido"=> "Martinez", "edad"=> 23, "ciudad"=> "Barcelona");
$contador= 1;
// leer con foreach y hacer echo todo = Mostrar
foreach ($persona as $key => $value) {
    echo "dato". $contador. "°:". $value. "<br>";
    $contador++;
}

//EJERCICIO 2
foreach ($persona as $key => $value) {
    echo $key.":". $value. "<br>";
    $contador++;
}

//EJERCICIO 3
//actualizar dato edad de 23 a 24
$persona["edad"]= 24;

$contador= 1;
// Mostrar el dato con la nueva update
foreach ($persona as $key => $value) {
    echo "dato". $contador. "°:". $value. "<br>";
    $contador++;
}

//EJERCICIO 4
//eliminar ciudad del array
unset($persona["ciudad"]);

//muestra todo el array
var_dump(value: $persona);
echo "<br>";

//EJERCICIO 5 
//crear nuevo array: cadena de texto
$letters = "a,b,c,d,e,f";
// Usar explode
$array_letters = explode(", ", string: $letters);
// orden descendente con rsort
rsort($array_letters);

// mostrar array ordenado
$contador = count($array_letters);
foreach ($array_letters as $letter) {
    echo "letter". $contador. "°:".$letter . "<br>";
    $contador--;
}

//EJERCICIO 6
//notas en un array asociativo
echo "Notas de los estudiantes:"."<br>";
$notas= array("Miguel"=> 5,"Luís"=> 7,"Marta"=> 10, "Isabel"=> 8, "Aitor"=> 4, "Pepe"=> 1);
//ordenar de mayor a menor
arsort(array: $notas);
// mostrar las notas ordenadas
foreach ($notas as $nombre => $nota) {
    echo "$nombre: $nota  ";
}

//EJERCICIO 7
// calcular la media
$media = array_sum(array: $notas) / count(value: $notas);
echo "<br>Media de las notas: " . number_format($media, 2) . "<br>";

// mostrar alumnos con notas superiores
echo "Alumnos con nota por encima de la media:<br>";
foreach ($notas as $nombre => $nota) {
    if ($nota > $media) {
        echo "$nombre: $nota<br>";
    }
}

//EJERCICIO 8
// encontrar la nota más alta
$max_nota = max($notas);
$mejor_alumno = array_search($max_nota, $notas);

// mostrar nota y el nombre alumno
echo "El mejor alumno es $mejor_alumno con una nota de $max_nota.<br>";


?>

</body>

</html>
   