<?php
require "controller/controller.php";
try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == "home")
            showHome();

        elseif ($_GET['action'] == "CreatePlatform") {
            if (isset($_GET["plateformId"])) {
                if ($_GET["plateformId"] < 0 || $_GET["plateformId"] > 4)
                    throw new Exception("platform out of range");
                showCategory();
            }
        } elseif ($_GET["action"] == "input") {
            if (isset($_GET["plateformId"]) && isset($_GET["categoryId"])) {
                if ($_GET["plateformId"] < 0 || $_GET["plateformId"] > 4)
                    throw new Exception("platform out of range");
                if ($_GET["categoryId"] < 0 || $_GET["categoryId"] > 7)
                    throw new Exception("Category out of range");
                showInput();
            }
        } elseif ($_GET["action"] == "submitData")
            if (isset($_GET["plateformId"]) && isset($_GET["categoryId"])) {
                if ($_GET["plateformId"] < 0 || $_GET["plateformId"] > 4)
                    throw new Exception("platform out of range");
                if ($_GET["categoryId"] < 0 || $_GET["categoryId"] > 7)
                    throw new Exception("Category out of range");
                submitData($_GET["plateformId"], $_GET["categoryId"], $_POST);
            }
    } else
        showHome();
} catch (Exception $e) {
    $errorMessage = $e->getMessage();
    echo $errorMessage;
}
