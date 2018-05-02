<?php
class test{

    private $pdo;
    public $criterios;

    public function __CONSTRUCT()
    {
        try
        {
            $this->pdo = Database::Conectar();
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }


    public function Obtener($criterios){
		try{
            $rows = $this->pdo->run(
                "SELECT m.*, 
                (
                    SELECT COUNT(mca.idcriterio) 
                    FROM metodologias_criterios mca 
                    WHERE mca.idcriterio IN ($criterios) AND m.idmetodologia = mca.idmetodologia
                )
                criterios
                FROM metodologias m ORDER BY criterios DESC"
            );
            return $rows;
		} catch (Exception $e){
			die($e->getMessage());
		}
    }
}