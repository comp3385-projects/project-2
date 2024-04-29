<script>
import Header from "../Components/Header.vue";
import Footer from "../Components/Footer.vue";
export default {
    name: "UserLayout"
}
</script>

<template>
    <Header />
    <div class="d-flex grow-1 justify-content-center">
        <router-view />
    </div>
    <Footer />
</template>
