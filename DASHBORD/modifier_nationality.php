<?php
include '../connexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $NationalityID = $_POST["NationalityID"];
    $NationalityName = $_POST["NationalityName"];
    $NationalityImage = $_POST["NationalityImage"]; 


    if (!empty($NationalityID) && !empty($NationalityName) && !empty($NationalityImage)) {
        $sql = "UPDATE nationality SET NationalityName = ?, NationalityImage = ? WHERE NationalityID = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssi", $NationalityName, $NationalityImage, $NationalityID);
         $stmt->execute();


    } else {
        echo "Veuillez remplir tous les champs.";
    }
}
$stmt->close();


header("Location: nationality.php");


$conn->close();
exit();
?>