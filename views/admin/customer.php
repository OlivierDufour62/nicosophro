<?php
ob_start();
?>

<table class="table table-dark col-8">
    <thead>
        <tr>
            <th scope="col">Prénom</th>
            <th scope="col">Nom</th>
            <th scope="col">Email</th>
            <th scope="col">Téléphone</th>
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
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<?php
$content = ob_get_clean();
require_once 'default-admin.php';
?>