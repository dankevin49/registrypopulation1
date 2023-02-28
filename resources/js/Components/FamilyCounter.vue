<template>
    <div class="container2">
     {{ count }}
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
}
 </script>
<style>
.container2 {
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