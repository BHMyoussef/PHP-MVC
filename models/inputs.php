<?php
class Inputs
{
    private $db;
    function __construct()
    {
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=autoGestion', "root", "pass");
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

    function getData()
    {
        $statement = $this->db->prepare("select * from data");
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $results = $statement->fetch();
        print_r($results);
        return $results;
    }
}
