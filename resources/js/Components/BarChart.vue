<script setup>
import { Bar } from 'vue-chartjs'
</script>

<template>
  <Bar
    id="my-chart-id"
    :options="chartOptions"
    :data="chartData"
  />
</template>

<script>
import { Bar } from 'vue-chartjs'
import { Chart as ChartJS, Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale } from 'chart.js'

ChartJS.register(Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale)

export default {
  name: 'BarChart',
  components: { Bar },
  data() {
    return {
      chartData: {
        labels: [ 'Maypangdan', 'Tabunan', 'Sta. Fe', 'San Saturnino', 'Bugas' ],
        datasets: [{
        label: 'Population Size',
        backgroundColor: ['#ff2e7167'],
        data: [5400, 4700, 3600, 2900, 2600] } ],
      },
      chartOptions: {
        responsive: true,
      }
    }
  }
}
</script>
