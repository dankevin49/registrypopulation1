<script setup>
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
<main>
    <div class="flex flex-col sm:justify-top items-center pt-6 sm:pt-120">
        <div id="logo" class="w-80">
          <a href="/"><img src="images/bitmap2.png"></a>
    </div>

        <div
            class="w-full h-full sm:max-w-md mt-4 px-4 py-4 bg-gray-100 shadow-md overflow-hidden sm:rounded-lg"
        >
            <slot />
        </div>
    </div>
</main>
</template>

<style lang="css">
main{
    background-image: linear-gradient(#38b52480 0.14%, rgba(255, 46, 113, 0.405) 46.77%, rgba(56, 181, 36, 0.5) 92.2%),url(images/Borongan-cityhall.png);
    background-position: center;
    background-size: cover;
    position: relative;
    width: 100%;
    min-height: 100vh;
    }   
</style>
<script>
export default {
  data() {
    return {
      uniqueKey: Date.now()
    };
  }
};
</script>