<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
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

                        <a class="link" href="./club.php">
                            <div>
                                <img src="./images/club-de-football.png" />
                                <span>Club</span>
                            </div>
                        </a>

                        <div>
                            <img src="./images/embleme.png" />
                            <span>Nationality</span>
                        </div>
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
                    <input class="custom-search" type="search" placeholder="Search Nationality">
                    <button id="search" type="button" class="btn btn-warning px-4">Search</button>
                </div>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Add Nationality
                </button>

                <!-- Modal -->
                <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel">Etrer la Nationalité
                                </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <form id="form-nationality" method="post" action="./insert_natio.php">

                                    <div>
                                        <label for=" name">name :</label>
                                        <input id="name" name="name" type="text" placeholder="Name" maxlength="" />
                                    </div>

                                    <div>
                                        <label for="ImageURL">ImageURL :</label>
                                        <input id="ImageURL" name="ImageURL" type="text" placeholder="ImageURL"
                                            maxlength="" />
                                    </div>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                            </form>

                        </div>
                    </div>
                </div>
                <!--fin modal  -->

            </div>

            <!--affichge table nation  -->
            <div class="contain-affichage">
                <?php
                include '../connexion.php'; 

                $sql = "SELECT NationalityID, NationalityName , NationalityImage  FROM nationality";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  echo "<table class='table text-center'>";
                  echo "<thead><tr><th>ID</th><th>Nom</th><th>Image</th><th>Actions</th></tr></thead>";
                 echo "<tbody class='table-group-divider'>";
                 while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                  echo "<td>" . $row["NationalityID"] . "</td>";
                 echo "<td>" . $row["NationalityName"] . "</td>";
                 echo "<td><img src='" . $row["NationalityImage"] . "' alt='Nationality Image' style='width:50px; height:50px;'></td>";
                 echo "<td>
                 <a href='#'  data-bs-toggle='modal' data-bs-target='#modalEditNationality$NationalityID' ><i class='fa-regular fa-pen-to-square '  ></i></a>
                 <a href='supprimer_nationality.php?id=" . $row["NationalityID"] . "' onclick='return confirm(\"Êtes-vous sûr de vouloir supprimer cette nationalité ?\");'>
            <i class='fa-solid fa-trash'></i></a>
                             </td>";
                echo "</tr>";
                 // Modal spécifique à chaque nationality
        echo "
        <div class='modal fade' id='modalEditNationality$NationalityID' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='modalEditNationality$NationalityID' aria-hidden='true'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h1 class='modal-title fs-5' id='modalEditNationality$NationalityID'>Modifier le Club</h1>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>
                    <div class='modal-body'>
                        <form method='post' action='modifier_club.php'>
                            <input type='hidden' name='ClubID' value='$NationalityID'>
                            <div class='mb-3'>
                                <label for='NationalityName$NationalityID' class='form-label'>Nom :</label>
                                <input id='NationalityName$NationalityID' name='NationalityName' type='text' class='form-control' value='$NationalityName' >
                            </div>
                            <div class='mb-3'>
                                <label for='NationalityImage$NationalityID' class='form-label'>Image URL :</label>
                                <input id='NationalityImage$NationalityID' name='NationalityImage' type='text' class='form-control' value='$NationalityImage' >
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
              echo "<p>Aucun Nationality trouvé.</p>";
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