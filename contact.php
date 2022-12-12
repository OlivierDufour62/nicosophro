<?php
require_once 'core/db.php';
require_once 'core/saveform.php';

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Bienvenue</title>
</head>

<body class="container-fluid">
<?php
require_once 'partials/header.php';
?>
<div class="text-center">
    <h1>Contactez-nous</h1>
</div>
<section id="part6" class="w-100 d-flex justify-content-center space-mt100 space-mb100">
    <div class="col-12 row w-50 d-flex justify-content-center">
        <form method="POST" class="col-7 w-50 p-0 m-0 d-flex justify-content-center shadow-sm flex-column background-brown">
            <div class="col-12 row p-0 m-0 d-flex-justify-content">
                <div class="mb-3 col-6">
                    <label for="name" class="form-label">Nom</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="mb-3 col-6">
                    <label for="firstname" class="form-label">Prenom</label>
                    <input type="text" class="form-control" name="firstname" id="firstname">
                </div>
            </div>
            <div class="col-12 p-0 m-0 row w-100">
                <div class="mb-3 col-6">
                    <label for="phone" class="form-label">Téléphone</label>
                    <input type="text" class="form-control" id="phone" name="phone">
                </div>
                <div class="mb-3 col-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="mail" class="form-control" id="mail" name="email">
                </div>
            </div>
            <div class="col-12 row d-flex justify-content-center w-100">
                <div class="input-group col-10 space-ml2 row">
                    <label class="form-label p-0" for="content">Questions ou demande d'informations</label>
                    <textarea class="form-control resize col-10" name="content" aria-label="With textarea"></textarea>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center space-t25">
                <button type="submit" class="btn bg-green shadow-sm">Envoyer</button>
            </div>
        </form>
        <div class="col-5 space-t25 shadow-sm m-0 p-0">
            <img src="assets/img/agenda.png" class="col-12 img-fluid " alt="Prise de rendez-vous">
        </div>
    </div>
</section>
<?php
require_once 'partials/footer.php';
?>