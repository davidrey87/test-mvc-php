<?php
class metodologia
{
	private $pdo;
    public $idmetodologia;
    public $nombre;
    public $descripcion;
	public $url;
	public $idtipo;

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
    Obtenemos una lista de todas las metodologias sin flitro Listamos las metodologias
    */

	public function Listar()
	{
		try
		{
			$rows = $this->pdo->run('SELECT * FROM metodologias');
			return $rows;
        }
		catch(Exception $e)
		{
			die($e->getMessage());
		}
    }

    /*
    Obtenemos una metodologia con flitro por idmetodologia
    */
	public function Obtener($idmetodologia)
	{
		try
		{
            $row = $this->pdo->row(
                "SELECT * FROM metodologias WHERE idmetodologia = ?",
                $idmetodologia
			);
			return $row;
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
    }
    
    /*
    Eliminamos una metodologia por idmetodologia
    */

	public function Eliminar($idmetodologia)
	{
		try
		{
            $this->pdo->delete('metodologias', [
                'idmetodologia' => $idmetodologia
            ]);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
    }
    
    /*
    Eliminamos una metodologia por idmetodologia - *Falta poner el idmetodologia en el query
    */

	public function Actualizar($metodologia)
	{
		try
		{
            $this->pdo->update('metodologias', [
                'nombre' => $metodologia->nombre,
                'descripcion' => $metodologia->descripcion,
				'url' => $metodologia->url,
				'idtipo' => $metodologia->idtipo
            ], [
                'idmetodologia' => $metodologia->idmetodologia
            ], [

            ]);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
    }
    
    /*
    Registrar una metodologia
    */

	public function Registrar($metodologia)
	{
		try
		{
            $this->pdo->insert('metodologias', [
                'nombre' => $metodologia->nombre,
                'descripcion' => $metodologia->descripcion,
				'url' => $metodologia->url,
				'idtipo' => $metodologia->idtipo
            ]);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
    }
    
}