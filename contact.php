<?php
$title = 'Nous contacter';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'config.php';
require_once 'functions.php';
$creneaux = creneaux_html(CRENEAUX);
require __DIR__ . DIRECTORY_SEPARATOR . 'elements' . DIRECTORY_SEPARATOR . 'header.php'; ?>

<div class="row">
    <div class="col-md-8">
        <h1>Nous contacter</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quibusdam reiciendis accusamus est odio, voluptates hic praesentium id quae sapiente amet delectus nesciunt consequuntur aut vero. Eligendi molestias deserunt numquam!
        Nisi illo sit soluta consequuntur numquam assumenda voluptate, quisquam, tenetur provident magni maiores labore non maxime iste voluptatem voluptas libero, dolorum ex perspiciatis esse. Accusantium consequuntur nemo corrupti quis earum!
        Dolorem veniam iure eius, accusamus quo saepe ratione dignissimos corrupti dolores voluptate vitae deserunt cum quod magnam sunt quasi laudantium assumenda quam ut voluptas sequi placeat inventore. Cupiditate, ipsam repellendus.</p>
    </div>

    <div class="col-md-4">
        <h2>Horaires d'ouvertures :</h2>
        <ul>
            
        </ul>
    </div>
</div>


<?php require __DIR__ . DIRECTORY_SEPARATOR . 'elements' . DIRECTORY_SEPARATOR . 'footer.php'; ?>