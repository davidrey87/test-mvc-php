<?php
class tipo
{
	private $pdo;
    public $idtipo;
    public $nombre;
    public $descripcion;
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
    Obtenemos una lista de todas los tipos sin flitro Listamos los tipos
    */

	public function Listar()
	{
		try
		{
			$rows = $this->pdo->run('SELECT * FROM tipos');
			return $rows;
        }
		catch(Exception $e)
		{
			die($e->getMessage());
		}
    }

    /*
    Obtenemos una tipo con flitro por idtipo
    */
	public function Obtener($idtipo)
	{
		try
		{
            $row = $this->pdo->row(
                "SELECT * FROM tipos WHERE idtipo = ?",
                $idtipo
			);
			return $row;
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
    }

    /*
    Obtenemos solo el nombre de una tipo con flitro por idtipo
    */
	public function ObtenerNombre($idtipo)
	{
		try
		{
            $row = $this->pdo->row(
                "SELECT * FROM tipos WHERE idtipo = ?",
                $idtipo
			);
			return $row['nombre'];
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
    }
    
    /*
    Eliminamos una tipo por idtipo
    */

	public function Eliminar($idtipo)
	{
		try
		{
            $this->pdo->delete('tipos', [
                'idtipo' => $idtipo
            ]);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
    }
    
    /*
    Eliminamos una tipo por idtipo - *Falta poner el idtipo en el query
    */

	public function Actualizar($tipo)
	{
		try
		{
            $this->pdo->update('tipos', [
                'nombre' => $tipo->nombre,
                'descripcion' => $tipo->descripcion
            ], [
                'idtipo' => $tipo->idtipo
            ], [

            ]);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
    }
    
    /*
    Registrar una tipo
    */

	public function Registrar($tipo)
	{
		try
		{
            $this->pdo->insert('tipos', [
                'nombre' => $tipo->nombre,
                'descripcion' => $tipo->descripcion
            ]);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
    }
    
}