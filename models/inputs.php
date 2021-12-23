<?php
class Inputs
{
    private $day;
    private $db;
    function __construct()
    {
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=autoGestion', "root", "1234");
            $this->name = date("l");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    function insertData($platformId, $categoryId, $data)
    {
        $statement = $this->db->prepare("insert into data 
            values (:platformId,:categoryId,:day,:nbrTrucks,:nbrPosition,:nbrPallets)");
        $statement->execute(array(":platformId" => $platformId, ":categoryId" => $categoryId, ":day" => $data["day"], ":nbrTrucks" => $data["nbrTrucks"], ":nbrPosition" => $data["nbrPosition"], ":nbrPallets" => $data["nbrPallets"]));
        return $statement;
    }

    function getData($categoryId, $day = "Monday")
    {
        $statement = $this->db->prepare("select * from data where day like '" . strtolower($day) . "' and platformId = 1 and categoryId =" . $categoryId);
        $statement->execute();
        $results = $statement->fetch();
        return $results;
    }
    function getCategoryName($id)
    {
        $statement = $this->db->prepare("select name from category where id = " . $id);
        $statement->execute();
        $results = $statement->fetch();
        return $results;
    }
    function getPlatformeName($id)
    {
        $statement = $this->db->prepare("select name from platforme where id = " . $id);
        $statement->execute();
        $results = $statement->fetch();
        return $results;
    }
}
