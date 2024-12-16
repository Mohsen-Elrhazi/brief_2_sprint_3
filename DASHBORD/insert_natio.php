<?php
include '../connexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]); 
    $imageURL = trim($_POST["ImageURL"]);
    

    $stmt = $conn->prepare("INSERT INTO nationality (NationalityName, NationalityImage) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $imageURL);

    if ($stmt->execute()) {
        //  echo "<div class='alert alert-success' role='alert'>Club ajouté avec succès!</div>";
        header("location: nationality.php");
    } else {
        // echo "<div class='alert alert-danger' role='alert'>Erreur: " . $stmt->error . "</div>";
    }

    $stmt->close();
}
$conn->close();
?>