<?php $title = "outputs" ?>
<?php $content = ob_start() ?>
<ul class="days">
    <li><a href="#">Monday</a></li>
    <li><a href="#">Tuesday</a></li>
    <li><a href="#">Wednesday</a></li>
    <li><a href="#">thursday</a></li>
    <li><a href="#">Friday</a></li>
    <li><a href="#">Saturday</a></li>
    <li><a href="#">Sunday</a></li>
</ul>
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
<?php $content = ob_get_clean() ?>
<?php require("template.php"); ?>