<?php
include_once "../model/registro.php";
$usuarioM = new \modelo\registro;
$response = $usuarioM->read();

echo json_encode($response);
unset($usuarioM);
unset($response);
