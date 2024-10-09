
// Simulated API responses
const borrowedBooksApiResponse = {
  labels: [
    'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'
  ],
  datasets: [
    {
      label: 'Male',
      data: [30, 25, 40, 20, 35, 30, 45],
      backgroundColor: 'rgba(54, 162, 235, 0.2)',
      borderColor: 'rgba(54, 162, 235, 1)',
      borderWidth: 1,
      borderRadius: 5
    },
    {
      label: 'Female',
      data: [20, 30, 35, 25, 30, 25, 40],
      backgroundColor: 'rgba(255, 99, 132, 0.2)',
      borderColor: 'rgba(255, 99, 132, 1)',
      borderWidth: 1,
      borderRadius: 5
    }
  ]
};

const userActivityApiResponse = {
  labels: [
    'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'
  ],
  datasets: [{
    label: 'Active Users',
    data: [50, 45, 55, 60, 48, 62, 70],
    fill: false,
    borderColor: 'rgba(75, 192, 192, 1)',
    tension: 0.4,
    pointRadius: 5,
    pointBackgroundColor: 'rgba(75, 192, 192, 1)',
    pointBorderWidth: 2
  }]
};

const accessionLevelsApiResponse = {
  labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4', 'Week 5'],
  datasets: [
    {
      label: 'Last Month',
      data: [40, 35, 45, 50, 55],
      fill: true,
      backgroundColor: 'rgba(54, 162, 235, 0.2)',
      borderColor: 'rgba(54, 162, 235, 1)',
      tension: 0.4,
      pointRadius: 4,
      pointBackgroundColor: 'rgba(54, 162, 235, 1)',
      pointBorderWidth: 2
    },
    {
      label: 'This Month',
      data: [10, 15, 25, 20, 35],
      fill: true,
      backgroundColor: 'rgba(255, 206, 86, 0.2)',
      borderColor: 'rgba(255, 206, 86, 1)',
      tension: 0.4,
      pointRadius: 4,
      pointBackgroundColor: 'rgba(255, 206, 86, 1)',
      pointBorderWidth: 2
    }
  ]
};

// Fetch Data from APIs (simulated)
function fetchBorrowedBooksData() {
  return new Promise((resolve) => {
    setTimeout(() => {
      resolve(borrowedBooksApiResponse);
    }, 1000);  // Simulate 1 second delay
  });
}

function fetchUserActivityData() {
  return new Promise((resolve) => {
    setTimeout(() => {
      resolve(userActivityApiResponse);
    }, 1000);  // Simulate 1 second delay
  });
}

function fetchAccessionLevelsData() {
  return new Promise((resolve) => {
    setTimeout(() => {
      resolve(accessionLevelsApiResponse);
    }, 1000);  // Simulate 1 second delay
  });
}

// Render the Borrowed Books Bar Chart
function renderBorrowedBooksChart() {
  var ctx = document.getElementById('borrowedBooksChart').getContext('2d');
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: [
        'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday',
        'Sunday'
      ],
      datasets: [
        {
          label: 'Male',
          data: [20, 30, 40, 25, 35, 40, 50],
          backgroundColor: '#0095FF',  // Male bar color
          borderColor: '#0095FF',      // Male border color
          borderWidth: 1,
          borderRadius: 5,
          barThickness: 15
        },
        {
          label: 'Female',
          data: [15, 25, 35, 20, 30, 35, 40],
          backgroundColor: '#00E096',  // Female bar color
          borderColor: '#00E096',      // Female border color
          borderWidth: 1,
          borderRadius: 5,
          barThickness: 15
        }
      ]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: true,
          position: 'top',
          labels: {color: '#2E384D', font: {size: 14}}
        },
        tooltip: {
          backgroundColor: '#2E384D',
          titleColor: '#fff',
          bodyColor: '#fff',
          titleFont: {size: 16},
          bodyFont: {size: 14}
        }
      },
      scales: {
        x: {
          ticks: {color: '#2E384D', font: {size: 12}},
          grid: {
            display: false  // Remove grid lines on the x-axis
          }
        },
        y: {
          beginAtZero: true,
          ticks: {color: '#2E384D', font: {size: 12}},
          grid: {color: 'rgba(0, 0, 0, 0.1)'}
        }
      },
      // Set bar width and gap
      barPercentage: 0.8,    // Width of individual bars (0 to 1, smaller
                             // value = thinner bar)
      categoryPercentage: 1  // Space between bars within each group
                             // (0 to 1, smaller value = larger gap)
    }
  });
}


// Render the User Activity Line Graph
async function renderUserActivityChart() {
  const ctx = document.getElementById('userActivityChart').getContext('2d');
  const data = await fetchUserActivityData();

  new Chart(ctx, {
    type: 'line',
    data: {labels: data.labels, datasets: data.datasets},
    options: {
      responsive: true,
      plugins: {
        legend: {display: true, labels: {color: '#2E384D', font: {size: 14}}},
        tooltip: {
          backgroundColor: '#2E384D',
          titleColor: '#fff',
          bodyColor: '#fff',
          titleFont: {size: 16},
          bodyFont: {size: 14}
        }
      },
      scales: {
        x: {ticks: {color: '#2E384D', font: {size: 12}}},
        y: {
          beginAtZero: true,
          ticks: {color: '#2E384D', font: {size: 12}},
          grid: {color: 'rgba(0, 0, 0, 0.1)'}
        }
      }
    }
  });
}

// Render the Accession Levels Two-Line Graph
async function renderAccessionLevelsChart() {
  const ctx = document.getElementById('accessionLevelsChart').getContext('2d');
  const data = await fetchAccessionLevelsData();

  new Chart(ctx, {
    type: 'line',
    data: {labels: data.labels, datasets: data.datasets},
    options: {
      responsive: true,
      plugins: {
        legend: {display: true, labels: {color: '#2E384D', font: {size: 14}}},
        tooltip: {
          backgroundColor: '#2E384D',
          titleColor: '#fff',
          bodyColor: '#fff',
          titleFont: {size: 16},
          bodyFont: {size: 14}
        }
      },
      scales: {
        x: {ticks: {color: '#2E384D', font: {size: 12}}},
        y: {
          beginAtZero: true,
          ticks: {color: '#2E384D', font: {size: 12}},
          grid: {color: 'rgba(0, 0, 0, 0.1)'}
        }
      }
    }
  });
}

// Initialize all charts
renderBorrowedBooksChart();
renderUserActivityChart();
renderAccessionLevelsChart();
