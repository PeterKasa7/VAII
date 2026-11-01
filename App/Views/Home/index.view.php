<?php

/** @var \Framework\Support\LinkGenerator $link */

// Úvodná stránka. Zobrazuje ju HomeController::index().
//
?>

<section class="hladanie">
    <h1>Vitajte v knižnici</h1>
    <p>Prehliadajte katalóg kníh, rezervujte si dostupné knihy a sledujte svoje výpožičky.</p>
    <a class="detail" href="<?= $link->url('catalog.index') ?>">Prejsť do katalógu</a>
</section>
