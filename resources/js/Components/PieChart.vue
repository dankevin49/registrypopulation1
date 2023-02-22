<template>
    <Pie :data="data" :options="options" />
  </template>
  
  <script>
  import { Chart as ChartJS, ArcElement, Tooltip, Legend } from 'chart.js'
  import { Pie } from 'vue-chartjs'
  
  ChartJS.register(ArcElement, Tooltip, Legend)
  
  export default {
    name: 'App',
    components: {
      Pie
    },
    data() {
      return{
        data: {
  labels: ['Male', 'Female', 'LGBTQIA+'],
  datasets: [
    {
      backgroundColor: ['#38b52480', '#ff2e7167', '#cccccc'],
      data: [32000, 35000, 13000]
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