<?php

include_once "../model/usuario.php";

$correo = $_GET["correo"];
$pass = $_GET["password"];

$usuarioM = new \modelo\Usuario;
$usuarioM->setCorreo($correo);
$usuarioM->setPassword($pass);
$response = $usuarioM->login();




if (isset($response) and !empty($response)) {
    session_start();
    $_SESSION["nombre"] = $response[0]["nombre"];
    $_SESSION["correo"] = $response[0]["correo"];
    $_SESSION["id_usuario"] = $response[0]["id"];
} else {
    echo json_encode(array());
}

echo json_encode($response);
unset($response);
unset($usuarioM);
