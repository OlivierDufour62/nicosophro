<!DOCTYPE html>
<html style="height:100%" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/assets/css/main.css">
    <link rel="stylesheet" href="../public/assets/css/admin.css">
    <title>Document</title>
</head>

<body style="height:100%" class="container-fluid">
    <header class="bg-green col-12 row">
        <div class="col-6">
            <img class="col-2" src="../public/assets/img/logo.png" alt="">
        </div>
        <div class="col-6 h-50">
            <h1>coucou c'est nous</h1>
        </div>
    </header>
    <div class="col-12 row menu-admin">
        <div id="menu" class="col-2 bg-green menu-admin">
            <nav class="">
                <ul class="list-unstyled p-0 m-0 ml-5">
                    <a class="mb-3" href="<?= URL ?>admin/customer">
                        <li class="mb-3">
                            Client
                        </li>
                    </a>
                    <a href="">
                        <li class="mb-3">
                            A voir
                        </li>
                    </a>
                    <a href="">
                        <li class="mb-3">
                            A voir
                        </li>
                    </a>
                    <a href="">
                        <li class="mb-3">
                            A voir
                        </li>
                    </a>
                    <a href="">
                        <li class="mb-3">
                            A voir
                        </li>
                    </a>
                    <a href="<?= URL ?>admin/message">
                        <li class="mb-3">
                            Message
                        </li>
                    </a>
                    <a href="">
                        <li>
                            </i>Déconnexion
                        </li>
                    </a>
                </ul>
            </nav>
        </div>
        <div class="col-6">
            <?= $content ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>