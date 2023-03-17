<?php
ob_start();
?>
<table id="list-customer" class="table table-striped col-10">
    <thead>
        <tr>
            <th scope="col">Prénom</th>
            <th scope="col">Nom</th>
            <th scope="col">Email</th>
            <th scope="col">Téléphone</th>
            <th scope="col">Adresse</th>
            <th scope="col">Ville</th>
            <th scope="col" colspan="2" class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody>

        <?php
        foreach ($users as $user) {
        ?>

            <tr>
                <th scope="row"><?= $user->firstname ?></th>
                <td><?= $user->lastname ?></td>
                <td><?= $user->email ?></td>
                <td><?= $user->phone ?></td>
                <td><?= $user->address ?></td>
                <td><?= $user->city ?></td>
                <td align="center"><a class="btn background-brown" href="<?= URL ?>admin/customer/show/<?= $user->id ?>">Voir</a>
                <td align="center"><a class="btn background-brown" href="<?= URL ?>admin/customer/edit/<?= $user->id ?>">Modifier</a>
                <td>
            </tr>

        <?php
        }
        ?>

    </tbody>
</table>

<div>
    <button id="add-customer" class="btn background-brown">Ajouter un(e) client(e)</button>
</div>

<?php

$titre = 'Liste des clients';
$content = ob_get_clean();
require_once 'default-admin.php';
?>