<?php
require_once 'Model/metodologia_criterio.php';

class Metodologia_criterioController{
    private $model;
    public function __CONSTRUCT(){
        $this->model = new metodologia_criterio();
    }

    public function Obtener(){
        $metodologia_criterio = new metodologia_criterio();
        if(isset($_REQUEST['idmetodologia']) && isset($_REQUEST['idcriterio'])){
            $row = $this->model->Obtener($_REQUEST['idmetodologia'],$_REQUEST['idcriterio']);
            $metodologia_criterio->idmetodologia = $row['idmetodologia'];
            $metodologia_criterio->idcriterio = $row['idcriterio'];
        }
    }

    public function Guardar(){
        $metodologia_criterio = new metodologia_criterio();
        $metodologia_criterio->idmetodologia = $_REQUEST['idmetodologia'];
        $metodologia_criterio->idcriterio = $_REQUEST['idcriterio'];
        $this->model->Registrar($metodologia_criterio);
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idmetodologia'],  $_REQUEST['idcriterio']);
    }

}