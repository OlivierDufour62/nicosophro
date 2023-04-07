<?php

namespace App\Controller;

use Core\Form;
use Core\Manager;
use Core\Controller;
use App\Model\Contact;
use DateTimeImmutable;
use App\Service\Mailer;
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

        $date = new DateTimeImmutable();
        $datec = $date->format('Y-m-d H:i:s');
        
        if (Form::validate($_POST, ['lastname', 'firstname', 'phone', 'email', 'content'])) {

            $lastName = htmlspecialchars(strip_tags($_POST['lastname']));
            $firstName = htmlspecialchars(strip_tags($_POST['firstname']));
            $phone = htmlspecialchars(strip_tags($_POST['phone']));
            $email = htmlspecialchars(strip_tags($_POST['email']));
            $content = htmlspecialchars(strip_tags($_POST['content']));
            $contact = new Contact();
            
            $contact->setLastname($lastName)
                    ->setFirstname($firstName)
                    ->setPhone($phone)
                    ->setEmail($email)
                    ->setContent($content)
                    ->setDate_create($datec);
            $contact->create();
            $mail = new Mailer();
            $from = 'olivier.dufour62@yahoo.com';
            $info = $lastName . ' ' .  $firstName;
            $mail->smtpMailer($from, $from, $info, 'coucou', 'coucou');
        }
        $form = new Form;
        $form->startForm()
            ->addInput('text', 'lastname', [
                'id' => 'name',
                'class' => 'form-control',
            ])
            ->addInput('text', 'firstname', [
                'id' => 'firstname',
                'class' => 'form-control',
            ])
            ->addInput('text', 'phone', [
                'id' => 'phone',
                'class' => 'form-control',
            ])
            ->addInput('email', 'email', [
                'id' => 'email',
                'class' => 'form-control',
            ])
            ->addTextarea('content', 'content', [
                'id' => 'content',
                'class' => 'form-control resize col-10'
            ])
            ->endForm();

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
