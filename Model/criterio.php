<?php
class criterio
{
	private $pdo;
    public $idcriterio;
    public $nombre;
	public $descripcion;
	public $idcategoria;

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
    Obtenemos una lista de todas las criterios sin flitro Listamos las criterios
    */

	public function Listar()
	{
		try
		{
			$rows = $this->pdo->run('SELECT * FROM criterios');
			return $rows;
        }
		catch(Exception $e)
		{
			die($e->getMessage());
		}
    }

    /*
    Obtenemos una criterio con flitro por idcriterio
    */
	public function Obtener($idcriterio)
	{
		try
		{
            $row = $this->pdo->row(
                "SELECT * FROM criterios WHERE idcriterio = ?",
                $idcriterio
			);
			return $row;
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
    }
	
	    /*
    Obtenemos una criterio con flitro por idcriterio
    */
	public function Obtener_x_Categoria($idcategoria)
	{
		try
		{
            $row = $this->pdo->run(
                "SELECT * FROM criterios WHERE idcategoria = ?",
                $idcategoria
			);
			return $row;
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
    }

    /*
    Eliminamos una criterio por idcriterio
    */

	public function Eliminar($idcriterio)
	{
		try
		{
            $this->pdo->delete('criterios', [
                'idcriterio' => $idcriterio
            ]);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
    }
    
    /*
    Eliminamos una criterio por idcriterio - *Falta poner el idcriterio en el query
    */

	public function Actualizar($criterio)
	{
		try
		{
            $this->pdo->update('criterios', [
                'nombre' => $criterio->nombre,
				'descripcion' => $criterio->descripcion,
				'idcategoria' => $criterio->idcategoria
            ], [
                'idcriterio' => $criterio->idcriterio
            ], [

            ]);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
    }
    
    /*
    Registrar una criterio
    */

	public function Registrar($criterio)
	{
		try
		{
            $this->pdo->insert('criterios', [
                'nombre' => $criterio->nombre,
                'descripcion' => $criterio->descripcion,
				'idcategoria' => $criterio->idcategoria
            ]);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
    }
    
}