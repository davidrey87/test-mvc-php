<?php
require_once 'Model/criterio.php';
//Al ser criterio hijo de una categoria, necesitamos mostrar la asociacion en diferentes vistas
require_once 'Model/categoria.php';

class CriterioController{
    private $model;
    private $model_categoria;

    public function __CONSTRUCT(){
        $this->model = new criterio();
        $this->model_categoria = new categoria();
    }

    //Llamado vista principal para adimistrador
    public function Index(){
        require_once 'View/header.php';
        require_once 'View/criterio/criterio.php';
        require_once 'View/footer.php';
    }

    public function Nuevo(){
        //$criterio Lo utilizamos para poner el 'value' en el formulario HTML descomponiendolo
        $criterio = new criterio();
        require_once 'View/header.php';
        require_once 'View/criterio/criterio_editar.php';
        require_once 'View/footer.php';
    }

    public function Guardar(){
        $criterio = new criterio();
        $criterio->nombre = $_REQUEST['nombre'];
        $criterio->descripcion = $_REQUEST['descripcion'];
        $criterio->idcategoria = $_REQUEST['idcategoria'];
        $this->model->Registrar($criterio);
        header('Location: index.php?c=criterio');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idcriterio']);
        header('Location: index.php?c=criterio');
    }

    public function Obtener(){
        $criterio = new criterio();
        if(isset($_REQUEST['idcriterio'])){
            $row = $this->model->Obtener($_REQUEST['idcriterio']);
            $criterio->idcriterio = $row['idcriterio'];
            $criterio->nombre = $row['nombre'];
            $criterio->descripcion = $row['descripcion'];
            $criterio->idcategoria = $row['idcategoria'];
        }
        require_once 'View/header.php';
        require_once 'View/criterio/criterio_editar.php';
        require_once 'View/footer.php';
    }

    public function Editar(){
        $criterio = new criterio();
        $criterio->idcriterio = $_REQUEST['idcriterio'];
        $criterio->nombre = $_REQUEST['nombre'];
        $criterio->descripcion = $_REQUEST['descripcion'];
        $criterio->idcategoria = $_REQUEST['idcategoria'];
        $this->model->Actualizar($criterio);
        header('Location: index.php?c=criterio');
    }

}