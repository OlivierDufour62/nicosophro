<?php

namespace Core;

use PDO;

abstract class Db 
{
    private static $pdo;

    private static function setBdd()
    {
        $user = 'root';
        $password = 'root';
        self::$pdo = new PDO('mysql:host=localhost;dbname=nicosophro_bdd', $user, $password);
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    public function getBdd()
    {
        if(self::$pdo === null){
            self::setBdd();
        }
        return self::$pdo;
    }
}
