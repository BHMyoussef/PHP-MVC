<?php $title = "inputs" ?>
<?php ob_start() ?>
<div class="days">
    <h2 class="title">Day:</h2>
    <form action="index.php?action=submitData&plateformId=<?= $platformId ?>&categoryId=<?= $categoryId ?>" method="POST">
        <div class="day">
            <input type="radio" name="day" id="Monday" value="Monday" />

            <label for="Monday">Monday</label>
        </div>
        <div class="day">
            <input type="radio" name="day" id="Tuesday" value="Tuesday" />
            <label for="Tuesday">Tuesday</label>
        </div>
        <div class="day">
            <input type="radio" name="day" id="Wednesday" value="Wednesday" />
            <label for="Wednesday">Wednesday</label>
        </div>
        <div class="day">
            <input type="radio" name="day" id="thursday" value="thursday" />
            <label for="thursday">thursday</label>
        </div>
        <div class="day">
            <input type="radio" name="day" id="Friday" value="Friday" />
            <label for="Friday">Friday</label>
        </div>
        <div class="day">
            <input type="radio" name="day" id="Saturday" value="Saturday" />
            <label for="Saturday">Saturday</label>
        </div>
        <div class="day">
            <input type="radio" name="day" id="Sunday" value="Sunday" />
            <label for="Sunday">Sunday</label>
        </div>
</div>
<div class="inputs">
    <div class="input">
        <label for="ntrucks">Nomber of trucks: </label>
        <input type="number" min="0" name="nbrTrucks" />
    </div>

    <div class="input">
        <label for="nposition">Nomber of position: </label>
        <input type="number" min="0" name="nbrPosition" />
    </div>

    <div class="input">
        <label for="npallets">Nomber of pallets: </label>
        <input type="number" min="0" name="nbrPallets" />
    </div>
    <button class="confirm" value="confirm" name="confirm">confirm</button>
    </form>
</div>
<?php $content = ob_get_clean() ?>
<?php require("template.php"); ?>