<?php
# database.php
class Database{
    public static function Iniciar(){
        $pdo = new PDO('mysql:host=localhost;dbname=ventas;charset=utf8', 'root', 'root');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}