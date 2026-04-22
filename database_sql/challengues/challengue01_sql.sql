/* QUESTION 001 */
CREATE DATABASE ParkingLotA1;

USE ParkingLotA1;

/* QUESTION 002 */
CREATE TABLE Brand (
    Id INT PRIMARY KEY AUTO_INCREMENT,
    Name VARCHAR(50) NOT NULL
);

CREATE TABLE Car (
    Plate VARCHAR(7) PRIMARY KEY,
    BrandId INT NOT NULL,
    Description VARCHAR(100) NOT NULL,
    FOREIGN KEY (BrandId) REFERENCES Brand(Id)
);

CREATE TABLE Stay (
    Id INT PRIMARY KEY AUTO_INCREMENT,
    CarPlate VARCHAR(7) NOT NULL,
    EntryDateTime DATETIME NOT NULL,
    ExitDateTime DATETIME NOT NULL,
    AmountPaid DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (CarPlate) REFERENCES Car(Plate)
);

/* QUESTION 003 */
INSERT INTO Brand (Id, Name)
VALUES
    (1, 'FIAT'),
    (2, 'Volkswagen');

INSERT INTO Car (Plate, BrandId, Description)
VALUES
    ('ABC1234', 1, 'Argo'),
    ('DEF5678', 1, 'Palio'),
    ('GHI4321', 2, 'Gol'),
    ('JKL9999', 2, 'Polo');

INSERT INTO Stay (Id, CarPlate, EntryDateTime, ExitDateTime, AmountPaid)
VALUES
    (1, 'ABC1234', '2022-10-14 12:00', '2022-10-14 12:50', 11.00),
    (2, 'DEF5678', '2022-10-14 09:00', '2022-10-14 10:00', 11.00),
    (3, 'GHI4321', '2023-10-14 08:30', '2023-10-14 18:00', 20.00),
    (4, 'GHI4321', '2023-10-16 08:40', '2023-10-16 18:15', 20.00),
    (5, 'DEF5678', '2023-10-20 09:30', '2023-10-20 10:30', 12.00),
    (6, 'ABC1234', '2023-11-20 12:10', '2023-11-20 13:00', 12.00);

/* QUESTION 004 */
UPDATE Car
SET BrandId = 1
WHERE Plate = 'JKL9999';

/* QUESTION 005 */
SELECT *
FROM Car;

/* QUESTION 006 */
SELECT Description, Plate
FROM Car
ORDER BY Description;

/* QUESTION 007 */
SELECT
    B.Name AS Brand,
    C.Description,
    C.Plate
FROM Car C
INNER JOIN Brand B
    ON B.Id = C.BrandId;

/* QUESTION 008 */
SELECT C.Plate
FROM Car C
LEFT JOIN Stay S
    ON S.CarPlate = C.Plate
WHERE S.Id IS NULL;

/* QUESTION 009 */
SELECT
    C.Description,
    C.Plate,
    COUNT(S.Id) AS HowMany
FROM Car C
LEFT JOIN Stay S
    ON S.CarPlate = C.Plate
GROUP BY
    C.Description,
    C.Plate;

/* QUESTION 010 */
SELECT
    YEAR(EntryDateTime) AS StayYear,
    SUM(AmountPaid) AS TotalPaid
FROM Stay
GROUP BY YEAR(EntryDateTime)
ORDER BY StayYear;