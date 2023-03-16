<?php

namespace App\Controller;

use PDO;
use Core\Db;
use Core\Manager;
use Core\Controller;
use App\Repository\UserManager;
use App\Repository\ContactManager;
use Symfony\Component\VarDumper\VarDumper;


class AdminController extends Controller
{
    

    public function __construct(private Manager $manager, private VarDumper $dump)
    {
    }

    public function index()
    {
        return $this->render('admin/accueil');
    }

    public function customerShow()
    {
        $users = $this->manager->getManager(UserManager::class)->findAll();

        return $this->render('admin/customer', ['users' => $users]);
    }

    public function displayMessage()
    {

        $test = $this->manager->getManager(ContactManager::class)->findAll();

        $coucou = new VarDumper;
        $coucou->dump($test);

        return $this->render('admin/message', ['test' => $test]);
    }
}
