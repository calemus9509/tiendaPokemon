<?php
include_once "../model/registro.php";
$tipoDoc = $_POST["tipoDoc"];
$identificacion = $_POST["identificacion"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$password = $_POST["password"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];
$genero = $_POST["genero"];
$rol = $_POST["rol"];

$ususarioM = new \modelo\registro;
$ususarioM->setTipoDoc($tipoDoc);
$ususarioM->setIdentificacion($identificacion);
$ususarioM->setNombre($nombre);
$ususarioM->setApellido($apellido);
$ususarioM->setCorreo($correo);
$ususarioM->setPassword($password);
$ususarioM->setDireccion($direccion);
$ususarioM->setTelefono($telefono);
$ususarioM->setGenero($genero);
$ususarioM->setRol($rol);

$response = $ususarioM->create();
echo json_encode($response);
unset($ususarioM);
unset($response);
