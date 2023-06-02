<?php

class ExamenModel
{
    private $db;

    function __construct()
    {
        $this->db = new Database();
    }
    function getExamen()
    {
        $sql = 'SELECT 
        (SELECT COUNT(*) FROM Examen AS row_count,
        Id, 
        StundentId, 
        Rijschool, 
        Stad, 
        Rijbewijscategorie, 
        Datum, 
        Uitslag 
    FROM 
        Examen
    ORDER BY 
        Stad DESC;
    ';

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}
