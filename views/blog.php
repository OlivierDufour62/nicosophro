<?php
ob_start();
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
$content = ob_get_clean();
require 'default.php';
?>