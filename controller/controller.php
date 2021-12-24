<?php
require "models/inputs.php";

function showHome()
{
    require "Views/home.php";
}

function showCategory()
{
    $db = new Inputs();
    $platformId = $_GET["plateformId"];
    $platformName = $db->getPlatformeName($_GET["plateformId"]);
    require "Views/categories.php";
}
function showLoadCategory()
{
    $db = new Inputs();
    $platformName = $db->getPlatformeName($_GET["plateformId"]);
    $platformId = $_GET["plateformId"];
    require "Views/categoriesLoad.php";
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
function showOutput($categoryId, $day)
{
    $platformId = $_GET["plateformId"];
    $categoryId = $_GET["categoryId"];
    $db = new Inputs();
    $data = $db->getData($categoryId, $day);
    if ($data) {
        $results = calc($data, $categoryId);
        require "Views/Outputs.php";
    } else {
        require "Views/dataNotFound.php";
    }
}

function calc($data, $categorieID)
{
    $db = new Inputs();

    $categoryName = $db->getCategoryName($categorieID);
    // Tableau : bach bla man7tajo chi db wla mlawi
    $raw       = [3,    10, 20,     10,  0,    2,     4,    10];
    $cz        = [3,    10, 27,     10,  0,    2,     4,    10];
    $turchkeim = [3,    15, 1800,   1800, 1800, 1800,  1800, 10];
    $tyco      = [4,    10, 20,     5,   30,   2,     4,    5];
    $gpc       = [3,    2,  0,      5,   1,    2,     2,    5];
    $coficab   = [3,    10, 10,     5,   5,    3,     20,   5];
    switch (strtolower($categoryName["name"])) {
        case 'raw':
            return calcule($data, $raw);
            break;

        case "cz":
            return calcule($data, $cz);
            break;
        case "turckheim":
            return calcule($data, $turchkeim);
            break;
        case "tyco":
            return calcule($data, $tyco);
            break;
        case "gpc":
            return calcule($data, $gpc);
            break;
        case "coficab":
            return calcule($data, $coficab);
            break;
    }
}
function calcule($data, $arr)
{
    // valeurs a calculer
    $unloading = 0;
    $cheking_document = 0;
    $separation = 0;
    $booking = 0;
    $labeling = 0;
    $paletization = 0;
    $putaway = 0;
    $archiving = 0;
    // valeurs calculer d'apres les inputs
    $nbrPalletsMix = $data["nbrPallets"] * 0.2;
    $nbrEmplacement = $data["nbrPallets"] * 1.2;
    $chaqueJour = $data["nbrTrucks"]; // --> 3la mafhmt
    // 
    $total_time = 0;

    //proposed number of storekeepers = total/(7,5 * 60)
    $nbr_storekeepers_required = 0;

    //   team occupacy rate = total/(7,5 * 60 * 6)
    $cercle1 = 0;

    //   occupacy rate of proposed number of storekeepers = total / (proposed number * 7,5 * 60)
    $cercle2 = 0;



    // kola variable hna hwa kaimtl line f daak tableau ==> bnafs trtiib

    $nbrElement = 0;
    $unloading = $data["nbrPosition"] * $arr[0];
    $cheking_document = $data["nbrTrucks"] * $arr[1];
    $separation = $nbrPalletsMix * $arr[2];
    $booking = $nbrElement * $arr[3];
    $labeling = $data["nbrPallets"] * $arr[4];
    $paletization = $data["nbrPallets"] * $arr[5];
    $putaway = $nbrEmplacement * $arr[6];
    $archiving = $chaqueJour * $arr[7];

    // calcule --- dial zmer
    $total_time = $unloading + $cheking_document + $separation + $booking + $labeling + $paletization + $putaway + $archiving;
    $nbr_storekeepers_required = $total_time / (7.5 * 60);
    $cercle1 = $total_time / (7.5 * 60 * 6);
    $cercle2 = $total_time / (7.5 * 60 * $nbr_storekeepers_required);

    $arrData = array($unloading, $cheking_document, $separation, $booking, $labeling, $paletization, $putaway, $archiving, $total_time, $nbr_storekeepers_required, $cercle1, $cercle2);
    return $arrData;
}
