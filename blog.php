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
    <section id="article">
        <div class="text-center space-mt50">
            <h1>Blog</h1>
        </div>
        <div class="col-12 d-flex justify-content-center space-mt50 space-mb50">
            <div class="col-8 border d-flex">
                <div class="inspace-p25 col-2">
                    <img src="assets/img/background-916223.jpg" class="img-fluid" alt="">
                </div>
                <div class="row">
                    <div class="space-t25">
                        <a class="unstyle" href="">
                            <h3>Article 2</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil quisquam quibusdam numquam reiciendis debitis dolore cupiditate adipisci excepturi optio consequuntur, unde blanditiis repellendus. Praesentium vel enim voluptate maxime? Esse, consequuntur!</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 d-flex justify-content-center space-mt50 space-mb50">
            <div class="col-8 border d-flex">
                <div class="inspace-p25 col-2">
                    <img src="assets/img/background-916223.jpg" class="img-fluid" alt="">
                </div>
                <div class="row">
                    <div class="space-t25">
                        <a class="unstyle" href="">
                            <h3>Article 2</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil quisquam quibusdam numquam reiciendis debitis dolore cupiditate adipisci excepturi optio consequuntur, unde blanditiis repellendus. Praesentium vel enim voluptate maxime? Esse, consequuntur!</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    require_once 'partials/footer.php';
    ?>