<template>
    <Line :data="data" :options="options" />
  </template>
  
  <script lang="ts">
  import {
    Chart as ChartJS,
    CategoryScale,
    LinearScale,
    PointElement,
    LineElement,
    Title,
    Tooltip,
    Legend
  } from 'chart.js'
  import { Line } from 'vue-chartjs'
  
  ChartJS.register(
    CategoryScale,
    LinearScale,
    PointElement,
    LineElement,
    Title,
    Tooltip,
    Legend
  )
  
  export default {
    name: 'App',
    components: {
      Line
    },
    data() {
      return {
        data: {
  labels: ['No Education', 'Pre-School', 'Elementary Level;', 'Elementary Graduate', 'High School Level', 'Junior High School', 'Junior HS Graduate', 'Senior High School', 'SH Graduate', 'Vocational/Tech', 'College Level', 'College Graduate', 'Post-Graduate'],
  datasets: [
    {
      label: 'Population Size',
      backgroundColor: '#f87979',
      data: [1700, 1800, 1400, 1030, 1390, 1800, 1400, 900, 1300, 700, 1700, 3300, 340]
    }
  ]
},

options: {
  responsive: true,
  maintainAspectRatio: true
}     
}
    }
  }
  </script>
  