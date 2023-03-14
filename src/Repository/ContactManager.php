<?php

namespace App\Repository;

use PDO;
use Exception;
use Core\Model;
use App\Model\Contact;


class ContactManager extends Contact
{


    public function getMessage()
    {
        $sql = "SELECT * FROM contact c";

        $stmt =  $this->getBdd()->query($sql);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        $stmt->closeCursor();

        return $result;

    }
}
