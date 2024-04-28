<script setup>
import HomeView from "./Pages/HomeView.vue";
import Header from "./Components/Header.vue";
import Footer from "./Components/Footer.vue";

</script>

<template>
    <Header />
    <div class="d-flex grow-1 justify-content-center">
        <RouterView class="w-100 h-100" max-width="100%" max-height="100%"/>
    </div>
    <Footer />
</template>

<style scoped></style>