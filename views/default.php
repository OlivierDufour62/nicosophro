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
    <?php
    if ($testMobile->isMobile()) {
    ?>
        <link rel="stylesheet" href="./public/assets/css/mainmobile.css">
    <?php
    } else {
    ?>
        <link rel="stylesheet" href="./public/assets/css/main.css">
    <?php
    }
    ?>
    <title>Bienvenue</title>
</head>

<body class="container-fluid">

    <header class="row bg-green justify-content-center">
        <div class="w-80 d-flex align-items-center">
            <div class="col-3">
                <img class="w-50" src="./public/assets/img/logo.png" alt="">
            </div>
            <div class="col-9 d-flex justify-content-end">
                <nav class="navbar navbar-expand-lg size">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item space-mr10">
                                    <a class="nav-link active" aria-current="page" href="<?= URL ?>accueil">ACCUEIL</a>
                                </li>
                                <li class="nav-item space-mr10">
                                    <a class="nav-link" aria-current="page" href="<?= URL ?>sophro">LA SOPHROLOGIE</a>
                                </li>
                                <li class="nav-item dropdown space-mr10">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        PARTICULIERS
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="individual">Individuel</a></li>
                                        <li><a class="dropdown-item" href="#">Groupe</a></li>
                                        <!--<li class="nav-item dropdown">
                                        <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Atelier</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Sophro-relaxion</a></li>
                                            <li><a class="dropdown-item" href="#">Méditation</a></li>
                                            <li>
                                                <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Atelier</a>
                                            </li>
                                        </ul>
                                    </li>-->
                                    </ul>
                                </li>
                                <li class="nav-item dropdown space-mr10">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        PROFESSIONNELS
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <!--<li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>-->
                                    </ul>
                                </li>
                                <li class="nav-item space-mr10">
                                    <a class="nav-link" href="blog">BLOG</a>
                                </li>
                                <li class="nav-item space-mr10">
                                    <a class="nav-link">MON PARCOURS</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="contact">CONTACT</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <?= $content ?>

    <footer class="container-fluid bg-green p-0 m-0">
        <div class="row d-flex justify-content-center bg-green">
            <div class="col-2 space-mb50 space-mt50">
                <h3>Nous trouver</h3>
                <p>7 rue des fusillés</p>
                <p>62420 Billy-Montigny</p>
                <p>0637115584</p>
            </div>
            <div class="col-2 space-mb50 space-mt50">
                <h3>Information</h3>
                <p>coucou c'est nous</p>
                <p>on va vous aider</p>
                <p>quelque soit votre age</p>
            </div>
            <div class="col-2 row space-mb50 space-mt50">
                <h3>Réseaux sociaux</h3>
                <p>Facebook</p>
                <p>Instagram</p>
                <p>Chambre</p>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.slim.js"></script>
    <script src="./public/assets/js/main.js"></script>
</body>

</html>