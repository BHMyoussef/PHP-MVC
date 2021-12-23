<?php $title = "categories" ?>
<?php $content = ob_start() ?>
<div class="categories">
    <h2 class="title"><?= $platformName["name"] ?></h2>
    <div class="categorie">
        <a href="?action=showOutput&plateformId=<?= $platformId ?>&categoryId=1&day=Monday">Raw</a>
        <a href="?action=showOutput&plateformId=<?= $platformId ?>&categoryId=2&day=Monday">TURCKHEIM</a>
        <a href="?action=showOutput&plateformId=<?= $platformId ?>&categoryId=3&day=Monday">CZ</a>
        <a href="?action=showOutput&plateformId=<?= $platformId ?>&categoryId=4&day=Monday">TYCO</a>
        <a href="?action=showOutput&plateformId=<?= $platformId ?>&categoryId=5&day=Monday">COFICAB</a>
        <a href="?action=showOutput&plateformId=<?= $platformId ?>&categoryId=6&day=Monday">GPC</a>
        <a href="?action=showOutput&plateformId=<?= $platformId ?>&categoryId=7&day=Monday">VAN</a>
    </div>
</div>
<?php $content = ob_get_clean() ?>
<?php require("template.php"); ?>