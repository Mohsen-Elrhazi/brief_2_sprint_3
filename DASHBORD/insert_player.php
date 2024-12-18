<?php
include '../connexion.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $imagePlayer = trim($_POST["image-player"]);
    $post = $_POST["post"];
    $rating = $_POST["rating"];
    $clubID = $_POST["club"];
    $nationalityID = $_POST["nationality"];


            $stmtPlayer = $conn->prepare("INSERT INTO player (Name, ImagePlayer, Position, Rating, ClubID, NationalityID) VALUES (?, ?, ?, ?, ?, ?)");
            $stmtPlayer->bind_param("sssiii", $name, $imagePlayer, $post, $rating, $clubID, $nationalityID);

            if ($stmtPlayer->execute()) {
                $PlayerID= $conn->insert_id;
                
                if( $post==='GK'){
                    $diving =$_POST['diving'];
                    $handling = $_POST['handling'];
                    $kicking = $_POST['kicking'];
                    $reflexes = $_POST['reflexes'];
                    $speed = $_POST['speed'];
                    $positioning = $_POST['positioning'];
                    
                    $stmtStatsGK = $conn->prepare("INSERT INTO statiqtiques_GK(diving, handling, kicking, reflexes, speed, positioning,PlayerID )VALUES (?, ?, ?, ?, ?, ?, ?)");
                    $stmtStatsGK->bind_param("iiiiiii", $diving, $handling, $kicking ,$reflexes, $speed, $positioning,$PlayerID);
                    
                    if ($stmtStatsGK->execute()) {
                        echo "<div class='alert alert-success' role='alert'>Joueur et statistiques GK insérés avec succès.</div>";
                    } else {
                        echo "<div class='alert alert-danger' role='alert'>Erreur lors de l'insertion des statistiques GK : " . $stmtStatsGK->error . "</div>";
                    }
    
                    $stmtStatsGK->close();

                }else{
                    // autre position
                }
            
            } else {
                echo "<div class='alert alert-danger' role='alert'>Erreur lors de l'insertion du joueur : " . $stmtPlayer->error . "</div>";
                
            }
            
            $stmtPlayer->close();
            header("Location: players.php");
            exit();
            
    }



$conn->close();
?>