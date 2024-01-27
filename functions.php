<?php
function nav_item (string $lien, string $titre, string $linkClass): string
{
    $classe = 'nav-item';
    if ($_SERVER['SCRIPT_NAME'] === $lien) {
    $classe .= ' active';
    }
    return <<<HTML
    <li>
        <a class="$linkClass $classe" href="$lien">$titre</a>
    </li>
HTML;
}

function nav_menu (string $linkClass = ''): string
{
  return
    nav_item('/index.php', 'Accueil', $linkClass) . 
    nav_item('/blog.php', 'Blog', $linkClass) . 
    nav_item('/contact.php', 'Contact', $linkClass).
    nav_item('/jeu.php', 'Deviner', $linkClass).
    nav_item('/menu.php', 'Menu', $linkClass);

}

function checkbox (string $name, string $value, array $data): string {
    $attributes = '';
    if (isset($data[$name]) && in_array($value, $data[$name])) {
        $attributes .= 'checked';
    }
    return <<<HTML
    <input type="checkbox" name="{$name}[]" value="$value" $attributes>
HTML;
}

function radio (string $name, string $value, array $data) {
    $attributes = '';
    if (isset($data[$name]) && $value === $data[$name]) {
        $attributes .= 'checked';
    }
    return <<<HTML
    <input type="radio" name="{$name}" value="$value" $attributes>
HTML;
}

function dump ($variable) {
    echo '<pre class="text-light">';
    var_dump ($variable);
    echo '</pre>';
}

function creneaux_html (array $creneaux) {
    $phrases = [];
    foreach ($creneaux as $creneau) {
        $phrases[] = "de {$creneau[0]}h à {$creneau[1]}h";
    }
    return 'Ouvert ' . implode(' et ', $phrases);
}

