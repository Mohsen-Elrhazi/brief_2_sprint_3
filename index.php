<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- !cdn fontawesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="./assets/style1.css" />
    <title>Document</title>
</head>

<body>

    <nav>
        <h1><i>EA FC25</i></h1>


        <!-- <a href="./DASHBORD/dashbord.php"><button>Log in</button></a> -->

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success px-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Log in
        </button>

        <!-- Modal -->
        <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title fs-5 " id="staticBackdropLabel">LOG IN
                        </h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form id="login-form" method="post" action="login.php">

                            <div>
                                <label for="username">Username :</label>
                                <input id="username" name="username" type="text" placeholder="username" maxlength="" />
                            </div>

                            <div>
                                <label for="password">Password :</label>
                                <input id="password" name="password" type="password" placeholder="password"
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

    </nav>

    <section>
        <div class="contain-terrain">
            <div class="terrain">
                <!--! Positionnement des joueurs -->
                <div class="position attaquant">
                    <div class="card-player" id="LW">
                        <div class="name-post">LW</div>
                    </div>
                    <div class="card-player" id="ST">
                        <div class="name-post">ST</div>
                    </div>
                    <div class="card-player" id="RW">
                        <div class="name-post">RW</div>
                    </div>
                </div>

                <div class="position milieu">
                    <div class="card-player" id="LM">
                        <div class="name-post">LM</div>
                    </div>
                    <div class="card-player" id="CM">
                        <div class="name-post">CM</div>
                    </div>
                    <div class="card-player" id="RM">
                        <div class="name-post">RM</div>
                    </div>
                </div>

                <div class="position defenseur">
                    <div class="card-player" id="LB">
                        <div class="name-post">LB</div>
                    </div>
                    <div class="card-player" id="CB">
                        <div class="name-post">CB</div>
                    </div>
                    <div class="card-player" id="GK">
                        <div class="name-post">GK</div>
                    </div>
                    <div class="card-player" id="WB">
                        <div class="name-post">WB</div>
                    </div>
                    <div class="card-player" id="RB">
                        <div class="name-post">RB</div>
                    </div>
                </div>

            </div>



        </div>
    </section>

    <!--todo Reservation -->
    <!-- <h1 style="text-align:center; margin-top:18px;" >Réservation</h1>
    <div id="reservation">

    </div> -->

    <!-- bottstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

    <script src="script.js"></script>
</body>

</html>