<?php

namespace App\Controller;

use PDO;
use Core\Db;

class Admin extends Db
{

    public function getMessage()
    {
        $sql = "SELECT * FROM contact c WHERE c.read = false";
        $req =  $this->getBdd()->query($sql);
        $result = $req->fetch(PDO::FETCH_ASSOC);
        echo '<pre>';
        var_dump($result);
    }
}
