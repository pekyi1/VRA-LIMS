// Simulated API Response Data
const apiResponse = {
  accessionLevel: {
    labels: [
      'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct',
      'Nov', 'Dec'
    ],
    lastMonth: [10, 20, 15, 25, 30, 40, 35, 45, 30, 20, 25, 30],
    thisMonth: [5, 15, 10, 20, 25, 30, 40, 35, 20, 15, 10, 25]
  }
};

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
        tension: 0.5,
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