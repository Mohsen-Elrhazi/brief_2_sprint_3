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

                                <form id="form-infos">

                                    <div>
                                        <label for="name">name :</label>
                                        <input id="name" type="text" placeholder="Name" maxlength="" />
                                    </div>

                                    <div>
                                        <label for="ImageURL">ImageURL :</label>
                                        <input id="ImageURL" type="text" placeholder="ImageURL" maxlength="" />
                                    </div>

                                </form>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--fin modal  -->

            </div>

            <!-- <div class="contain-players">

            </div> -->



        </div>


    </section>

    <!-- bottstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

    <script src="./dashbord.js"></script>
</body>

</html>