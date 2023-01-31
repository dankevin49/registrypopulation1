<script setup>
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
<main>
    <div class="flex flex-col sm:justify-top items-center pt-6 sm:pt-120">
        <div id="logo" class="w-80">
        <img src="images/bor.png">
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
    background-image: linear-gradient(#37b524d4 0.14%, #e91155da 46.77%, #37b524d4 92.2%);
    background-position: center;
    background-size: cover;
    position: relative;
    width: 100%;
    min-height: 100vh;
    }
</style>