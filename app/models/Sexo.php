<?php
class Sexo {
    private $conn;
    private $table_name = "sexo";

    public $id;
    public $nombre;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Crear un nuevo sexo
    public function create() {
        $query = "INSERT INTO " . $this->table_name . " (nombre) VALUES (:nombre)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":nombre", $this->nombre);
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Leer todos los sexos
    public function read() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    // Leer un solo sexo
    public function readOne() {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $this->id);
        $stmt->execute();
        return $stmt;
    }

    // Actualizar un sexo
    public function update() {
        $query = "UPDATE " . $this->table_name . " SET nombre = :nombre WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":nombre", $this->nombre);
        $stmt->bindParam(":id", $this->id);
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Eliminar un sexo
    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $this->id);
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
?>
