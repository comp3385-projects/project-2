<script setup>
import Header from "./Components/Header.vue";
import Footer from "./Components/Footer.vue";
</script>

<template>
    <Header />
    <div class="container my-5">
        <RouterView />
    </div>
    <Footer />
</template>

<style scoped>

</style>