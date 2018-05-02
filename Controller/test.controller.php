<?php
require_once 'Model/test.php';
require_once 'Model/metodologia.php';
require_once 'Model/categoria.php';
require_once 'Model/criterio.php';
require_once 'Model/metodologia_criterio.php';

class TestController{
    private $model;
    private $model_metodologia;
    private $model_categoria;
    private $model_criterio;
    private $model_metodologia_criterio;

    public function __CONSTRUCT(){
        $this->model = new test();
        $this->model_metodologia = new metodologia();
        $this->model_categoria = new categoria();
        $this->model_criterio = new criterio(); 
        $this->model_metodologia_criterio = new metodologia_criterio();
    }

    public function Index(){
        require_once 'View/header.php';
        require_once 'View/test/test.php';
        require_once 'View/footer.php';
    }

    public function Resultado(){
        if(isset($_REQUEST['criterios'])){
            $this->model->criterios = $_REQUEST['criterios'];
        }
        require_once 'View/header.php';
        require_once 'View/test/resultado.php';
        require_once 'View/footer.php';
    }

}