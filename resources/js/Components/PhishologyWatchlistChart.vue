<template>
    <div class="bg-gray-800 p-4 rounded-md shadow-md">
      <h3 class="text-xl font-bold mb-4">Watchlist Trends</h3>
      <canvas id="watchlistChart"></canvas>
    </div>
  </template>
  
  <script>
  import { onMounted } from 'vue';
  import { Chart } from 'chart.js';
  
  export default {
    setup() {
      onMounted(() => {
        const ctx = document.getElementById('watchlistChart').getContext('2d');
        new Chart(ctx, {
          type: 'line',
          data: {
            labels: ['May 5', 'May 6', 'May 7', 'May 8', 'May 9', 'May 10', 'May 11'],
            datasets: [
              {
                label: 'Warnings',
                data: [100, 120, 150, 180, 170, 160, 150],
                borderColor: 'rgba(16, 185, 129, 0.7)',
                fill: false,
              },
              {
                label: 'Allowed Messages',
                data: [90, 100, 140, 130, 150, 140, 130],
                borderColor: 'rgba(59, 130, 246, 0.7)',
                fill: false,
              },
            ],
          },
          options: {
            responsive: true, // this is problem
            maintainAspectRatio: true,
          },
        });
      });
    },
  };
  </script>
  
  <style scoped>

  </style>
  