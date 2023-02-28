<template>
  <div class="container">
      {{ count }}
    </div>
</template>

<script>
export default {
  data() {
    return {
      count: 0
    };
  },
  mounted() {
    axios.get('/api/registry/count').then(response => {
      this.count = response.data.count;
    });
  }
}
</script>

<style>
.container {
  display: flex;
  justify-content: center;
  align-items: flex-end;
  height: 50px; /* set the height of the container */
  color: #38b52480;
  font-size: 25px;
  font-family: 'Poppins';
  font-weight: 700;
}
</style>
