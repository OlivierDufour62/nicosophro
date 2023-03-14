<?php
ob_start();
?>
    <section id="individual-part-1">
        <div class="text-center mt-5">
            <h2>Sophrologie</h2>
        </div>
        <div class="col-12 row">
            <div class="mt-5 mb-5 col-6 d-flex justify-content-end">
                <img src="./public/assets/img/IMG-20221117-WA0008.jpg" alt="" class="img-fluid col-6">
            </div>
            <div class="col-4 p-5">
                <p class="bg-green p-2 border">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed voluptates alias ea consequuntur soluta doloribus commodi, nisi perferendis? Atque unde aperiam magni enim veniam soluta hic provident maxime autem a.
                    Dolor doloribus aperiam mollitia nisi. Beatae corrupti ducimus error, vel magnam dolore itaque fugiat aspernatur optio nihil odit natus possimus numquam doloribus. Itaque atque qui aperiam quae. Repellendus, odit distinctio. Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus commodi quasi maiores vero accusantium aliquam? Quaerat velit consequatur facere unde magni ipsam nulla pariatur dignissimos animi sequi, deserunt ipsum nihil! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae iusto, quam voluptate eligendi molestiae delectus deleniti nesciunt fugiat corrupti accusamus maiores quis assumenda soluta expedita velit quae tempore architecto incidunt.</p>
            </div>
        </div>
    </section>

    <section id="individual-part-2" class="background-brown">
        <div class="text-center pt-5">
            <h2>Sophro-relaxation</h2>
        </div>
        <div class="col-12 row mt-5">
            <div class="col-6 d-flex justify-content-end">
                <p class="col-6 p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed voluptates alias ea consequuntur soluta doloribus commodi, nisi perferendis? Atque unde aperiam magni enim veniam soluta hic provident maxime autem a.
                    Dolor doloribus aperiam mollitia nisi. Beatae corrupti ducimus error, vel magnam dolore itaque fugiat aspernatur optio nihil odit natus possimus numquam doloribus. Itaque atque qui aperiam quae. Repellendus, odit distinctio. Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus commodi quasi maiores vero accusantium aliquam? Quaerat velit consequatur facere unde magni ipsam nulla pariatur dignissimos animi sequi, deserunt ipsum nihil! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae iusto, quam voluptate eligendi molestiae delectus deleniti nesciunt fugiat corrupti accusamus maiores quis assumenda soluta expedita velit quae tempore architecto incidunt.</p>
            </div>
            <div class="col-6 mb-5">
                <img src="./public/assets/img/IMG-20221117-WA0008.jpg" alt="" class="img-fluid col-6">
            </div>
        </div>
    </section>
    <section id="individual-part-3">
        <div class="text-center mt-5">
            <h2>Méditation</h2>
        </div>
        <div class="col-12 row">
            <div class="mt-5 mb-5 col-6 d-flex justify-content-end">
                <img src="./public/assets/img/IMG-20221117-WA0003.jpg" alt="" class="img-fluid col-6">
            </div>
            <div class="col-4 p-5">
                <p class="bg-green p-2 border">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed voluptates alias ea consequuntur soluta doloribus commodi, nisi perferendis? Atque unde aperiam magni enim veniam soluta hic provident maxime autem a.
                    Dolor doloribus aperiam mollitia nisi. Beatae corrupti ducimus error, vel magnam dolore itaque fugiat aspernatur optio nihil odit natus possimus numquam doloribus. Itaque atque qui aperiam quae. Repellendus, odit distinctio. Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus commodi quasi maiores vero accusantium aliquam? Quaerat velit consequatur facere unde magni ipsam nulla pariatur dignissimos animi sequi, deserunt ipsum nihil! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae iusto, quam voluptate eligendi molestiae delectus deleniti nesciunt fugiat corrupti accusamus maiores quis assumenda soluta expedita velit quae tempore architecto incidunt.</p>
            </div>
        </div>
    </section>
    <?php
$content = ob_get_clean();
require 'default.php';
?>