<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once 'vendor/autoload.php';

session_start();


use App\Controller\AdminController;
use App\Controller\PublicController;
use Core\Manager;
use Detection\MobileDetect;
use Symfony\Component\VarDumper\VarDumper;



define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") .
    "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

define('ROOT', dirname(__DIR__));
$manager = new Manager;
$dump = new VarDumper;

$adminController = new AdminController($manager, $dump);
$publicController = new PublicController($manager);
$testMobile = new MobileDetect;

try {
    if (empty($_GET['page'])) {
        require "./views/accueil.php";
    } else {
        $url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL);
        switch ($url[0]) {
            case "accueil":
                $publicController->index();
                break;
            case "sophro":
                $publicController->sophro();
                break;
            case "blog":
                require "./views/blog.php";
                break;
            case "individual":
                require "./views/individual.php";
                break;
            case "contact":
                $publicController->contact();
                break;
            case "admin":
                if (!empty($url[1])) {
                    if ($url[1] === 'message') {
                        $adminController->displayMessage();
                        break;
                    } elseif ($url[1] === 'customer') {
                        if (empty($url[2])) {
                            $adminController->customers();
                            break;
                        } else if (!empty($url[2]) && $url[2] === 'show') {
                            if (!empty($url[3])) {
                                $adminController->customerShow($url[3]);
                                break;
                            } else {
                                throw new Exception("La page n'existe pas");
                            }
                        } else {
                            throw new Exception("La page n'existe pas");
                        }
                    } else {
                        throw new Exception("La page n'existe pas");
                    }
                } else {
                    $adminController->index();
                    break;
                }
                break;
            default:
                throw new Exception("La page n'existe pas");
        }
    }
} catch (Exception $e) {
    $msg =  $e->getMessage();
    // require 'views/error.view.php';
}
