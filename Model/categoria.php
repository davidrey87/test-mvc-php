<?php
class categoria
{
	private $pdo;
    public $idcategoria;
    public $nombre;
    public $descripcion;
    public $pregunta;
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
    Obtenemos una lista de todas las categorias sin flitro Listamos las categorias
    */

	public function Listar()
	{
		try
		{
			$rows = $this->pdo->run('SELECT * FROM categorias');
			return $rows;
        }
		catch(Exception $e)
		{
			die($e->getMessage());
		}
    }

    /*
    Obtenemos una categoria con flitro por idcategoria
    */
	public function Obtener($idcategoria)
	{
		try
		{
            $row = $this->pdo->row(
                "SELECT * FROM categorias WHERE idcategoria = ?",
                $idcategoria
			);
			return $row;
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
    }

    /*
    Obtenemos solo el nombre de una categoria con flitro por idcategoria
    */
	public function ObtenerNombre($idcategoria)
	{
		try
		{
            $row = $this->pdo->row(
                "SELECT * FROM categorias WHERE idcategoria = ?",
                $idcategoria
			);
			return $row['nombre'];
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
    }
    
    /*
    Eliminamos una categoria por idcategoria
    */

	public function Eliminar($idcategoria)
	{
		try
		{
            $this->pdo->delete('categorias', [
                'idcategoria' => $idcategoria
            ]);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
    }
    
    /*
    Eliminamos una categoria por idcategoria - *Falta poner el idcategoria en el query
    */

	public function Actualizar($categoria)
	{
		try
		{
            $this->pdo->update('categorias', [
                'nombre' => $categoria->nombre,
                'descripcion' => $categoria->descripcion,
                'pregunta' => $categoria->pregunta
            ], [
                'idcategoria' => $categoria->idcategoria
            ], [

            ]);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
    }
    
    /*
    Registrar una categoria
    */

	public function Registrar($categoria)
	{
		try
		{
            $this->pdo->insert('categorias', [
                'nombre' => $categoria->nombre,
                'descripcion' => $categoria->descripcion,
                'pregunta' => $categoria->pregunta
            ]);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
    }
    
}