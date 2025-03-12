<?php
// Iniciar sesión (si es necesario)
session_start();

// Incluir archivos necesarios (modelo, controlador, etc.)
require_once '../app/controllers/SexoController.php';

// Crear el controlador y llamar a su método
$controller = new SexoController();
$controller->index();
?>
