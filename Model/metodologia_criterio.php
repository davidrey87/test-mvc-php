<?php
class metodologia_criterio
{
	private $pdo;
    public $idmetodologia;
    public $idcriterio;
    /*
    Comstructor para inicializar nuestro PDO
    */

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

    /*
    Obtenemos una metodologia_criterio con flitro por idmetodologia
    */
	public function Obtener($idmetodologia,$idcriterio)
	{
		try
		{
            $row = $this->pdo->row(
                "SELECT * FROM metodologias_criterios WHERE idmetodologia = ? AND idcriterio = ?",
                $idmetodologia,
                $idcriterio
			);
			return $row;
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
    }
    
    /*
    Eliminamos una metodologia_criterio por idmetodologia e idcriterio
    */

	public function Eliminar($idmetodologia, $idcriterio)
	{
		try
		{
            $this->pdo->delete('metodologias_criterios', [
                'idmetodologia' => $idmetodologia,
                'idcriterio' => $idcriterio
            ]);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
    }

    /*
    Registrar una metodologia_criterio
    */

	public function Registrar($metodologia_criterio)
	{
		try
		{
            $this->pdo->insert('metodologias_criterios', [
                'idmetodologia' => $metodologia_criterio->idmetodologia,
                'idcriterio' => $metodologia_criterio->idcriterio
            ]);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
    }
    
}