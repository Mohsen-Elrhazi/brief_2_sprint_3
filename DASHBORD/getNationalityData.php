<?php
include '../connexion.php';

$req = "SELECT nationality.NationalityName, count(*) as playerCount
        FROM player 
        NATURAL JOIN nationality
        GROUP BY nationality.NationalityName";

$result = $conn->query($req);

$nationalityData = array();

while ($row = $result->fetch_assoc()) {
    $nationalityData[] = $row; 
}

echo json_encode($nationalityData); 