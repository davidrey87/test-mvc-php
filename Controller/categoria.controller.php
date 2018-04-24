<?php
require_once 'Model/categoria.php';
class CategoriaController{
    private $model;
    public function __CONSTRUCT(){
        $this->model = new categoria();
    }
    //Llamado vista principal para adimistrador
    public function Index(){
        require_once 'View/header.php';
        require_once 'View/categoria/categoria.php';
        require_once 'View/footer.php';
    }
    
    public function Nuevo(){
        //$categoria Lo utilizamos para poner el 'value' en el formulario HTML descomponiendolo
        $categoria = new categoria();
        require_once 'View/header.php';
        require_once 'View/categoria/categoria_editar.php';
        require_once 'View/footer.php';
    }

    public function Guardar(){
        $categoria = new categoria();
        $categoria->nombre = $_REQUEST['nombre'];
        $categoria->descripcion = $_REQUEST['descripcion'];
        $categoria->pregunta = $_REQUEST['pregunta'];
        $this->model->Registrar($categoria);
        header('Location: index.php?c=categoria');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idcategoria']);
        header('Location: index.php');
    }

    public function Obtener(){
        $categoria = new categoria();
        if(isset($_REQUEST['idcategoria'])){
            $row = $this->model->Obtener($_REQUEST['idcategoria']);
            $categoria->idcategoria = $row['idcategoria'];
            $categoria->nombre = $row['nombre'];
            $categoria->descripcion = $row['descripcion'];
            $categoria->pregunta = $row['pregunta'];
        }
        require_once 'View/header.php';
        require_once 'View/categoria/categoria_editar.php';
        require_once 'View/footer.php';
    }

    public function Editar(){
        $categoria = new categoria();
        $categoria->idcategoria = $_REQUEST['idcategoria'];
        $categoria->nombre = $_REQUEST['nombre'];
        $categoria->descripcion = $_REQUEST['descripcion'];
        $categoria->pregunta = $row['pregunta'];
        $this->model->Actualizar($categoria);
        header('Location: index.php?c=categoria');
    }

}