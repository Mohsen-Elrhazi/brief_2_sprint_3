<?php
include '../connexion.php';

$idPlayer = $_GET['id']; 
// echo $idPlayer;

// Suppression des statistiques normales
$stmt1 = $conn->prepare("DELETE FROM statiqtiques_NormalPL WHERE PlayerID = ?");
$stmt1->bind_param("i", $idPlayer);
$stmt1->execute();

// Suppression des statistiques GK
$stmt2 = $conn->prepare("DELETE FROM statiqtiques_gk WHERE PlayerID = ?");
$stmt2->bind_param("i", $idPlayer);
$stmt2->execute();

// Suppression du joueur
$stmt3 = $conn->prepare("DELETE FROM player WHERE PlayerID = ?");
$stmt3->bind_param("i", $idPlayer);
$stmt3->execute();

// Fermeture des requêtes préparées
$stmt1->close();
$stmt2->close();
$stmt3->close();

// Rediriger vers la page des joueurs
header("Location: players.php");

exit();
?>