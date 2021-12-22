<?php $title = "categories" ?>
<?php $content = ob_start() ?>
<div class="categories">
    <h2 class="title"><?= $platformId ?></h2>
    <a href="?action=showOutput&plateformId=<?= $platformId ?>&categoryId=1">Raw</a>
    <a href="?action=showOutput&plateformId=<?= $platformId ?>&categoryId=2">TURCKHEIM</a>
    <a href="?action=showOutput&plateformId=<?= $platformId ?>&categoryId=3">CZ</a>
    <a href="?action=showOutput&plateformId=<?= $platformId ?>&categoryId=4">TYCO</a>
    <a href="?action=showOutput&plateformId=<?= $platformId ?>&categoryId=5">COFICAB</a>
    <a href="?action=showOutput&plateformId=<?= $platformId ?>&categoryId=6">GPC</a>
    <a href="?action=showOutput&plateformId=<?= $platformId ?>&categoryId=7">VAN</a>
</div>
<?php $content = ob_get_clean() ?>
<?php require("template.php"); ?>