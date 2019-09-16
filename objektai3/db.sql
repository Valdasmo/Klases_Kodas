CREATE TABLE pets (
    id INT,
    pet VARCHAR(50)
);

INSERT INTO pets(id, pet)
VALUES (1, 'Cat');

INSERT INTO pets(id, pet)
VALUES 
    (2, 'Dog'),
    (3, 'Cat'),
    (4, 'Cow'),
    (5, 'Dog');

SELECT * FROM pets;

SELECT * FROM pets
WHERE pet = 'Cat';

SELECT * FROM pets
WHERE id > 4;

DELETE FROM pets
WHERE id > 4;

DELETE FROM pets
WHERE pet = 'Cow'
OR pet = 'Dog';

UPDATE pets 
SET 
    pet = 'Dog'
WHERE
    id = 2;


-- lentele id, vardas, pavarde, gimimo_metai, lytis, akiu_spalva.