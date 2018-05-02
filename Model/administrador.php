<?php
class administrador
{
/*
	private $pdo;
    public $idadministrador;
    public $nombre;
    public $descripcion;
    
    //Comstructor para inicializar nuestro PDO

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


    //Obtenemos una lista de todas las administradors sin flitro Listamos las administradors


	public function Listar()
	{
		try
		{
			$rows = $this->pdo->run('SELECT * FROM administradors');
			return $rows;
        }
		catch(Exception $e)
		{
			die($e->getMessage());
		}
    }


    //Obtenemos una administrador con flitro por idadministrador

	public function Obtener($idadministrador)
	{
		try
		{
            $row = $this->pdo->row(
                "SELECT * FROM administradors WHERE idadministrador = ?",
                $idadministrador
			);
			return $row;
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
    }
    

    //Eliminamos una administrador por idadministrador


	public function Eliminar($idadministrador)
	{
		try
		{
            $this->pdo->delete('administradors', [
                'idadministrador' => $idadministrador
            ]);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
    }
    

    //Eliminamos una administrador por idadministrador - *Falta poner el idadministrador en el query


	public function Actualizar($administrador)
	{
		try
		{
            $this->pdo->update('administradors', [
                'nombre' => $administrador->nombre,
                'descripcion' => $administrador->descripcion
            ], [
                'idadministrador' => $administrador->idadministrador
            ], [

            ]);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
    }
    

    //Registrar una administrador


	public function Registrar($administrador)
	{
		try
		{
            $this->pdo->insert('administradors', [
                'nombre' => $administrador->nombre,
                'descripcion' => $administrador->descripcion
            ]);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
    }
*/
    
}