<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- biblio chart-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
    </script>

    <title>dashbord</title>
</head>

<body>
    <section>
        <!-- sidebar -->
        <div class="dashbord">
            <div class="contain">
                <div class="choix">
                    <!-- <h1>Dashbord</h1> -->
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

                        <a class="link" href="club.php">
                            <div>
                                <img src="./images/club-de-football.png" />
                                <span>Club</span>
                            </div>
                        </a>

                        <a class="link" href="nationality.php">
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

        <div id="partie-sts">
            <div class="stats">
                <div class="total-players">
                    <h2>Total Players :
                        <?php 
                     include '../connexion.php'; 

                     $sql = "SELECT  count(PlayerID) as nbr_players FROM player;";
                     $result = $conn->query($sql);
                    while( $row = $result->fetch_assoc()){
                      echo  $nbrPlayers=$row['nbr_players'];
                   
                    }
                    ?>
                    </h2>
                </div>

                <div class="total-clubs">
                    <h2>Total Clubs :
                        <?php 
                     include '../connexion.php'; 

                     $sql = "SELECT  count(ClubID) as nbr_club FROM club;";
                     $result = $conn->query($sql);
                    while( $row = $result->fetch_assoc()){
                      echo  $nbrPlayers=$row['nbr_club'];
                   
                    }
                    ?>
                    </h2>
                </div>

                <div class="total-nationalitys">
                    <h2>Total Nationalitys :
                        <?php 
                     include '../connexion.php'; 

                     $sql = "SELECT  count(NationalityID) as nbr_nationality FROM nationality;";
                     $result = $conn->query($sql);
                    while( $row = $result->fetch_assoc()){
                      echo  $nbrPlayers=$row['nbr_nationality'];
                   
                    }
                    ?>
                    </h2>

                </div>
            </div>

            <div class="charts">
                <div>
                    <canvas id="doughnutChart"></canvas>
                </div>
                <div>
                    <canvas id="pieChart"></canvas>
                </div>

            </div>


        </div>





    </section>

    <!-- bottstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="./dashbord.js"></script>


</body>

</html>