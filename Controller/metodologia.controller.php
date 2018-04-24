<?php
require_once 'Model/metodologia.php';
require_once 'Model/categoria.php';
require_once 'Model/criterio.php';
require_once 'Model/metodologia_criterio.php';

class MetodologiaController{
    private $model;
    private $model_categoria;
    private $model_criterio;
    private $model_metodologia_criterio;

    public function __CONSTRUCT(){
        $this->model = new metodologia();
        $this->model_categoria = new categoria();
        $this->model_criterio = new criterio(); 
        $this->model_metodologia_criterio = new metodologia_criterio();
    }
    //Llamado vista principal para adimistrador
    public function Index(){
        require_once 'View/header.php';
        require_once 'View/metodologia/metodologia.php';
        require_once 'View/footer.php';
    }
    
    public function Nuevo(){
        //$metodologia Lo utilizamos para poner el 'value' en el formulario HTML descomponiendolo
        $metodologia = new metodologia();
        require_once 'View/header.php';
        require_once 'View/metodologia/metodologia_editar.php';
        require_once 'View/footer.php';
    }

    public function Obtener(){
        $metodologia = new metodologia();
        if(isset($_REQUEST['idmetodologia'])){
            $row = $this->model->Obtener($_REQUEST['idmetodologia']);
            $metodologia->idmetodologia = $row['idmetodologia'];
            $metodologia->nombre = $row['nombre'];
            $metodologia->descripcion = $row['descripcion'];
            $metodologia->url = $row['url'];
        }
        if($_REQUEST['x'] == 'editar'){
            require_once 'View/header.php';
            require_once 'View/metodologia/metodologia_editar.php';
            require_once 'View/footer.php';
        }elseif($_REQUEST['x'] == 'configurar'){
            require_once 'View/header.php';
            require_once 'View/metodologia/metodologia_configurar.php';
            require_once 'View/footer.php';
        }
    }

    public function Guardar(){
        $metodologia = new metodologia();
        $metodologia->nombre = $_REQUEST['nombre'];
        $metodologia->descripcion = $_REQUEST['descripcion'];
        $metodologia->url = $_REQUEST['url'];
        $this->model->Registrar($metodologia);
        header('Location: index.php?c=metodologia');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idmetodologia']);
        header('Location: index.php');
    }

    public function Editar(){
        $metodologia = new metodologia();
        $metodologia->idmetodologia = $_REQUEST['idmetodologia'];
        $metodologia->nombre = $_REQUEST['nombre'];
        $metodologia->descripcion = $_REQUEST['descripcion'];
        $metodologia->url = $_REQUEST['url'];
        $this->model->Actualizar($metodologia);
        header('Location: index.php?c=metodologia');
    }

}