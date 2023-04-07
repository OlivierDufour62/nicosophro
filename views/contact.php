<?php
ob_start();
print $form;


?>

<div class="text-center">
    <h1>Contactez-nous</h1>
</div>
<section id="part6" class="w-100 d-flex justify-content-center space-mt100 space-mb100">
    <div class="col-12 row w-50 d-flex justify-content-center">
        <form method="POST" class="col-7 w-50 p-0 m-0 d-flex justify-content-center shadow-sm flex-column background-brown">
            <div class="col-12 row p-0 m-0 d-flex-justify-content">
                <div class="mb-3 col-6 name">
                    <label for="lastname" class="form-label">Nom</label>
                </div>
                <div class="mb-3 col-6 firstname">
                    <label for="firstname" class="form-label">Prenom</label>              
                </div>
            </div>
            <div class="col-12 p-0 m-0 row w-100">
                <div class="mb-3 col-6 phone">
                    <label for="phone" class="form-label">Téléphone</label>
                </div>
                <div class="mb-3 col-6 email">
                    <label for="email" class="form-label">Email</label>
                </div>
            </div>
            <div class="col-12 row d-flex justify-content-center w-100">
                <div class="input-group col-10 space-ml2 row content">
                    <label class="form-label p-0" for="content">Questions ou demande d'informations</label>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center space-t25">
                <button type="submit" class="btn bg-green shadow-sm">Envoyer</button>
            </div>
        </form>
        <div class="col-6 space-t25 shadow-sm m-0 p-0">
            <img src="./public/assets/img/agenda.png" class="col-12 img-fluid " alt="Prise de rendez-vous">
        </div>
    </div>
</section>
<script>
   
</script>

<?php
$content = ob_get_clean();
require 'default.php';
?>