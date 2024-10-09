// Simulated API Response Data
const apiResponse = {
  dailyActiveUsers: {
    labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri'],
    users: [35, 65, 50, 80, 105]
  },
  borrowedBooks: {
    labels: [
      'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday',
      'Sunday'
    ],
    users: [30, 20, 25, 35, 40, 10, 50],
    borderWidth: 1
  },
  accessionLevel: {
    labels: [
      'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct',
      'Nov', 'Dec'
    ],
    lastMonth: [10, 20, 15, 25, 30, 40, 35, 45, 30, 20, 25, 30],
    thisMonth: [5, 15, 10, 20, 25, 30, 40, 35, 20, 15, 10, 25]
  }
};

// Daily Active Users Insights Chart (Horizontal Line Chart)
const dailyActiveUsersCtx =
    document.getElementById('dailyActiveUsersChart').getContext('2d');
new Chart(dailyActiveUsersCtx, {
  type: 'line',
  data: {
    labels: apiResponse.dailyActiveUsers.labels,
    datasets: [{
      label: 'Daily Active Users',
      data: apiResponse.dailyActiveUsers.users,
      borderColor: 'blue',
      backgroundColor: 'rgba(0,0,255,0.1)',
      fill: true
    }]
  },
  options: {
    responsive: true,
    indexAxis: 'x',  // Display the chart horizontally
    plugins: {legend: {position: 'top'}},
    scales: {
      y: {title: {display: true, text: 'Day of the Week'}},
      x: {title: {display: true, text: 'Number of Users'}}
    }
  }
});

// Borrowed/Requested Books Chart
const borrowedBooksCtx =
    document.getElementById('borrowedBooksChart').getContext('2d');
new Chart(borrowedBooksCtx, {
  type: 'bar',
  data: {
    labels: apiResponse.borrowedBooks.labels,
    datasets: [{
      label: 'Users',
      data: apiResponse.borrowedBooks.users,
      backgroundColor: '#003459',
      barThickness: 13,  // Adjust the bar thickness to make it thinner
    }]
  },
  options: {
    responsive: true,
    plugins: {legend: {position: 'top'}},
    scales: {
      x: {title: {display: true, text: 'Day of the Week'}},
      y: {title: {display: true, text: 'Number of Books Borrowed'}}
    }
  }
});

// Accession Level Chart with 12 Months
const accessionLevelCtx =
    document.getElementById('accessionLevelChart').getContext('2d');
new Chart(accessionLevelCtx, {
  type: 'line',
  data: {
    labels: apiResponse.accessionLevel.labels,
    datasets: [
      {
        label: 'Last Month',
        data: apiResponse.accessionLevel.lastMonth,
        borderColor: 'blue',
        backgroundColor: 'rgba(0,0,255,0.1)',
        tension: 0.4,
        fill: true
      },
      {
        label: 'This Month',
        data: apiResponse.accessionLevel.thisMonth,
        borderColor: 'orange',
        backgroundColor: 'rgba(255,165,0,0.1)',
        tension: 0.4,
        fill: true
      }
    ]
  },
  options: {
    responsive: true,
    plugins: {legend: {position: 'top'}},
    scales: {
      x: {title: {display: true, text: 'Month'}},
      y: {title: {display: true, text: 'Number of Books'}}
    }
  }
});