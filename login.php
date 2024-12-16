<?php
include 'connexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $username = $_POST["username"]; 
    $password = $_POST["password"]; 

    $stmt = $conn->prepare("SELECT * FROM login WHERE username = ? AND password = ?");
    
    if ($stmt) {
        $stmt->bind_param("ss", $username, $password); 
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            header("Location: ./DASHBORD/dashbord.php ");
            exit();
        } else {
            echo "<p style='color: red;'>Identifiants invalides. Veuillez réessayer.</p>";
        }

        $stmt->close(); 
    } else {
        echo "<p style='color: red;'>Erreur lors de la préparation de la requête.</p>";
    }
}
$conn->close(); 
?>