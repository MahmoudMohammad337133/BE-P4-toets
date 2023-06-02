<?php

class instructeurGebruiktAutoModel
{
    private $db;

    function __construct()
    {
        $this->db = new Database();
    }
    function getInstructeursCars($id)
    {
        $sql = "
            SELECT CONCAT(ins.Voornaam,' ', COALESCE(ins.Tussenvoegsel,''),' ', ins.Achternaam) as full_name, 
            ins.DatumInDienst, 
            ins.AantalSterren, 
            typeVoer.TypeVoertuig, 
            voer.Type, 
            voer.Kenteken, 
            voer.Bouwjaar, 
            voer.Brandstof,
            typeVoer.Rijbewijscategorie
            FROM instructeur ins
            left JOIN voertuiginstructeur voerin ON ins.Id = voerin.InstructeurId
            left JOIN voertuig voer ON voerin.VoertuigId = voer.Id
            left JOIN typevoertuig typeVoer ON voer.TypeVoertuigId = typeVoer.Id
            WHERE ins.id = :id;
        ";

        $this->db->query($sql);
        $this->db->bind(':id', $id); // Bind the ID to the query parameter
    
        return $this->db->resultSet();
    }

    // function addCarInstructeur($selectedVoertuigId,$selectedInstructeurId) {
    //     $sql = "
    //     INSERT INTO VoertuigInstructeur (VoertuigId, InstructeurId, DatumToekenning, IsActief, Opmerkingen, DatumAangemaakt, DatumGewijzigd)
    //     VALUES (:selectedVoertuigId, :selectedInstructeurId, CURRENT_DATE, 1, NULL, SYSDATE(6), SYSDATE(6));

    //     ";
    //     $this->db->query($sql);
    //     $this->db->bind(':selectedVoertuigId', $selectedVoertuigId); // Bind the selectedVoertuigId to the query parameter
    //     $this->db->bind(':selectedInstructeurId', $selectedInstructeurId); // Bind the selectedInstructeurId to the query parameter
    
    //     return $this->db->resultSet();
    // }
}
