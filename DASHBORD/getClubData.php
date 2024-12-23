<?php
include '../connexion.php';

$req = "SELECT club.ClubName, count(*) as playerCount
        FROM player 
        NATURAL JOIN club
        GROUP BY club.ClubName";

$result = $conn->query($req);

$clubData = array();

while ($row = $result->fetch_assoc()) {
    $clubData[] = $row; 
}

echo json_encode($clubData); 