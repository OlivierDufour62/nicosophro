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
    <div id="part1">
        <div class="row space-mt100 space-mb100">
            <div class="col-12 d-flex justify-content-center">
                <h1>Bienvenue</h1>
            </div>
            <div class="d-flex justify-content-center space-t25">
                <div class="size col-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores nulla praesentium maiores nemo
                        dolorum commodi consequuntur laborum. Ipsa, suscipit magnam ex dolorum, sunt commodi, voluptatem
                        quibusdam at velit dolorem repudiandae! Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Aperiam natus facere sit veniam repudiandae, numquam tempora et nihil quos officiis excepturi
                        molestiae eius obcaecati laboriosam ducimus sapiente? Dolor, est asperiores.</p>
                </div>
            </div>
        </div>
    </div>
    <section id="part2" class="background-brown space-mb100 w-100 container-fluid d-flex justify-content-center">
        <div class="w-80 col-12 row d-flex justify-content-center inspace-p25">
            <div class="d-flex justify-content-end col-3 img-fluid">
                <img src="assets/img/nico.jpg" alt="Nicolas Mokhtari" class="img-fluid b-radius-tl-mr">
            </div>
            <div class="col-7 d-flex align-items-center">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/img/bureau.jpg" class="d-block w-100" alt="bureau1">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/bureau.jpg" class="d-block w-100" alt="bureau2">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/bureau.jpg" class="d-block w-100" alt="bureau3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section id="part3" class="w-100 d-flex justify-content-center space-mb100">
        <div class="col-12 row d-flex justify-content-center">
            <div class="col-3 size d-flex justify-content-end bg-green b-radius">
                <p class="col-12">Qu'est ce que la sophrologie ?</p>
            </div>
            <div class="col-6 w-25">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. <br> Rerum, quaerat minus, illum,
                    recusandae perspiciatis odio expedita <br> a consequuntur possimus aut numquam <br> doloribus nemo
                    ipsa sunt. Asperiores architecto vel voluptates!</p>
            </div>
        </div>
    </section>
    <section id="part4" class="w-100 background-brown d-flex justify-content-center">
        <div class="w-50 row d-flex justify-content-around space-t25 space-mb25">
            <div class="col-2 border bg-grey shadow-lg">
                <div class="inspace-p25">
                    <img src="assets/img/background-916223.jpg" class="img-fluid" alt="">
                </div>
                <div class="space-t25 text-center">
                    <h3>Article 1</h3>
                </div>
                <div class="space-t25">
                    <p>mon article de blog 1</p>
                </div>
            </div>
            <div class="col-2 border bg-grey shadow-lg">
                <div class="inspace-p25">
                    <img src="assets/img/background-916223.jpg" class="img-fluid" alt="">
                </div>
                <div class="space-t25 text-center">
                    <h3>Article 2</h3>
                </div>
                <div class="space-t25">
                    <p>mon article de blog 1</p>
                </div>
            </div>
            <div class="col-2 border bg-grey shadow-lg">
                <div class="inspace-p25">
                    <img src="assets/img/background-916223.jpg" class="img-fluid" alt="">
                </div>
                <div class="space-t25 text-center">
                    <h3>Article 3</h3>
                </div>
                <div class="space-t25">
                    <p>mon article de blog 1</p>
                </div>
            </div>
        </div>
    </section>
    <section id="part5" class="d-flex justify-content-center space-mt100 ">
        <div class=" row d-flex justify-content-center col-5 background-brown shadow border">
            <div class="text-center p-relative-title">
                <h2 class="rotate">Témoignages</h2>
            </div>
            <div class="p-relative">
                <div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur ipsam, tenetur accusantium
                        voluptatibus quo ullam fuga beatae est neque harum similique numquam quibusdam fugiat quam
                        minus? Nihil minima id aliquam!
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="part6" class="w-100 d-flex justify-content-center space-mt100 space-mb100 ">
        <div class="col-12 row w-50 d-flex justify-content-center ">
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