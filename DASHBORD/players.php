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


                        <div>
                            <img src="./images/club-de-football.png" />
                            <span>Club</span>
                        </div>

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
                <input type="search">
                <!-- <button id="add-player" type="button" class="btn btn-success px-4">ADD</button> -->

                <!-- Button trigger modal -->
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
                                <form id="form-infos">
                                    <!-- <h3>Entrer les informations des joueurs</h3> -->

                                    <div>
                                        <label for="name">name:</label>
                                        <input id="name" type="text" placeholder="Name" maxlength="18" />
                                    </div>

                                    <div>
                                        <label for="image-player"> Image Player</label>
                                        <select id="image-player">
                                            <option value="https://cdn.sofifa.net/players/246/191/25_60.png">J. Alvarez
                                            </option>
                                            <option value="https://cdn.sofifa.net/players/264/309/25_60.png">A. Guler
                                            </option>
                                            <option value="https://cdn.sofifa.net/players/277/643/25_60.png">Lamine
                                                Yamal</option>
                                            <option value="https://cdn.sofifa.net/players/239/085/25_60.png">E. Haaland
                                            </option>
                                            <option value="https://cdn.sofifa.net/players/231/677/25_60.png">M. Rashford
                                            </option>
                                            <option value="https://cdn.sofifa.net/players/256/630/25_60.png">F. Wirtz
                                            </option>
                                            <option value="https://cdn.sofifa.net/players/202/126/25_60.png">H. Kane
                                            </option>
                                            <option value="https://cdn.sofifa.net/players/223/689/25_60.png">W. Weghorst
                                            </option>
                                            <option value="https://cdn.sofifa.net/players/238/794/25_60.png">Vini Jr.
                                            </option>
                                            <option value="https://cdn.sofifa.net/players/241/721/25_60.png">Rafael Leao
                                            </option>
                                            <option value="https://cdn.sofifa.net/players/247/635/25_60.png">K.
                                                Kvaratskhelia</option>
                                            <option value="https://cdn.sofifa.net/players/212/622/25_60.png">J. Kimmich
                                            </option>
                                            <option value="https://cdn.sofifa.net/players/232/293/25_60.png">V. Osimhen
                                            </option>
                                            <option value="https://cdn.sofifa.net/players/251/854/25_60.png">Pedri
                                            </option>
                                            <option value="https://cdn.sofifa.net/players/192/119/25_60.png">T. Courtois
                                            </option>
                                            <option value="https://cdn.sofifa.net/players/259/532/25_60.png">Joan Garcia
                                            </option>
                                            <option value="https://cdn.sofifa.net/players/158/023/25_60.png">L. Messi
                                            </option>
                                            <option value="https://cdn.sofifa.net/players/020/801/25_60.png">Cristaiono
                                                Ronaldo</option>
                                        </select>
                                    </div>

                                    <div>
                                        <label for="post">Position</label>
                                        <select id="post">
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

                                    <!-- !choisi l'image de player -->
                                    <div>
                                        <label for="flag-country">Nationality</label>
                                        <select id="flag-country">
                                            <option value="https://cdn.sofifa.net/flags/ar.png">Argentine</option>
                                            <option value="https://cdn.sofifa.net/flags/pt.png">Portugal</option>
                                            <option value="https://cdn.sofifa.net/flags/be.png">Belgique</option>
                                            <option value="https://cdn.sofifa.net/flags/fr.png">France</option>
                                            <option value="https://cdn.sofifa.net/flags/nl.png">Pays-Bas</option>
                                            <option value="https://cdn.sofifa.net/flags/de.png">Allemagne</option>
                                            <option value="https://cdn.sofifa.net/flags/br.png">Brésil</option>
                                            <option value="https://cdn.sofifa.net/flags/eg.png">Égypte</option>
                                            <option value="https://cdn.sofifa.net/flags/si.png">Slovénie</option>
                                            <option value="https://cdn.sofifa.net/flags/hr.png">Croatie</option>
                                            <option value="https://cdn.sofifa.net/flags/ma.png">Maroc</option>
                                            <option value="https://cdn.sofifa.net/flags/no.png">Norvège</option>
                                            <option value="https://cdn.sofifa.net/flags/ca.png">Canada</option>
                                        </select>
                                    </div>

                                    <div>
                                        <label for="flag-club"> Club</label>
                                        <select id="flag-club">
                                            <option value="https://cdn.sofifa.net/meta/team/3468/30.png">Real Madrid
                                            </option>
                                            <option value="https://cdn.sofifa.net/meta/team/19/30.png">Arsenal</option>
                                            <option value="https://cdn.sofifa.net/meta/team/14/30.png">Manchester United
                                            </option>
                                            <option value="https://cdn.sofifa.net/meta/team/83/30.png">FC Barcelone
                                            </option>
                                            <option value="https://cdn.sofifa.net/meta/team/8/30.png">Liverpool</option>
                                            <option value="https://cdn.sofifa.net/meta/team/625/30.png">Juventus
                                            </option>
                                            <option value="https://cdn.sofifa.net/meta/team/591/30.png">Paris
                                                Saint-Germain</option>
                                            <option value="https://cdn.sofifa.net/meta/team/503/30.png">Bayern Munich
                                            </option>
                                            <option value="https://cdn.sofifa.net/meta/team/18/30.png">Chelsea</option>
                                            <option value="https://cdn.sofifa.net/meta/team/2930/30.png">Inter Milan
                                            </option>
                                            <option value="https://cdn.sofifa.net/meta/team/113/30.png">AC Milan
                                            </option>
                                            <option value="https://cdn.sofifa.net/meta/team/7980/30.png">Atlético Madrid
                                            </option>
                                            <option value="https://cdn.sofifa.net/meta/team/58/30.png">Sporting CP
                                            </option>
                                            <option value="https://cdn.sofifa.net/meta/team/629/30.png">Ajax</option>
                                            <option value="https://cdn.sofifa.net/meta/team/9/30.png">Manchester City
                                            </option>
                                            <option value="https://cdn.sofifa.net/meta/team/3321/30.png">Bayern04
                                                Leverkusen</option>
                                            <option value="https://cdn.sofifa.net/meta/team/597/30.png">Napoli</option>
                                            <option value="https://cdn.sofifa.net/meta/team/6/30.png">Tottenham</option>
                                        </select>
                                    </div>



                                    <div>
                                        <label for="rating"> Rating</label>
                                        <input id="rating" type="number" placeholder="Rating" min="0" />
                                    </div>
                                    <!--todo proprite de player -->
                                    <span id="normal-player">
                                        <div>
                                            <label for="pace"> Pace</label>
                                            <input id="pace" type="number" placeholder="Pace" min="0" />
                                        </div>
                                    </span>

                                    <span id="normal-player">
                                        <div>
                                            <label for="shooting"> Shooting</label>
                                            <input id="shooting" type="number" placeholder="Shooting" min="0" />
                                        </div>
                                    </span>

                                    <span id="normal-player">
                                        <div>
                                            <label for="passing"> Passing</label>
                                            <input id="passing" type="number" placeholder="Passing" min="0" />
                                        </div>
                                    </span>

                                    <span id="normal-player">
                                        <div>
                                            <label for="dribbling"> Dribbling</label>
                                            <input id="dribbling" type="number" placeholder="Dribbling" min="0" />
                                        </div>
                                    </span>

                                    <span id="normal-player">
                                        <div>
                                            <label for="deffensing"> Deffensing</label>
                                            <input id="deffensing" type="number" placeholder="deffensing" min="0" />
                                        </div>
                                    </span>

                                    <span id="normal-player">
                                        <div>
                                            <label for="physical"> Physical</label>
                                            <input id="physical" type="number" placeholder="Physical" min="0" />
                                        </div>
                                    </span>

                                    <!--todo propriete de gardient -->
                                    <span id="propriete-GK">
                                        <div>
                                            <label for="diving"> Diving</label>
                                            <input id="diving" type="number" placeholder="Diving" min="0" required />
                                        </div>
                                    </span>

                                    <span id="propriete-GK">
                                        <div>
                                            <label for="handling"> Handling</label>
                                            <input id="handling" type="number" placeholder="Handling" min="0"
                                                required />
                                        </div>
                                    </span>

                                    <span id="propriete-GK">
                                        <div>
                                            <label for="kicking"> Kicking</label>
                                            <input id="kicking" type="number" placeholder="Kicking" min="0" required />
                                        </div>
                                    </span>

                                    <span id="propriete-GK">
                                        <div>
                                            <label for="reflexes"> Reflexes</label>
                                            <input id="reflexes" type="number" placeholder="Reflexes" min="0"
                                                required />
                                        </div>
                                    </span>

                                    <span id="propriete-GK">
                                        <div>
                                            <label for="speed"> Speed</label>
                                            <input id="speed" type="number" placeholder="Speed" min="0" required />
                                        </div>
                                    </span>

                                    <span id="propriete-GK">
                                        <div>
                                            <label for="positioning"> Positioning</label>
                                            <input id="positioning" type="number" placeholder="Positioning" min="0"
                                                required />
                                        </div>
                                    </span>

                                    <!--todo fin prp gardient -->

                                    <!-- <button id="add-player" type="button">Add</button>
                                    <button id="edit-player" type="button">Edit</button>
                                    <button id="annuler" type="button">Annuler</button>
                                    <button id="change-formation" type="button">formation</button> -->
                                </form>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="contain-players">

                <table class="table text-center">
                    <thead>
                        <tr>
                            <th class="col-2">NAME</th>
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
                    <tbody class="table-group-divider">
                        <tr>
                            <th scope="row ">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td class="d-flex justify-content-evenly">
                                <button type="button" class="btn btn-primary">EDIT</button>
                                <button id="add-player" type="button" class="btn btn-danger">DELETE</button>


                            </td>
                        </tr>


                    </tbody>
                </table>
            </div>



        </div>


    </section>

    <!-- bottstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

    <script>
    document.querySelectorAll("#normal-player").forEach((element) => {
        element.style.display = "none";
    });
    document.getElementById("post").addEventListener("change", function() {
        if (document.getElementById("post").value === "GK") {
            document.querySelectorAll("#normal-player").forEach((element) => {
                element.style.display = "none";
            });
            document.querySelectorAll("#propriete-GK").forEach((element) => {
                element.style.display = "block";
            });
        } else {
            document.querySelectorAll("#normal-player").forEach((element) => {
                element.style.display = "block";
            });
            document.querySelectorAll("#propriete-GK").forEach((element) => {
                element.style.display = "none";
            });
        }
    });
    </script>
</body>

</html>