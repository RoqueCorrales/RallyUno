<?php 



if ((empty($argv[1]))) {
    echo 'Datos faltantes';
	die;
}else{

$txt = $argv[1];

//conexion.

     $con = mysqli_connect("localhost","root","","universidad") or die ("Error de conexion");
     echo "Conexion exitosa";

//select

$query = "SELECT * FROM `estudiante_carrera`";

$result = mysqli_query($con,$query);


$file = fopen($txt, "w");
fwrite($file, "" .PHP_EOL);
fclose($file);

while ($row = mysqli_fetch_assoc($result)) {
$idEstudiante = $row['id_estudiante'];
$idCarrera= $row['id_carrera'];
$queryCarreras = "SELECT * FROM `carreras` WHERE id = '$idCarrera' " ;


$queryEstudiantes = "SELECT * FROM `estudiantes` WHERE id = '$idEstudiante'";

$resultCarreras = mysqli_query($con,$queryCarreras);
while ($linea = mysqli_fetch_assoc($resultCarreras)){
$major = $linea['nombre'];
}
$resultEstudiantes = mysqli_query($con,$queryEstudiantes);
while($fila = mysqli_fetch_assoc($resultEstudiantes)){

$cedula = $fila['cedula'];
$nombre = $fila['nombre'];
$apellido = $fila['apellido'];
$fecha = $fila['fecha'];


}

//guardar info

$file = fopen($txt, "a");
fwrite($file, "$cedula, $nombre, $apellido, $major, $fecha\n" .PHP_EOL);
fclose($file);


}




}