<?php
require_once 'Model/administrador.php';
class AdministradorController{
    private $model;
    public function __CONSTRUCT(){
        $this->model = new administrador();
    }

    //Llamado vista principal para adimistrador
    public function Index(){
        require_once 'View/header.php';
        require_once 'View/administrador/administrador.php';
        require_once 'View/footer.php';
    }
/*    
    public function Nuevo(){
        //$administrador Lo utilizamos para poner el 'value' en el formulario HTML descomponiendolo
        $administrador = new administrador();
        require_once 'View/header.php';
        require_once 'View/administrador/administrador_editar.php';
        require_once 'View/footer.php';
    }

    public function Guardar(){
        $administrador = new administrador();
        $administrador->nombre = $_REQUEST['nombre'];
        $administrador->descripcion = $_REQUEST['descripcion'];
        $this->model->Registrar($administrador);
        header('Location: index.php?c=administrador');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idadministrador']);
        header('Location: index.php');
    }

    public function Obtener(){
        $administrador = new administrador();
        if(isset($_REQUEST['idadministrador'])){
            $row = $this->model->Obtener($_REQUEST['idadministrador']);
            $administrador->idadministrador = $row['idadministrador'];
            $administrador->nombre = $row['nombre'];
            $administrador->descripcion = $row['descripcion'];
        }
        require_once 'View/header.php';
        require_once 'View/administrador/administrador_editar.php';
        require_once 'View/footer.php';
    }

    public function Editar(){
        $administrador = new administrador();
        $administrador->idadministrador = $_REQUEST['idadministrador'];
        $administrador->nombre = $_REQUEST['nombre'];
        $administrador->descripcion = $_REQUEST['descripcion'];
        $this->model->Actualizar($administrador);
        header('Location: index.php?c=administrador');
    }
*/
}