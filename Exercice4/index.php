<?php

// Créez une connexion de base de données au serveur PostgreSQL 
$pdo = require("connect.php");

// Créez une requête SQL.
$sql = 'SELECT * FROM COMPANY';

// Exécuter la requête pour récupérer la table
$statement = $pdo->query($sql);

while ($row = $statement->fetchAll(PDO::FETCH_ASSOC)) {
  echo "ID: " . $row['ID'] . " | NAME: " . $row['NAME'] . " | AGE: " . $row['AGE'] . " | ADDRESS: " . $row['ADDRESS'] . " | SALARY: " . $row['SALARY'] . "<br>";
}

// Fermez la connexion à la base de données.
$pdo = null;
?>
