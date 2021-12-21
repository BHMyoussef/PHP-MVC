<?php
require "models/inputs.php";

function showHome()
{
    require "Views/home.php";
}

function showCategory()
{
    $platformId = $_GET["plateformId"];
    require "Views/categories.php";
}

function showInput()
{
    $platformId = $_GET["plateformId"];
    $categoryId = $_GET["categoryId"];
    require "Views/inputs.php";
}
function submitData($platformId, $categoryId, $data)
{
    $db = new Inputs();
    $result = $db->insertData($platformId, $categoryId, $data);
    if ($result)
        header("Location: /Project");
}
