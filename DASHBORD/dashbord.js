// import Chart from '/node_modules/chart.js/auto';

document.addEventListener("DOMContentLoaded", function () {
    // Doughnut Chart
    const doughnutCtx = document.getElementById('doughnutChart').getContext('2d');
    new Chart(doughnutCtx, {
      type: 'doughnut',
      data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple'],
        datasets: [{
          label: 'Doughnut Chart',
          data: [12, 19, 3, 5, 2],
          backgroundColor: [
            'rgba(255, 99, 132, 0.7)',
            'rgba(54, 162, 235, 0.7)',
            'rgba(255, 206, 86, 0.7)',
            'rgba(75, 192, 192, 0.7)',
            'rgba(153, 102, 255, 0.7)',
          ],
          borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
          ],
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: {
            position: 'top',
          },
        }
      }
    });
  
    // Pie Chart
    const pieCtx = document.getElementById('pieChart').getContext('2d');
    new Chart(pieCtx, {
      type: 'pie',
      data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple'],
        datasets: [{
          label: 'Pie Chart',
          data: [15, 10, 5, 8, 12],
          backgroundColor: [
            'rgba(255, 99, 132, 0.7)',
            'rgba(54, 162, 235, 0.7)',
            'rgba(255, 206, 86, 0.7)',
            'rgba(75, 192, 192, 0.7)',
            'rgba(153, 102, 255, 0.7)',
          ],
          borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
          ],
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: {
            position: 'right',
          },
        }
      }
    });
  });




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