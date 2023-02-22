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
  labels: ['Islam', 'Roman Catholic', 'Protestant', 'Other Christian Denominations', 'Others'],
  datasets: [
    {
      label: 'Population Size',
      backgroundColor: '#f87979',
      data: [10, 80, 40, 30, 39, 80, 40]
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
  