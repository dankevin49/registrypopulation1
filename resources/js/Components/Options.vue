<template>
    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ selectedOption }}
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" v-for="option in options" :key="option.id" @click="selectOption(option)">{{ option.label }}</a>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      options: {
        type: Array,
        required: true
      }
    },
    data() {
      return {
        selectedOption: this.options[0].label
      };
    },
    methods: {
      selectOption(option) {
        this.selectedOption = option.label;
        this.$emit('optionSelected', option);
      }
    }
  }
  </script>
  