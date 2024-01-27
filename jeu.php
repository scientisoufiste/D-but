<?php
require_once 'functions.php';
// Checkbox
$parfums = [
    'Fraise' => 250,
    'Chocolat' => 300,
    'Vanille' => 200
];

// Radio
$cornets = [
    'Pot' => 100,
    'Cornet' => 150
];

// Checkbox
$supplements = [
    'Pépites de chocolat' => 50,
    'Chantilly' => 25
];
$title='Composer votre glace';
$ingredients = [];
$total = 0;

foreach (['parfum', 'supplement', 'cornet'] as $name) {
    if (isset($_GET[$name])) {
        $addS = $name . 's';
        $choix = $_GET[$name];
        if (is_array($choix)) {
            foreach ($choix as $value) {
                if (isset($$addS[$value])) {
                    $ingredients[] = $value;
                    $total += $$addS[$value];
                }
            }    
        } else {
            if (isset($$addS[$choix])) {
                $ingredients[] = $choix;
                $total += $$addS[$choix];
            }        
        }
    }
}

require __DIR__ . DIRECTORY_SEPARATOR . 'elements' . DIRECTORY_SEPARATOR . 'header.php';

?>

<h1>Composer votre glace</h1>

<div class="row">
    <div class="col-md-4 text-dark">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Votre glace</h5>
                <ul>
                    <?php foreach ($ingredients as $ingredient): ?>
                        <li><?= $ingredient ?></li>
                    <?php endforeach ?>
                </ul>
                <strong>Prix total : <?= $total ?> (F CFA)</strong>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <form action="/jeu.php" method="GET">
            <div class="form-group">
                <h2>Choisissez vos parfums</h2>
                <?php foreach ($parfums as $parfum => $prix): ?>
                    <div class="checkbox">
                        <label>
                            <?= checkbox('parfum', $parfum, $_GET) ?>
                            <?= $parfum . ' - ' . $prix ?> F CFA
                        </label>
                    </div>
                <?php endforeach ?>

                <h2>Choisissez votre cornet</h2>
                <?php foreach ($cornets as $cornet => $prix): ?>
                    <div class="radio">
                        <label>
                            <?= radio('cornet', $cornet, $_GET) ?>
                            <?= $cornet ?> - <?= $prix ?> F CFA
                        </label>
                    </div>
                <?php endforeach ?>

                <h2>Choisissez vos suppléments</h2>
                <?php foreach ($supplements as $supplement => $prix): ?>
                    <div class="checkbox">
                        <label>
                            <?= checkbox('supplement', $supplement, $_GET) ?>
                            <?= $supplement . ' - ' . $prix ?> F CFA
                        </label>
                    </div>
                <?php endforeach ?>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Composer ma glace</button>
        </form>

    </div>
</div>
<h1>$_GET</h1>
<pre>
    <?php dump($_GET) ?>
</pre>

<h1>$_POST</h1>
<pre>
    <?php dump($_POST) ?>
</pre>


<?php require __DIR__ . DIRECTORY_SEPARATOR . 'elements' . DIRECTORY_SEPARATOR . 'footer.php' ?>