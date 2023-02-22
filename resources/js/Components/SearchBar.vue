<template>
    <form @submit.prevent="search">
      <input type="text" v-model="query">
      <button type="submit">Search</button>
    </form>
  </template>
  
  <script>
  export default {
    data() {
      return {
        query: ''
      };
    },
    methods: {
      async search() {
        // Perform API call to retrieve search results
        const results = await this.$inertia.post('/search', { query: this.query });
  
        // Update component data with search results
        this.results = results;
      }
    }
  };
  </script>
  