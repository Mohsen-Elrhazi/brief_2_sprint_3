<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>club</title>
</head>

<body>
    <section>

        <!-- sidebar -->
        <div class="dashbord">
            <div class="contain">
                <div class="choix">
                    <a class="link" href="./dashbord.php">
                        <!-- <h1>Dashbord</h1> -->
                        <img class="admin" src="../assets/images/utilisateur.png">

                    </a>
                    <div class="pl-cl-na">
                        <div>
                            <img src="./images/statistique.png" />
                            <span>Statistiques</span>
                        </div>

                        <a class="link" href="players.php">
                            <div>

                                <img src="./images/joueur-de-football.png" />
                                <span>Players</span>
                            </div>
                        </a>

                        <div>
                            <img src="./images/club-de-football.png" />
                            <span>Club</span>
                        </div>

                        <a class="link" href="./nationality.php">
                            <div>
                                <img src="./images/embleme.png" />
                                <span>Nationality</span>
                            </div>
                        </a>
                    </div>

                    <div class="support-settings">
                        <div>
                            <img src="./images/parametres.png" />
                            <span>Settings</span>
                        </div>

                        <div>
                            <img src="./images/support-technique.png" />
                            <span>Support</span>
                        </div>
                    </div>
                </div>

                <a class="link" href="../index.php">
                    <div class="log-out">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        <span>Log out</span>
                    </div>
                </a>

            </div>

        </div>

        <div class="main">

            <div class="navbar">
                <div class="d-flex gap-3">
                    <input class="custom-search" type="search" placeholder="Search Club">
                    <button id="search" type="button" class="btn btn-warning px-4">Search</button>
                </div>

                <div>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        Add Club
                    </button>

                    <!-- Modal -->
                    <?php include 'modal_club.php' ?>;
                    <!-- fin modal -->

                </div>
            </div>


            <!--  affichage clubs-->
            <div class="contain-affichage">

                <?php
include '../connexion.php'; 

$sql = "SELECT ClubID, ClubName, ClubImage FROM club";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table text-center'>";
    echo "<thead><tr><th>ID</th><th>Nom</th><th>Image</th><th>Actions</th></tr></thead>";
    echo "<tbody class='table-group-divider'>";
    while ($row = $result->fetch_assoc()) {
        $clubID = $row["ClubID"];
        $clubName = $row["ClubName"];
        $clubImage = $row["ClubImage"];

        echo "<tr>";
        echo "<td>" . $clubID . "</td>";
        echo "<td>" . $clubName . "</td>";
        echo "<td><img src='" . $clubImage . "' alt='Club Image' style='width:50px; height:50px;'></td>";
        echo "<td>
            <a href='#' data-bs-toggle='modal' data-bs-target='#modalEditClub$clubID'>
                <i class='fa-regular fa-pen-to-square'></i>
            </a>
            <a href='supprimer_club.php?id=$clubID' 
                onclick='return confirm(\"Êtes-vous sûr de vouloir supprimer ce club ?\");'>
                <i class='fa-solid fa-trash'></i>
            </a>
        </td>";
        echo "</tr>";

        // Modal spécifique à chaque club
        echo "
        <div class='modal fade' id='modalEditClub$clubID' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='modalEditClubLabel$clubID' aria-hidden='true'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h1 class='modal-title fs-5' id='modalEditClubLabel$clubID'>Modifier le Club</h1>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>
                    <div class='modal-body'>
                        <form method='post' action='modifier_club.php'>
                            <input type='hidden' name='ClubID' value='$clubID'>
                            <div class='mb-3'>
                                <label for='ClubName$clubID' class='form-label'>Nom :</label>
                                <input id='ClubName$clubID' name='ClubName' type='text' class='form-control' value='$clubName' >
                            </div>
                            <div class='mb-3'>
                                <label for='ClubImage$clubID' class='form-label'>Image URL :</label>
                                <input id='ClubImage$clubID' name='ClubImage' type='text' class='form-control' value='$clubImage' >
                            </div>
                            <div class='modal-footer'>
                                <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                <button type='submit' class='btn btn-primary'>Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>";
    }
    echo "</tbody>";
    echo "</table>";
} else {
    echo "<p>Aucun club trouvé.</p>";
}
$conn->close();
?>


            </div>





        </div>


    </section>

    <!-- bottstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

    <script src="./dashbord.js"></script>
</body>

</html>