<?php $title = "categories" ?>
<?php $content = ob_start() ?>
<ul class="days">
    <li><a class=" <?= $_GET['day'] == "Monday" ? "active" : "" ?> " href="?action=showOutput&plateformId=<?= $platformId ?>&categoryId=<?= $categoryId ?>&day=Monday">Monday</a></li>
    <li><a class=" <?= $_GET['day'] == "Tuesday" ? "active" : "" ?> " href="?action=showOutput&plateformId=<?= $platformId ?>&categoryId=<?= $categoryId ?>&day=Tuesday">Tuesday</a></li>
    <li><a class=" <?= $_GET['day'] == "Wednesday" ? "active" : "" ?> " href="?action=showOutput&plateformId=<?= $platformId ?>&categoryId=<?= $categoryId ?>&day=Wednesday">Wednesday</a></li>
    <li><a class=" <?= $_GET['day'] == "Thursday" ? "active" : "" ?> " href="?action=showOutput&plateformId=<?= $platformId ?>&categoryId=<?= $categoryId ?>&day=Thursday">Thursday</a></li>
    <li><a class=" <?= $_GET['day'] == "Friday" ? "active" : "" ?> " href="?action=showOutput&plateformId=<?= $platformId ?>&categoryId=<?= $categoryId ?>&day=Friday">Friday</a></li>
    <li><a class=" <?= $_GET['day'] == "Saturday" ? "active" : "" ?> " href="?action=showOutput&plateformId=<?= $platformId ?>&categoryId=<?= $categoryId ?>&day=Saturday">Saturday</a></li>
    <li><a class=" <?= $_GET['day'] == "Sunday" ? "active" : "" ?> " href="?action=showOutput&plateformId=<?= $platformId ?>&categoryId=<?= $categoryId ?>&day=Sunday">Sunday</a></li>
</ul>
<?php $content = ob_get_clean() ?>
<?php require("template.php"); ?>