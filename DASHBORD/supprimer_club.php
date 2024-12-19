<?php
include '../connexion.php';

$idClub = $_GET['id']; 
// echo $idPlayer;

// Suppression  fk id nationalités dans table player
$stmt1 = $conn->prepare("DELETE FROM player WHERE ClubID= ?");
$stmt1->bind_param("i", $idClub);
$stmt1->execute();

// Suppression des statistiques GK
$stmt2 = $conn->prepare("DELETE FROM club WHERE ClubID = ?");
$stmt2->bind_param("i",$idClub);
$stmt2->execute();


// Fermeture des requêtes préparées
$stmt1->close();
$stmt2->close();

// Rediriger vers la page des joueurs
header("Location: club.php");

exit();
?>