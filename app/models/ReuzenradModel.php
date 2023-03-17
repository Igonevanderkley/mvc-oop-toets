<?php

class ReuzenradModel 
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getReuzenrad() 
    {
        $sql = "SELECT Id
                        ,Naam
                        ,Hoogte
                        ,Land
                        ,Kosten
                        ,AantalPassagiers
                        FROM Reuzenrad ORDER BY Id desc";

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}