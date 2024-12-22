let playerCards = document.querySelectorAll(".card-player");
let modalList = document.querySelector("#modal-list");
let listPlayers = document.querySelector("#list-player");
let iconeClose = document.querySelector(".fa-circle-xmark");

modalList.style.display = "none";

playerCards.forEach((card) => {
  card.addEventListener("click", function (event) {
    let post = event.currentTarget.getAttribute("id");
    console.log("Position sélectionnée :", post);

    fetch("./DASHBORD/getPlayers.php")
      .then((res) => res.json())
      .then((players) => {
        let filteredPlayers = players.filter(
          (player) => player.Position === post
        );

        console.log(`Joueurs trouvés pour ${post}:`, filteredPlayers);

        // Vider la liste actuelle
        listPlayers.innerHTML = "";

        // Ajouter les joueurs filtrés
        filteredPlayers.forEach((player) => {
          let newCard = document.createElement("div");
          newCard.classList.add("new-card-player");

          //! div contain
          let divContain = document.createElement("div");
          divContain.classList.add("divContain");

          let divImgName = document.createElement("div");
          divImgName.classList.add("image-name");

          let namePl = document.createElement("p");
          namePl.textContent = player.Name.split(" ")[0];
          divImgName.appendChild(namePl);

          let imgPlayer = document.createElement("img");
          imgPlayer.src = player.ImagePlayer || "default-image.png";
          imgPlayer.classList.add("img-player");
          divImgName.appendChild(imgPlayer);

          //! div Rating Club Country
          let divRatingClubCountry = document.createElement("div");
          divRatingClubCountry.classList.add("ratingCountryClub");

          //  span rating
          let spanRating = document.createElement("span");
          spanRating.textContent = player.Rating;

          //  span position
          let spanPosition = document.createElement("span");
          spanPosition.textContent = player.Position;

          //  image country
          let flagImageUrl = player.NationalityImage;
          let imgCountry = document.createElement("img");
          imgCountry.src = flagImageUrl;
          imgCountry.classList.add("img-country");

          //image club
          let clubImageUrl = player.ClubImage;
          let imgClub = document.createElement("img");
          imgClub.src = clubImageUrl;
          imgClub.classList.add("img-club");

          divRatingClubCountry.appendChild(spanRating);
          divRatingClubCountry.appendChild(spanPosition);
          divRatingClubCountry.appendChild(imgCountry);
          divRatingClubCountry.appendChild(imgClub);

          divContain.appendChild(divRatingClubCountry);
          divContain.appendChild(divImgName);

          //! Div pour les informations du joueur
          let divInfos = document.createElement("div");
          divInfos.classList.add("info");

          //  //! Ajouter les statistiques

          let p1 = document.createElement("p");
          let span1 = document.createElement("span");

          let p2 = document.createElement("p");
          let span2 = document.createElement("span");

          let p3 = document.createElement("p");
          let span3 = document.createElement("span");

          let p4 = document.createElement("p");
          let span4 = document.createElement("span");

          let p5 = document.createElement("p");
          let span5 = document.createElement("span");

          let p6 = document.createElement("p");
          let span6 = document.createElement("span");

          if (post === "GK") {
            p1.textContent = "DIV";
            span1.textContent = player.Diving;

            p2.textContent = "HND";
            span2.textContent = player.Handling;

            p3.textContent = "KIC";
            span3.textContent = player.Kicking;

            p4.textContent = "REF";
            span4.textContent = player.Reflexes;

            p5.textContent = "SPE";
            span5.textContent = player.Speed;

            p6.textContent = "POS";
            span6.textContent = player.Positioning;
          } else {
            p1.textContent = "PAC";
            span1.textContent = player.Pace;

            p2.textContent = "SHO";
            span2.textContent = player.Shooting;

            p3.textContent = "PAS";
            span3.textContent = player.Passing;

            p4.textContent = "DRI";
            span4.textContent = player.Dribbling;

            p5.textContent = "DEF";
            span5.textContent = player.Deffensing;

            p6.textContent = "PHY";
            span6.textContent = player.Physical;
          }
          p1.appendChild(span1);
          p2.appendChild(span2);
          p3.appendChild(span3);
          p4.appendChild(span4);
          p5.appendChild(span5);
          p6.appendChild(span6);

          divInfos.appendChild(p1);
          divInfos.appendChild(p2);
          divInfos.appendChild(p3);
          divInfos.appendChild(p4);
          divInfos.appendChild(p5);
          divInfos.appendChild(p6);

          newCard.appendChild(divContain);
          newCard.appendChild(divInfos);

          listPlayers.appendChild(newCard);
          
        //! Remplacement dans le terrain
        newCard.addEventListener("click", function (event) {
          let postContainer = document.getElementById(post);
          postContainer.innerHTML = ""; // vider la position actuelle
           
          //conserver le nom de position
          let postName=document.createElement("div");
          postName.classList.add("name-post");
          postName.textContent=player.Position;
          postName.style.bottom="-36px"
          postContainer.appendChild(postName); 
          
          postContainer.appendChild(newCard); 

          postContainer.style.backgroundImage="none";

          modalList.style.display = "none"; 
        });
          
        });

        // Afficher la boîte modale
        modalList.style.display = "flex";
      })
      .catch((err) =>
        console.error("Erreur lors de la récupération des joueurs :", err)
      );
  });
});

// Fermer la boîte modale
iconeClose.addEventListener("click", () => {
  modalList.style.display = "none";
});
