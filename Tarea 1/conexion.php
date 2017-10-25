<?php
$host = "localhost";
$user = "root";
$pw = "";
$db = "universidad";
 
 $conn = mysqli_connect($host, $user, $pw, $db);
   
         if(! $conn ) {
            die('No se puede conectar: ' . mysqli_error());
         }

         $sql = "SELECT * FROM `carreras`";
         $carreras = mysqli_query($conn, $sql);  
        
if (!empty($_POST)) {

   $estudiante = (object) ['cedula' => $_POST['cedula'],
                          'nombre'=> $_POST['nombre'],
                           'apellido'=> $_POST['apellido'],
                           'fecha'=> getdate()];
   $sql = "INSERT INTO `estudiantes`(`cedula`, `nombre`, `apellido`, `fecha`) VALUES ('$estudiante->cedula', '$estudiante->nombre', '$estudiante->apellido', NOW())";
   mysqli_query($conn, $sql);

   $sql = "SELECT LAST_INSERT_ID();";
   $result = mysqli_query($conn, $sql);
   $row = mysqli_fetch_assoc($result);
   $id = (int)$row['LAST_INSERT_ID()'];
   $carrera = $_POST['carrera'];
   $sql = "SELECT id FROM `carreras` WHERE nombre = '$carrera'";
   $result = mysqli_query($conn, $sql);
   $row = mysqli_fetch_assoc($result);
   $idCarrera = $row['id'];
   $sql = "INSERT INTO `estudiante_carrera`(`id_estudiante`, `id_carrera`) VALUES ('$id', '$idCarrera')";
   mysqli_query($conn, $sql);
   echo "<script> alert('Matriculado')</script>";
}
 mysqli_close($conn);

 ?>