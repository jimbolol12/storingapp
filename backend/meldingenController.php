<?php

//Variabelen vullen
$attractie = $_POST['attractie'];
$capaciteit = $_POST['capaciteit']; 
$melder = $_POST['melder'];

echo $attractie . " / " . $capaciteit . " / " . $melder;

//1. Verbinding
require_once 'conn.php';

//2. Query
$query = "INSERT INTO meldingen (attractie, capaciteit, melder)
VALUES(:attracties, :capaciteit, :melder)"; 

//3. Prepare
$statement = $conn->prepare($query);
$statement->execute([
    ":attractie" => $attractie,
    ":capaciteit" => $capaciteit,
    ":melder" => $melder
])

//4. Execute
$items = $statement->fetchAll(PDO::FETCH_ASSOC);