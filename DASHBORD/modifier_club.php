<?php
include '../connexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $clubID = $_POST['ClubID']; 
    $clubName = $_POST['ClubName']; 
    $clubImage = $_POST['ClubImage']; 

    if (!empty($clubID) && !empty($clubName) && !empty($clubImage)) {
        $sql = "UPDATE club SET ClubName = ?, ClubImage = ? WHERE ClubID = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssi", $clubName, $clubImage, $clubID);
         $stmt->execute();


    } else {
        echo "Veuillez remplir tous les champs.";
    }
}
$stmt->close();


header("Location: club.php");


$conn->close();
exit();
?>