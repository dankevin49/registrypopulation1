<template>
    <div class="hgj">
      Total: {{ count }}
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        count: 0
      }
    },
  
    mounted() {
      this.fetchCount();
    },
  
    methods: {
      async fetchCount() {
        const response = await axios.get('/api/users/count');
  
        this.count = response.data.count;
      }
    }
  };
  </script>
<style>
.hgj{
    color: #38b52480;
    font-size: 25px;
    position: relative;
    left: 35%;

}

</style>