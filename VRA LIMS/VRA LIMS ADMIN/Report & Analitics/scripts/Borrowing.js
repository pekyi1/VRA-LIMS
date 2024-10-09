// Simulated API Response Data
const apiResponse = {
  borrowedBooks: {
    labels: [
      'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday',
      'Sunday'
    ],
    users: [30, 20, 25, 35, 40, 10, 50],
    borderWidth: 1
  }
};


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

// JavaScript code for Chart.js
const ctx = document.getElementById('donutChart').getContext('2d');

// Custom Plugin to Add Styled Text in Center of Doughnut Chart
const centerText = {
  id: 'centerText',
  afterDatasetsDraw(chart) {
    const {ctx, width, height} = chart;
    ctx.save();

    // Text Styling
    const valueText = '46';
    const labelText = 'Books';

    // Set up for "46"
    ctx.font = 'bold 36px Arial';
    ctx.fillStyle = '#1E3A8A';
    ctx.textAlign = 'center';
    ctx.textBaseline = 'middle';
    ctx.fillText(valueText, width / 2, height / 2 - 10);

    // Set up for "Books"
    ctx.font = '16px Arial';
    ctx.fillStyle = '#6B7280';  // Light gray color
    ctx.fillText(labelText, width / 2, height / 2 + 20);

    ctx.restore();
  }
};

// Donut Chart Data and Configuration
const donutChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: [
      'Rich daddy, poor Daddy', 'System Analysis for beginners',
      'Programming for beginners'
    ],
    datasets: [{
      label: 'Number Of Times Borrowed',
      data: [28, 12, 6],
      backgroundColor: ['#1E3A8A', '#3B82F6', '#10B981'],
      hoverOffset: 4
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    cutout: '70%',  // This creates the donut hole in the center
    plugins: {
      legend: {
        display: false  // Hide the legend
      }
    }
  },
  plugins: [centerText]  // Apply the center text plugin
});

