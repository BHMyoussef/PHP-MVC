<?php $title = "outputs" ?>
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
<div class="outPuts">
    <table>
        <thead>
            <th>Step</th>
            <th>Required Time (min)</th>
        </thead>
        <tbody>
            <tr>
                <td>Unploading</td>
                <td><?= $results[0] ?></td>
            </tr>
            <tr>
                <td>Checking Document</td>
                <td><?= $results[1] ?></td>
            </tr>
            <tr>
                <td>Separation</td>
                <td><?= $results[2] ?></td>
            </tr>
            <tr>
                <td>Booking</td>
                <td><?= $results[3] ?></td>
            </tr>
            <tr>
                <td>Labeling</td>
                <td><?= $results[4] ?></td>
            </tr>
            <tr>
                <td>Paletization</td>
                <td><?= $results[5] ?></td>
            </tr>
            <tr>
                <td>PutAway</td>
                <td><?= $results[6] ?></td>
            </tr>
            <tr>
                <td>Archiving</td>
                <td><?= $results[7] ?></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td>Total Time</td>
                <td><?= $results[8] ?></td>
            </tr>
            <tr>
                <td>Number of strokeepers Required</td>
                <td><?= $results[9] | 0 ?></td>
            </tr>
        </tfoot>
    </table>
    <div class="charts">
        <canvas id="chart1" val=<?= $results[10] ?>></canvas>
        <canvas id="chart2" val=<?= $results[11] ?>></canvas>

    </div>

</div>

<script type="text/javascript" src="Views/js/chart.js"></script>
<script type="text/javascript" src="Views/js/script.js"></script>

<?php $content = ob_get_clean() ?>
<?php require("template.php"); ?>