<template>
  <div>
    <select class="custom-dropdown" v-model="selectedOption" @change="searchWord">
      <option value="">--Select Barangay--</option>
      <option v-for="barangay in options" :key="barangay" :value="barangay">
        {{ barangay }}
      </option>
    </select>
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
        selectedOption: ''
      }
    },
    methods: {
      searchWord() {
  if (this.selectedOption) {
    this.$inertia.get(route('search', { barangay: this.selectedOption }))
  }
}
    }
  }
  </script>
  <style>
.custom-dropdown {
  width: 80% !important;
}
</style>
  
  