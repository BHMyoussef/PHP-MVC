<?php $title = "home" ?>
<?php ob_start() ?>
<ul class="pages">
    <li><a href="#">...Me</a></li>
    <li><a href="#" class="active">plateform</a></li>
    <li><a href="#">Dashboard</a></li>
</ul>
<div class="container">
    <div class="weekSchedule">
        <h2>Week schedule</h2>
        <div>
            <a href="?action=CreatePlatform&plateformId=1" class="btn">INBOUND</a>
            <a href="?action=CreatePlatform&plateformId=2" class="btn">OUTBOUND</a>
            <a href="?action=CreatePlatform&plateformId=3" class="btn">SUPPLY PRODUCTION</a>
            <a href="?action=CreatePlatform&plateformId=4" class="btn">BACKFLUSH</a>
        </div>
    </div>
    <div class="LoadingCalculation">
        <h2>Loading Calculation</h2>
        <div>
            <a href="?action=load&plateformId=1" class="btn">INBOUND</a>
            <a href="/Load_outbound" class="btn">OUTBOUND</a>
            <a href="/Load_SupplyProduction" class="btn">SUPPLY PRODUCTION</a>
            <a href="/Load_Backflush" class="btn">BACKFLUSH</a>
        </div>
    </div>
</div>
<?php $content = ob_get_clean() ?>
<?php require("template.php"); ?>