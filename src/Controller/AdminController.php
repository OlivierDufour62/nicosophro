<?php

namespace App\Controller;

use PDO;
use Core\Db;
use Core\Manager;
use Core\Controller;
use App\Repository\ContactManager;
use Symfony\Component\VarDumper\VarDumper;


class AdminController extends Controller
{
    
    public function __construct(private Manager $manager)
    { 

    }
    
    public function index()
    {
        return $this->render('admin/accueil.php');
    } 

    public function displayMessage()
    {

        $test = $this->getManager(ContactManager::class)->findAll();

        $coucou = new VarDumper;
        $coucou->dump($test);

        return $this->render('admin/message', ['test' => $test]);

    }
}
