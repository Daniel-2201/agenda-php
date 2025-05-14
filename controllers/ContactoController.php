<?php
require_once 'models/Contacto.php';

class ContactoController {
    public function index() {
        $modelo = new Contacto();
        $contactos = $modelo->obtenerContactos();
        require 'views/lista.php';
    }

    public function crear() {
        require 'views/formulario.php';
    }


    public function guardar() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $modelo = new Contacto();
            $modelo->guardarContacto($_POST);
            header("Location: index.php");
        }
    }
    public function eliminar() {
    if (isset($_GET['id'])) {
        $modelo = new Contacto();
        $modelo->eliminarContacto($_GET['id']);
    }
    header("Location: index.php");
    }   
    public function editar() {
    $modelo = new Contacto();
    $contacto = $modelo->obtenerContactoPorId($_GET['id']);
    require 'views/formulario.php';
    }

public function actualizar() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $modelo = new Contacto();
        $modelo->actualizarContacto($_POST);
        header("Location: index.php");
    }
    }

}   
?>
