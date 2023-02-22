<template>
    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="optionsMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Options
      </button>
      <div class="dropdown-menu" aria-labelledby="optionsMenu">
        <a class="dropdown-item" href="#" v-for="option in options" :key="option.id" @click="search(option.word)">
          {{ option.word }}
        </a>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        options: [
          { id: 1, word: 'apple' },
          { id: 2, word: 'banana' },
          { id: 3, word: 'cherry' },
        ],
      };
    },
    methods: {
      search(word) {
        // Call the search API with the selected word
        this.$inertia.post('/search', { word: word });
      },
    },
  };
  </script>
  