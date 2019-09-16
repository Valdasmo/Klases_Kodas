<?php

$host = 'localhost';
$db   = 'asta';
$user = 'root';
$pass = '123';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

$id = rand(100, 1000);

$pet = md5(rand(100, 1000)); 

// $pdo->query("
//     INSERT INTO pets(id, pet)
// VALUES 
//     ($id, '".$pet."');
// ");


$stmt = $pdo->prepare("
    INSERT INTO pets(id, pet)
VALUES 
    (:id, :pet);
");

$stmt->execute(['pet' => $pet, 'id' => $id]);


// $delete_id = 117;

$delete_id = '1 OR 1';

$stmt = $pdo->prepare("DELETE FROM pets
WHERE id = ?");


$stmt->execute([$delete_id]);






$stmt = $pdo->query('SELECT * FROM pets');

// $mas = $stmt->fetchAll();

// _dc($mas);

while ($row = $stmt->fetch())
{
    echo $row['id'] . ' ' . $row['pet'] .'<br>';
}