<?php

namespace App\Controller;

use PDO;
use Core\Db;
use Core\Form;
use Core\Manager;
use Core\Controller;
use App\Repository\ContactManager;
use Detection\MobileDetect;

class PublicController extends Controller
{

    public function __construct(private Manager $manager)
    {
    }

    public function index()
    {
        $testMobile = new MobileDetect;
        if ($testMobile->isMobile()) {
            return $this->render('mobile/accueil-mobile', ['testMobile' => $testMobile]);
        } else {
            return $this->render('accueil', ['testMobile' => $testMobile]);
        }
    }

    public function contact()
    {
        $testMobile = new MobileDetect;

        $form = new Form;
        $form->startForm();
        $form->addInput('text', 'test');
        $form->endForm();

        return $this->render('contact', ['form' => $form->create(), 'testMobile' => $testMobile]);
    }

    public function sophro()
    {
        $testMobile = new MobileDetect;
        return $this->render('sophro', ['testMobile' => $testMobile]);
    }

    public function individual()
    {
        $testMobile = new MobileDetect;
        return $this->render('individual', ['testMobile' => $testMobile]);
    }
}
