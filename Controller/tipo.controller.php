<?php
require_once 'Model/tipo.php';
class TipoController{
    private $model;
    public function __CONSTRUCT(){
        $this->model = new tipo();
    }
    //Llamado vista principal para adimistrador
    public function Index(){
        require_once 'View/header.php';
        require_once 'View/tipo/tipo.php';
        require_once 'View/footer.php';
    }
    
    public function Nuevo(){
        //$tipo Lo utilizamos para poner el 'value' en el formulario HTML descomponiendolo
        $tipo = new tipo();
        require_once 'View/header.php';
        require_once 'View/tipo/tipo_editar.php';
        require_once 'View/footer.php';
    }

    public function Guardar(){
        $tipo = new tipo();
        $tipo->nombre = $_REQUEST['nombre'];
        $tipo->descripcion = $_REQUEST['descripcion'];
        $this->model->Registrar($tipo);
        header('Location: index.php?c=tipo');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idtipo']);
        header('Location: index.php?c=tipo');
    }

    public function Obtener(){
        $tipo = new tipo();
        if(isset($_REQUEST['idtipo'])){
            $row = $this->model->Obtener($_REQUEST['idtipo']);
            $tipo->idtipo = $row['idtipo'];
            $tipo->nombre = $row['nombre'];
            $tipo->descripcion = $row['descripcion'];
        }
        require_once 'View/header.php';
        require_once 'View/tipo/tipo_editar.php';
        require_once 'View/footer.php';
    }

    public function Editar(){
        $tipo = new tipo();
        $tipo->idtipo = $_REQUEST['idtipo'];
        $tipo->nombre = $_REQUEST['nombre'];
        $tipo->descripcion = $_REQUEST['descripcion'];
        $this->model->Actualizar($tipo);
        header('Location: index.php?c=tipo');
    }

}