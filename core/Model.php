<?php

namespace Core;

use Core\Connect;
use Core\Manager;
use PDO;

abstract class Model extends Connect
{

    private $db;

    public function findAll()
    {
        $query = $this->requete('SELECT * FROM ' . $this->table);
        return $query->fetchAll(PDO::FETCH_CLASS);
    }

    public function findBy(array $criteres)
    {
        $champs = [];
        $valeurs = [];

        foreach ($criteres as $champ => $valeur) {
            $champs[] = "$champ = ?";
            $valeurs[] = $valeur;
        }

        $liste_champs = implode(' AND ', $champs);

        return $this->requete('SELECT * FROM ' . $this->table . ' WHERE ' . $liste_champs, $valeurs)->fetchAll(PDO::FETCH_CLASS);
    }

    public function find(int $id)
    {
        return $this->requete('SELECT * FROM ' . $this->table.' WHERE id = '. $id)->fetchAll(PDO::FETCH_CLASS);
    }

    public function create()
    {
        $champs = [];
        $inter = [];
        $valeurs = [];

        foreach ($this as $champ => $valeur) {
            if ($valeur !== null && $champ != 'db' && $champ != 'table') {

                $champs[] = $champ;
                $inter[] = "?";
                $valeurs[] = $valeur;


            }
        }
        $liste_champs = implode(', ', $champs);
        $liste_inter = implode(', ', $inter);

        return $this->requete('INSERT INTO ' . $this->table . ' (' . $liste_champs . ')VALUES(' . $liste_inter . ')', $valeurs);
    }

    public function update()
    {
        $champs = [];
        $valeurs = [];

        foreach ($this as $champ => $valeur) {
            if ($valeur !== null && $champ != 'db' && $champ != 'table') {
                $champs[] = "$champ = ?";
                $valeurs[] = $valeur;
            }
        }
        $valeurs[] = $this->id;

        $liste_champs = implode(', ', $champs);

        return $this->requete('UPDATE ' . $this->table . ' SET ' . $liste_champs . ' WHERE id = ?', $valeurs);
    }

    public function delete(int $id)
    {
        return $this->requete("DELETE FROM {$this->table} WHERE id = ?", [$id]);
    }


    public function requete(string $sql, array $attributs = null)
    {
        $this->db = Connect::getBdd();
        
        if ($attributs !== null) {
            $query = $this->db->prepare($sql);
            $query->execute($attributs);
    //    var_dump($attributs);
            return $query;
        } else {
            return $this->db->query($sql);
        }
    }


    public function hydrate($donnees)
    {
        foreach ($donnees as $key => $value) {
            
            $setter = 'set' . ucfirst($key);
 
            if (method_exists($this, $setter)) {

                $this->$setter($value);
            }
        }
        return $this;
    }
}
