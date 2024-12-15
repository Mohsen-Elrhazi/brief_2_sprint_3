<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- !cdn fontawesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="./assets/style1.css" />
    <title>Document</title>
  </head>
  <body>
    
    <nav>
      <h1><i>EA FC25</i></h1>
      <!-- <input type="search" placeholder="Search..."> -->
      <!-- <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Home</a></li>
        <li><a href="#">Home</a></li>
      </ul> -->

       <a href="./DASHBORD/dashbord.php"><button>Log in</button></a>
    </nav>

    <section>
      <div class="contain-terrain">
        <div class="terrain">
          <!--! Positionnement des joueurs -->
          <div class="position attaquant">
            <div class="card-player" id="LW"><div class="name-post">LW</div></div>
            <div class="card-player" id="ST"><div class="name-post">ST</div></div>
            <div class="card-player" id="RW"><div class="name-post">RW</div></div>
          </div>

          <div class="position milieu">
            <div class="card-player" id="LM"><div class="name-post">LM</div></div>
            <div class="card-player" id="CM"><div class="name-post">CM</div></div>
            <div class="card-player" id="RM"><div class="name-post">RM</div></div>
          </div>

          <div class="position defenseur">
            <div class="card-player" id="LB"><div class="name-post">LB</div></div>
            <div class="card-player" id="CB"><div class="name-post">CB</div></div>
            <div class="card-player" id="GK"><div class="name-post">GK</div></div>
            <div class="card-player" id="WB"><div class="name-post">WB</div></div>
            <div class="card-player" id="RB"><div class="name-post">RB</div></div>
          </div>

        </div>

        

      </div>
    </section>

    <!--todo Reservation -->
    <!-- <h1 style="text-align:center; margin-top:18px;" >Réservation</h1>
    <div id="reservation">

    </div> -->

    <script src="script.js"></script>
  </body>
</html>
