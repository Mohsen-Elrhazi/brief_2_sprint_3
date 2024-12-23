document.addEventListener("DOMContentLoaded", async function () {
  try {
    const response = await fetch("getClubData.php");
    const data = await response.json();

    const clubNames = data.map((item) => item.ClubName);
    const playerCounts = data.map((item) => item.playerCount);

    const doughnutCtx = document
      .getElementById("doughnutChart")
      .getContext("2d");
    new Chart(doughnutCtx, {
      type: "doughnut",
      data: {
        labels: clubNames,
        datasets: [
          {
            label: "Players by Club",
            data: playerCounts,
            backgroundColor: generateColors(clubNames.length),
            borderColor: generateColors(clubNames.length, true),
            borderWidth: 1,
          },
        ],
      },
      options: {
        responsive: true,
        plugins: {
          legend: {
            position: "top",
          },
        },
      },
    });
  } catch (error) {
    console.error("Erreur lors du chargement des données :", error);
  }
});

// Fonction pour générer des couleurs aléatoires
function generateColors(count, border = false) {
  const colors = [];
  for (let i = 0; i < count; i++) {
    const color = `rgba(${Math.floor(Math.random() * 255)}, ${Math.floor(
      Math.random() * 255
    )}, ${Math.floor(Math.random() * 255)}, 0.7)`;
    colors.push(border ? color.replace("0.7", "1") : color);
  }
  return colors;
}

//! 2eme chart de players per nationality
document.addEventListener("DOMContentLoaded", async function () {
  try {
    const response = await fetch("getNationalityData.php");
    const data = await response.json();

    const nationalityNames = data.map((item) => item.NationalityName);
    const playerCounts = data.map((item) => item.playerCount);

    const doughnutCtx = document
      .getElementById("nationalityDoughnutChart")
      .getContext("2d");
    new Chart(doughnutCtx, {
      type: "doughnut",
      data: {
        labels: nationalityNames,
        datasets: [
          {
            label: "Players by Nationality",
            data: playerCounts,
            backgroundColor: generateColors(nationalityNames.length),
            borderColor: generateColors(nationalityNames.length, true),
            borderWidth: 1,
          },
        ],
      },
      options: {
        responsive: true,
        plugins: {
          legend: {
            position: "top",
          },
        },
      },
    });
  } catch (error) {
    console.error("Erreur lors du chargement des données :", error);
  }
});

// Fonction pour générer des couleurs aléatoires
function generateColors(count, border = false) {
  const colors = [];
  for (let i = 0; i < count; i++) {
    const color = `rgba(${Math.floor(Math.random() * 255)}, ${Math.floor(
      Math.random() * 255
    )}, ${Math.floor(Math.random() * 255)}, 0.7)`;
    colors.push(border ? color.replace("0.7", "1") : color);
  }
  return colors;
}

document.querySelectorAll("#normal-player").forEach((element) => {
  element.style.display = "none";
});
document.getElementById("post").addEventListener("change", function () {
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
