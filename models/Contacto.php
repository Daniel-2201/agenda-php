<?php
require_once 'includes/db.php';

class Contacto {
    private $conn;

    public function __construct() {
        global $conn;  
        $this->conn = $conn;
    }

    public function guardarContacto($datos) {
        $stmt = $this->conn->prepare("INSERT INTO contactos (nombre, apellido, fecha_nac, correo, direccion, numero) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss",
            $datos['nombre'],
            $datos['apellido'],
            $datos['fecha_nac'],
            $datos['correo'],
            $datos['direccion'],
            $datos['numero']
        );
        $stmt->execute();
        $stmt->close();
    }

    public function obtenerContactos() {
        $result = $this->conn->query("SELECT * FROM contactos ORDER BY id ASC");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function eliminarContacto($id) {
        $stmt = $this->conn->prepare("DELETE FROM contactos WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }

    public function obtenerContactoPorId($id) {
        $stmt = $this->conn->prepare("SELECT * FROM contactos WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }

    public function actualizarContacto($datos) {
        $stmt = $this->conn->prepare("UPDATE contactos SET nombre = ?, apellido = ?, fecha_nac = ?, correo = ?, direccion = ?, numero = ? WHERE id = ?");
        $stmt->bind_param("ssssssi",
            $datos['nombre'],
            $datos['apellido'],
            $datos['fecha_nac'],
            $datos['correo'],
            $datos['direccion'],
            $datos['numero'],
            $datos['id']
        );
        $stmt->execute();
        $stmt->close();
    }
}
?>
