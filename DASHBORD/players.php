<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>players</title>
</head>

<body>
    <section>

        <!-- sidebar -->
        <div class="dashbord">
            <div class="contain">
                <div class="choix">
                    <a class="link" href="./dashbord.php">
                        <h1>Dashbord</h1>
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

                        <a class="link" href="./nationality.php">
                            <div>
                                <img src=" ./images/embleme.png" />
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
                    <input class="custom-search" type="search" placeholder="Search Player">
                    <button id="search" type="button" class="btn btn-warning px-4">Search</button>

                </div> <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Add Player
                </button>

                <!-- Modal -->
                <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel">Entrer les
                                    informations des
                                    joueurs</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="form-player" method="post" action="./insert_player.php">
                                    <!-- <h3>Entrer les informations des joueurs</h3> -->

                                    <div>
                                        <label for=" name">name:</label>
                                        <input id="name" type="text" placeholder="Name" name="name" />
                                    </div>

                                    <div>
                                        <label for=" image-player"> Image Player</label>
                                        <input id="image-player" type="text" placeholder="ImageURL"
                                            name="image-player" />
                                    </div>

                                    <div>
                                        <label for="post">Position</label>
                                        <select id="post" name="post">
                                            <optgroup label="Goalkeeper">
                                                <option value="GK" selected>Goalkeeper (GK)</option>
                                            </optgroup>
                                            <optgroup label="Defender">
                                                <option value="CB">Center Back (CB)</option>
                                                <option value="LB">Left Back (LB)</option>
                                                <option value="RB">Right Back (RB)</option>
                                                <option value="WB">Wing Back (WB)</option>
                                            </optgroup>
                                            <optgroup label="Midfielder">
                                                <option value="RM">Right Midfield (RM)</option>
                                                <option value="CM">Central Midfield (CM)</option>
                                                <option value="LM">Left Midfield (LM)</option>
                                            </optgroup>
                                            <optgroup label="Forward">
                                                <option value="ST">Striker (ST)</option>
                                                <option value="LW">Left Wing (LW)</option>
                                                <option value="RW">Right Wing (RW)</option>
                                            </optgroup>
                                        </select>

                                    </div>

                                    <div>
                                        <label for="flag-country">Nationality</label>
                                        <select id="flag-country" name="nationality">
                                            <?php 
                                            
                                            include '../connexion.php';
                                            $req="select NationalityID, NationalityName, NationalityImage FROM nationality";
                                            $result=$conn->query($req);
                                            if($result->num_rows > 0){
                                             while ($row = $result->fetch_assoc()) {
                                                echo "<option value='" . $row['NationalityID'] . "'>" . $row['NationalityName'] . "</option>";
                                                }
                                            }
                                                 $conn->close(); 
                                            ?>
                                        </select>
                                    </div>

                                    <div>
                                        <label for="flag-club"> Club</label>
                                        <select id="flag-club" name="club">
                                            <?php 
                                            include '../connexion.php';
                                            $req="select ClubID,  ClubName, ClubImage FROM club";
                                            $result=$conn->query($req);
                                            if($result->num_rows > 0){
                                             while ($row = $result->fetch_assoc()) {
                                                echo "<option value='" . $row['ClubID'] . "'>" . $row['ClubName'] . "</option>";
                                                }
                                            }
                                                 $conn->close(); 
                                            ?>
                                        </select>
                                    </div>



                                    <div>
                                        <label for="rating"> Rating</label>
                                        <input id="rating" type="number" placeholder="Rating" min="0" name="rating" />
                                    </div>

                                    <!--todo proprite de player -->
                                    <span id="normal-player">
                                        <div>
                                            <label for="pace"> Pace</label>
                                            <input id="pace" type="number" placeholder="Pace" min="0" name="pace" />
                                        </div>
                                    </span>

                                    <span id="normal-player">
                                        <div>
                                            <label for="shooting"> Shooting</label>
                                            <input id="shooting" type="number" placeholder="Shooting" min="0"
                                                name="shooting" />
                                        </div>
                                    </span>

                                    <span id="normal-player">
                                        <div>
                                            <label for="passing"> Passing</label>
                                            <input id="passing" type="number" placeholder="Passing" min="0"
                                                name="passing" />
                                        </div>
                                    </span>

                                    <span id="normal-player">
                                        <div>
                                            <label for="dribbling"> Dribbling</label>
                                            <input id="dribbling" type="number" placeholder="Dribbling" min="0"
                                                name="dribbling" />
                                        </div>
                                    </span>

                                    <span id="normal-player">
                                        <div>
                                            <label for="deffensing"> Deffensing</label>
                                            <input id="deffensing" type="number" placeholder="deffensing" min="0"
                                                name="deffensing" />
                                        </div>
                                    </span>

                                    <span id="normal-player">
                                        <div>
                                            <label for="physical"> Physical</label>
                                            <input id="physical" type="number" placeholder="Physical" min="0"
                                                name="physical" />
                                        </div>
                                    </span>

                                    <!--todo propriete de gardient -->
                                    <span id="propriete-GK">
                                        <div>
                                            <label for="diving"> Diving</label>
                                            <input id="diving" type="number" placeholder="Diving" min="0"
                                                name="diving" />
                                        </div>
                                    </span>

                                    <span id="propriete-GK">
                                        <div>
                                            <label for="handling"> Handling</label>
                                            <input id="handling" type="number" placeholder="Handling" min="0"
                                                name="handling" />
                                        </div>
                                    </span>

                                    <span id="propriete-GK">
                                        <div>
                                            <label for="kicking"> Kicking</label>
                                            <input id="kicking" type="number" placeholder="Kicking" min="0"
                                                name="kicking" />
                                        </div>
                                    </span>

                                    <span id="propriete-GK">
                                        <div>
                                            <label for="reflexes"> Reflexes</label>
                                            <input id="reflexes" type="number" placeholder="Reflexes" min="0"
                                                name="reflexes" />
                                        </div>
                                    </span>

                                    <span id="propriete-GK">
                                        <div>
                                            <label for="speed"> Speed</label>
                                            <input id="speed" type="number" placeholder="Speed" min="0" name="speed" />
                                        </div>
                                    </span>

                                    <span id="propriete-GK">
                                        <div>
                                            <label for="positioning"> Positioning</label>
                                            <input id="positioning" type="number" placeholder="Positioning" min="0"
                                                name="positioning" />
                                        </div>
                                    </span>

                                    <!--todo fin prp gardient -->

                                    <!-- <button id="add-player" type="button">Add</button>
                                    <button id="edit-player" type="button">Edit</button>
                                    <button id="annuler" type="button">Annuler</button>
                                    <button id="change-formation" type="button">formation</button> -->

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>

            <div class="contain-affichage">

                <!-- <table class="table text-center">
                    <thead>
                        <tr>
                            <th class="col-1">id</th>
                            <th class="col-1">NAME</th>
                            <th class="col-1">IMAGE</th>
                            <th class="col-1">RAT</th>
                            <th class="col-1">POS</th>
                            <th class="col-1">PAC</th>
                            <th class="col-1">SHOT</th>
                            <th class="col-1">PAS</th>
                            <th class="col-1">DRI</th>
                            <th class="col-1">DEF</th>
                            <th class="col-1">PHY</th>
                            <th class="col-2">btn</th>
                        </tr>
                    </thead>

                </table> -->

                <?php
                include '../connexion.php'; 

                $sql = "SELECT * FROM player NATURAL JOIN statiqtiques_normalpl NATURAL JOIN club NATURAL JOIN nationality;";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  echo "<table class='table text-center'>";
                  echo "<thead><tr><th>ID</th><th>NAME</th><th>Image</th><th>Club</th><th>Natio</th><th>RAT</th><th>POS</th><th>PAC</th><th>SHOT</th><th>PAS</th><th>DRI</th><th>DEF</th><th>PHY</th><th>btn</th></tr></thead>";
                 echo "<tbody class='table-group-divider'>";
                 while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                  echo "<td>" . $row["PlayerID"] . "</td>";
                 echo "<td>" . $row["Name"] . "</td>";
                 echo "<td><img src='" . $row["ImagePlayer"] . "' alt='Player Image' style='width:50px; height:50px; margin-top:0px;'></td>";
                 echo "<td><img src='" . $row["ClubImage"] . "' alt='Player Image' style='width:50px; height:50px; margin-top:0px;'></td>";
                 echo "<td><img src='" . $row["NationalityImage"] . "' alt='Player Image' style='width:50px; height:50px; margin-top:0px;'></td>";
                 echo "<td>" . $row["Rating"] . "</td>";
                 echo "<td>" . $row["Position"] . "</td>";
                 echo "<td>" . $row["Pace"] . "</td>";
                 echo "<td>" . $row["Shooting"] . "</td>";
                 echo "<td>" . $row["Passing"] . "</td>";
                 echo "<td>" . $row["Dribbling"] . "</td>";
                 echo "<td>" . $row["Deffensing"] . "</td>";
                 echo "<td>" . $row["Physical"] . "</td>";
                //  echo "<td><button class='btn btn-primary  me-3  '>EDIT</button> <button class='btn btn-danger '>DELETE</button></td>";
                 echo "<td>
                 <a ><i class='fa-regular fa-pen-to-square '  ></i></a>
                 <a href='supprimer_player.php?id=" . $row["PlayerID"] . "' onclick='return confirm(\"Êtes-vous sûr de vouloir supprimer ce joueur ?\");'>
            <i class='fa-solid fa-trash'></i></a>
                             </td>";
                echo "</tr>";
                }
            echo "</tbody>";
                 echo "</table>";
            } else {
              echo "<p>Aucun Player trouvé.</p>";
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