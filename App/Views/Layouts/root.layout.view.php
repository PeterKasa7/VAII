<?php

/** @var string $contentHTML */
/** @var \Framework\Auth\AppUser $user */
/** @var \Framework\Support\LinkGenerator $link */

// Spoločné rozloženie aplikácie (hlavička, menu, pätička). Obsah stránky sa vloží do $contentHTML.
// Aktuálny kontrolér (bez parametra ?c= je to Home), podľa neho sa zvýrazní položka v menu.
$current = strtolower($_GET['c'] ?? 'home');
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= App\Configuration::APP_NAME ?></title>
    <link rel="icon" type="image/png" href="<?= $link->asset('images/LogoBP.png') ?>">
    <link rel="stylesheet" href="<?= $link->asset('css/style.css') ?>">
</head>
<body>


<header class="hlavicka">
    <a class="logo" href="<?= $link->url('home.index') ?>">
        <img src="<?= $link->asset('images/LogoBP.png') ?>" alt="Logo knižnice">
        <span>Knižnica</span>
    </a>

    <nav class="menu">
        <a <?= $current == 'catalog' ? 'class="aktivna"' : '' ?> href="<?= $link->url('catalog.index') ?>">Katalóg</a>
        <a href="#">Moje výpožičky</a>
        <a href="#">Správa kníh</a>
    </nav>

    <div class="prihlasenie">
        <a href="#">Prihlásenie</a>
        <a class="tlacidlo" href="#">Registrácia</a>
    </div>
</header>


<main>
    <?= $contentHTML ?>
</main>

<footer class="paticka">
    <p>Knižnica – semestrálna práca VAII</p>
</footer>

</body>
</html>
