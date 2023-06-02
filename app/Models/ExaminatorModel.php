<?php

class ExamenPerExaminatorModel
{
    private $db;

    function __construct()
    {
        $this->db = new Database();
    }
    function getExamenPerExaminator($id)
    {
        $sql = "
                SELECT Examen.Id, Examen.StudentId, Examen.Rijschool, Examen.Stad, Examen.Rijbewijscategorie, Examen.Datum, Examen.Uitslag,
                Examinator.Voornaam, Examinator.Tussenvoegsel, Examinator.Achternaam, Examinator.Mobiel
                FROM Examen
                INNER JOIN Examinator ON Examen.Id = Examinator.Id;
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
