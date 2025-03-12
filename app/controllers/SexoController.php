<?php
require_once '../config/database.php';
require_once '../app/models/Sexo.php';

class SexoController {
    private $sexo;
    private $db;

    public function __construct() {
        $this->db = (new Database())->getConnection();
        $this->sexo = new Sexo($this->db);
    }

    // Mostrar todos los sexos
    public function index() {
        $stmt = $this->sexo->read();
        require_once '../app/views/sexo/index.php';
    }

    // Crear un nuevo sexo
    public function create() {
	    echo   $_POST['nombre'];
	    die();
        if ($_POST) {
            $this->sexo->nombre = $_POST['nombre'];
            if ($this->sexo->create()) {
                header('Location: index.php');
            }
        }
        require_once '../app/views/sexo/create.php';
    }

    // Editar un sexo existente
    public function edit($id) {
        $this->sexo->id = $id;
        $stmt = $this->sexo->readOne();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($_POST) {
            $this->sexo->nombre = $_POST['nombre'];
            if ($this->sexo->update()) {
                header('Location: index.php');
            }
        }
        require_once '../app/views/sexo/edit.php';
    }

    // Eliminar un sexo
    public function delete($id) {
        $this->sexo->id = $id;
        if ($this->sexo->delete()) {
            header('Location: index.php');
        }
    }
}
?>
