
  
  <script>
  import { onMounted } from 'vue';
  import { Chart } from 'chart.js/auto';
  
  export default {
    setup() {
      onMounted(() => {
        const ctx = document.getElementById('performanceChart').getContext('2d');
        new Chart(ctx, {
          type: 'bar',
          data: {
            labels: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
            datasets: [
              {
                label: 'Processed Messages',
                data: [75, 100, 150, 125, 80, 90, 110],
                backgroundColor: 'rgba(99, 102, 241, 0.7)',
              },
              {
                label: 'Detected Spam',
                data: [30, 50, 80, 70, 30, 60, 75],
                backgroundColor: 'rgba(239, 68, 68, 0.7)',
              },
            ],
          },
          options: {
            responsive: true,
            maintainAspectRatio: true,
          },
        });
      });
    },
  };
  </script>

  <template>
    <div class="bg-gray-800 p-4 rounded-md shadow-md">
      <h3 class="text-xl font-bold mb-4">Performance</h3>
      <canvas id="performanceChart"></canvas>
    </div>
  </template>
  
  <style scoped>

  </style>
  