-- Step: 01
-- Goal: Create a new database rijschool-mvc
-- **********************************************************************************
-- Version       Date:           Author:                     Description:
-- *******       **********      ****************            ******************
-- 01            06-02-2023      Mahmoud               New
-- **********************************************************************************/

-- Check if the database exists
DROP DATABASE IF EXISTS `rijschool-examen`;

-- Create a new Database
CREATE DATABASE IF NOT EXISTS `rijschool-examen`;

-- Use database rijschool-examen
Use `rijschool-examen`;

-- Step: 02
-- Goal: Create a new table Examen
-- **********************************************************************************
-- Version       Date:           Author:                     Description:
-- *******       **********      ****************            ******************
-- 01            06-02-2023      Mahmoud               New
-- **********************************************************************************/

-- Drop table Examen
DROP TABLE IF EXISTS Examen;

CREATE TABLE IF NOT EXISTS Examen
(
    Id                          TINYINT         UNSIGNED        NOT NULL    AUTO_INCREMENT
   ,StudentId                   int(50)                         NOT NULL
   ,Rijschool                   VARCHAR(50)                     NOT NULL
   ,Stad                        VARCHAR(50)                     NOT NULL
   ,Rijbewijscategorie          VARCHAR(10)                     NOT NULL
   ,Datum           DATE                            NOT NULL
   ,Uitslag         VARCHAR(20)                      NOT NULL
   ,IsActief        BIT                             NOT NULL    DEFAULT 1
   ,Opmerkingen     VARCHAR(250)                        NULL    DEFAULT NULL
   ,DatumAangemaakt DateTime(6)                     NOT NULL
   ,DatumGewijzigd  DateTime(6)                     NOT NULL

   ,CONSTRAINT      PK_Examen_Id   PRIMARY KEY CLUSTERED(Id)
) ENGINE=InnoDB;


-- Step: 03
-- Goal: Fill table Examen with data
-- **********************************************************************************
-- Version       Date:           Author:                     Description:
-- *******       **********      ****************            ******************
-- 01            06-02-2023      Mahmoud               New
-- **********************************************************************************/

INSERT INTO Examen
(
    StudentId
    ,Rijschool
    ,Stad
    ,Rijbewijscategorie
    ,Datum
    ,Uitslag
    ,IsActief
    ,Opmerkingen
    ,DatumAangemaakt
    ,DatumGewijzigd
)
VALUES
     (100234, 'VolGasVooruit', 'Rotterdam', 'B', '2023-04-03', 'Geslaagd', 1, NULL, SYSDATE(6), SYSDATE(6))
    ,(123432, 'InZijnVierDoorDeBocht', 'Sliedrecht', 'C', '2023-03-01', 'Geslaagd', 1, NULL, SYSDATE(6), SYSDATE(6))
    ,(103234, 'LinksomRechtsom', 'Dordrecht', 'D', '2023-05-15', 'Geslaagd', 1, NULL, SYSDATE(6), SYSDATE(6))
    ,(106452, 'OpDeVluchtStrook', 'Zwijndrecht', 'AM', '2023-05-08', 'Gezakt', 1, NULL, SYSDATE(6), SYSDATE(6))
    ,(104546, 'RechttDoorEnGaan', 'Rotterdam', 'B', '2023-04-17', 'Gezakt', 1, NULL, SYSDATE(6), SYSDATE(6))
    ,(100333, 'AltijdGeslaagd', 'Dordrecht', 'B', '2023-05-12', 'Geslaagd', 1, NULL, SYSDATE(6), SYSDATE(6))
    ,(124444, 'RijlesVoorJou', 'Rotterdam', 'B', '2023-12-04', 'Geslaagd', 1, NULL, SYSDATE(6), SYSDATE(6));

-- Step: 04
-- Goal: Create a new table Examinator
-- **********************************************************************************
-- Version       Date:           Author:                     Description:
-- *******       **********      ****************            ******************
-- 01            06-02-2023      Mahmoud               New
-- **********************************************************************************/

-- Drop table Examinator
DROP TABLE IF EXISTS Examinator;

