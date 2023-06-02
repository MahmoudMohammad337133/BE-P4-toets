<?php

class AfgenomeExamModel
{
    private $db;

    function __construct()
    {
        $this->db = new Database();
    }
    function getAfgenomenExams()
    {
        $sql = "SELECT
        CONCAT(Examinator.Voornaam, ' ', IFNULL(Examinator.TussenVoegsel, ''), ' ', Examinator.Achternaam) AS Naam,
        Examen.Datum,
        Examen.Rijbewijscategorie,
        Examen.Rijschool,
        Examen.Stad,
        Examen.Uitslag
      FROM
        ExamenPerExaminator
      JOIN Examinator ON ExamenPerExaminator.ExaminatorId = Examinator.Id
      JOIN Examen ON ExamenPerExaminator.ExamenId = Examen.Id
      ORDER BY
  (SELECT COUNT(*) FROM Examen WHERE Uitslag = 'Geslaagd' AND Examen.Id = ExamenPerExaminator.ExamenId) DESC;
      ";

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}
