<?php
    // Tableau : bach bla man7tajo chi db wla mlawi
    $raw              = [3, 10, 20,     10,        0,       2,          4,       10];
    $cz                 = [3, 10, 27,      10,       0,        2,         4,       10];
    $turchkeim = [3, 15, 1800, 1800, 1800, 1800, 1800, 10];
    $tyco            = [4,  10, 20,     5,          30,     2,         4,          5];
    $gpc             = [3,   2,     0,      5,          1,      2,          2,          5];
    $coficab      = [3,  10, 10,      5,          5,      3,        20,         5];

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
    $nbrPalletsMix = $nbrPallets * 0.2;
    $nbrEmplacement = $nbrPallets * 1.2;
    $chaqueJour = $nbrTrucks; // --> 3la mafhmt
    // 
    $total_time = 0;
    
    //proposed number of storekeepers = total/(7,5 * 60)
    $nbr_storekeepers_required = 0;

    //   team occupacy rate = total/(7,5 * 60 * 6)
    $cercle1 = 0;

    //   occupacy rate of proposed number of storekeepers = total / (proposed number * 7,5 * 60)
    $cercle2 = 0;


    function calcule($arr){
        // kola variable hna hwa kaimtl line f daak tableau ==> bnafs trtiib

        $unloading = $nbrPosition * $arr[0];
        $cheking_document = $nbrTrucks * $arr[1];
        $separation = $nbrPalletsMix * $arr[2];
        $booking = $nbrElement * $arr[3];
        $labeling = $nbrPallets * $arr[4];
        $paletization = $nbrPallets * $arr[5];
        $putaway = $nbrEmplacement * $arr[6];
        $archiving = $chaqueJour * $arr[7];

        // calcule --- dial zmer
        $total_time = $unloading + $cheking_document + $separation + $booking + $labeling + $paletization + $putaway + $archiving;
        $nbr_storekeepers_required = $total_time/(7.5 * 60);
        $cercle1 = $total_time/(7.5 * 60 * 6);
        $cercle2 = $total_time/(7.5 * 60 * $nbr_storekeepers_required);
        
    }
switch ($categorieID) {
    case 'raw':
        calcule($raw);
        break;
    
    case "cz":
        calcule($cz);
        break;
    case "turchkeim":
        calcule($turchkeim);
        break;
    case "tyco":
        calcule($tyco);
        break;
    case "gpc":
        calcule($gpc);
        break;
    case "coficab":
        calcule($coficab);
        break;
        
}
    

?>