CREATE TABLE IF NOT EXISTS Examinator
(
    Id                      TINYINT         UNSIGNED        NOT NULL    AUTO_INCREMENT
   ,Voornaam                VARCHAR(30)                     NOT NULL
   ,TussenVoegsel           VARCHAR(5)                      
   ,Achternaam              VARCHAR(50)                     NOT NULL
   ,Mobiel                  VARCHAR(20)                     NOT NULL
   ,IsActief                BIT                             NOT NULL    DEFAULT 1
   ,Opmerkingen             VARCHAR(250)                    NULL        DEFAULT NULL
   ,DatumAangemaakt         DateTime(6)                     NOT NULL
   ,DatumGewijzigd          DateTime(6)                     NOT NULL

   ,CONSTRAINT              PK_TypeVoertuig_Id              PRIMARY KEY CLUSTERED(Id)
) ENGINE=InnoDB;


-- Step: 05
-- Goal: Fill table Examinator with data
-- **********************************************************************************
-- Version       Date:           Author:                     Description:
-- *******       **********      ****************            ******************
-- 01            06-02-2023      Mahmoud               New
-- **********************************************************************************/

INSERT INTO Examinator
(
     Voornaam
    ,TussenVoegsel
    ,Achternaam
    ,Mobiel
    ,IsActief
    ,Opmerkingen
    ,DatumAangemaakt
    ,DatumGewijzigd
)
VALUES
     ('Manuel', 'van',"Meekeren" , "06-28493823",1, NULL, SYSDATE(6), SYSDATE(6))
    ,('Lissette', 'van',"Dongen" , "06-28493823",1, NULL, SYSDATE(6), SYSDATE(6))
    ,('Jurswailly', '',"Luciano" , "06-28493823",1, NULL, SYSDATE(6), SYSDATE(6))
    ,('Naswha', '',"Salawi" , "06-28493823",1, NULL, SYSDATE(6), SYSDATE(6));


-- Step: 06
-- Goal: Create a new table ExamenPerExaminator
-- **********************************************************************************
-- Version       Date:           Author:                     Description:
-- *******       **********      ****************            ******************
-- 01            06-02-2023      Mahmoud               New
-- **********************************************************************************/

-- Drop table ExamenPerExaminator
DROP TABLE IF EXISTS ExamenPerExaminator;

CREATE TABLE IF NOT EXISTS ExamenPerExaminator
(
     Id                      TINYINT                        UNSIGNED            AUTO_INCREMENT
    ,ExamenId                TINYINT                        UNSIGNED
    ,ExaminatorId            TINYINT                        UNSIGNED
    ,IsActief                BIT                            NOT NULL           DEFAULT 1
    ,Opmerkingen             VARCHAR(250)                       NULL           DEFAULT NULL
    ,DatumAangemaakt         DateTime(6)                    NOT NULL
    ,DatumGewijzigd          DateTime(6)                    NOT NULL

   ,CONSTRAINT      FK_ExamenId_Examen_Id   FOREIGN KEY (ExamenId) REFERENCES Examen(Id)
   ,CONSTRAINT      FK_ExaminatorId_Examinator_Id   FOREIGN KEY (ExaminatorId) REFERENCES Examinator(Id)
   ,CONSTRAINT      PK_ExamenPerExaminator_Id   PRIMARY KEY CLUSTERED(Id)
) ENGINE=InnoDB;


-- Step: 07
-- Goal: Fill table ExamenPerExaminator with data
-- **********************************************************************************
-- Version       Date:           Author:                     Description:
-- *******       **********      ****************            ******************
-- 01            06-02-2023      Mahmoud               New
-- **********************************************************************************/



INSERT INTO ExamenPerExaminator ( 
     ExamenId 
    ,ExaminatorId
    ,IsActief
    ,Opmerkingen
    ,DatumAangemaakt
    ,DatumGewijzigd
) VALUES 
     (1, 3, 1, NULL, SYSDATE(6), SYSDATE(6))
    ,(3, 3, 1, NULL, SYSDATE(6), SYSDATE(6))
    ,(2, 2, 1, NULL, SYSDATE(6), SYSDATE(6))
    ,(4, 1, 1, NULL, SYSDATE(6), SYSDATE(6))
    ,(7, 3, 1, NULL, SYSDATE(6), SYSDATE(6))
    ,(6, 2, 1, NULL, SYSDATE(6), SYSDATE(6))
    ,(5, 4, 1, NULL, SYSDATE(6), SYSDATE(6));


