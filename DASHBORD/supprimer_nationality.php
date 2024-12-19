<?php
include '../connexion.php';

$idNationality = $_GET['id']; 
// echo $idPlayer;

// Suppression  fk id nationalités dans table player
$stmt1 = $conn->prepare("DELETE FROM player WHERE NationalityID= ?");
$stmt1->bind_param("i", $idNationality);
$stmt1->execute();

// Suppression des statistiques GK
$stmt2 = $conn->prepare("DELETE FROM nationality WHERE NationalityID = ?");
$stmt2->bind_param("i",$idNationality);
$stmt2->execute();


// Fermeture des requêtes préparées
$stmt1->close();
$stmt2->close();

// Rediriger vers la page des joueurs
header("Location: nationality.php");

exit();
?>