<?php
class Database
{
    //Conexion mediante paragonIE EasyDB
    public static function Conectar()
    {
        $pdo = \ParagonIE\EasyDB\Factory::create('mysql:host=localhost;dbname=metodologias','root','123');
        //Filtrando posibles errores de conexión.
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}