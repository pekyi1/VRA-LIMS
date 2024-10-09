// JavaScript code for Chart.js
const ctx = document.getElementById('donutChart').getContext('2d');

// Custom Plugin to Add Styled Text in Center of Doughnut Chart
const centerText = {
  id: 'centerText',
  afterDatasetsDraw(chart) {
    const {ctx, width, height} = chart;
    ctx.save();

    // Text Styling
    const valueText = '200';
    const labelText = 'Members';

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
      'Male', 'Female'
    ],
    datasets: [{
      label: 'Number Of Times Borrowed',
      data: [28, 12],
      backgroundColor: ['#1E3A8A', '#3B82F6'],
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


// Configuration for the first chart
const dailyCtx =
    document.getElementById('dailyActiveUsersChart').getContext('2d');
const dailyActiveUsersChart = new Chart(dailyCtx, {
  type: 'line',
  data: {
    labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri'],
    datasets: [{
      label: 'Loyal Customers',
      data: [20, 15, 25, 40, 35],
      borderColor: '#202045',
      backgroundColor: 'rgba(32, 32, 69, 0.1)',
      fill: true,
      tension: 0.4,
      pointBackgroundColor: '#202045',
      pointBorderColor: '#202045',
      pointRadius: 6,
      pointHoverRadius: 8,
      pointStyle: 'circle',
    }]
  },
  options: {
    responsive: true,
    plugins: {
      legend: {
        display: true,
        position: 'bottom',
        labels:
            {usePointStyle: true, pointStyle: 'rectRounded', font: {size: 14}}
      },
      tooltip: {
        enabled: true,
      },
    },
    scales: {
      x: {
        title: {display: false},
        grid: {
          display: false,
        },
      },
      y: {
        ticks: {
          display: false,
        },
        grid: {
          drawBorder: false,
        },
      }
    }
  }
});

// Configuration for the second chart (Identical to the first)
const inactiveCtx =
    document.getElementById('inactiveUsersChart').getContext('2d');
const inactiveUsersChart = new Chart(inactiveCtx, {
  type: 'line',
  data: {
    labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri'],
    datasets: [{
      label: 'Loyal Customers',
      data: [20, 15, 25, 40, 35],
      borderColor: '#202045',
      backgroundColor: 'rgba(32, 32, 69, 0.1)',
      fill: true,
      tension: 0.4,
      pointBackgroundColor: '#202045',
      pointBorderColor: '#202045',
      pointRadius: 6,
      pointHoverRadius: 8,
      pointStyle: 'circle',
    }]
  },
  options: {
    responsive: true,
    plugins: {
      legend: {
        display: true,
        position: 'bottom',
        labels:
            {usePointStyle: true, pointStyle: 'rectRounded', font: {size: 14}}
      },
      tooltip: {
        enabled: true,
      },
    },
    scales: {
      x: {
        title: {display: false},
        grid: {
          display: false,
        },
      },
      y: {
        ticks: {
          display: false,
        },
        grid: {
          drawBorder: false,
        },
      }
    }
  }
});

// Adding a plugin to draw a vertical line at the fourth data point for both
// charts
Chart.plugins.register({
  afterDatasetsDraw: function(chart) {
    const ctx = chart.ctx;
    const activeIndex = 3;  // Index of the data point to draw the line
    if (chart.tooltip._active && chart.tooltip._active.length) {
      const activePoint = chart.tooltip._active[0];
      const x = chart.getDatasetMeta(0).data[activeIndex].x;
      const topY = chart.scales.y.top;
      const bottomY = chart.scales.y.bottom;
      ctx.save();
      ctx.beginPath();
      ctx.moveTo(x, topY);
      ctx.lineTo(x, bottomY);
      ctx.lineWidth = 2;
      ctx.setLineDash([5, 5]);  // Dashed line effect
      ctx.strokeStyle = '#e64a19';
      ctx.stroke();
      ctx.restore();
    }
  }
});
