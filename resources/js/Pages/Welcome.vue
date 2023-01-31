<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>
<template>
<main>
    <div class="relative flex items-top justify-center min-h-screen">
        <div v-if="canLogin" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                <Link
                    v-if="$page.props.auth.user"
                    :href="route('dashboard')"
                    class="text-sm text-white-700 text-white-500 underline"
                    >Dashboard</Link
                >

                <template v-else>
                    <Link :href="route('login')" class="text-sm text-gray-0">Log in</Link>

                    <Link
                        v-if="canRegister"
                        :href="route('register')"
                        class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"
                        >Register</Link
                    >
                </template>
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