<?php $title = "categories" ?>
<?php $content = ob_start() ?>
<div class="categories">
    <h2 class="title"><?= $platformName["name"] ?></h2>
    <div class="categorie">
        <a href="?action=input&plateformId=<?= $platformId ?>&categoryId=1">Raw</a>
        <a href="?action=input&plateformId=<?= $platformId ?>&categoryId=2">TURCKHEIM</a>
        <a href="?action=input&plateformId=<?= $platformId ?>&categoryId=3">CZ</a>
        <a href="?action=input&plateformId=<?= $platformId ?>&categoryId=4">TYCO</a>
        <a href="?action=input&plateformId=<?= $platformId ?>&categoryId=5">COFICAB</a>
        <a href="?action=input&plateformId=<?= $platformId ?>&categoryId=6">GPC</a>
        <a href="?action=input&plateformId=<?= $platformId ?>&categoryId=7">VAN</a>
    </div>
</div>
<?php $content = ob_get_clean() ?>
<?php require("template.php"); ?>