<script>
import Header from "../Components/Header.vue";
import Footer from "../Components/Footer.vue";
import { RouterView } from "vue-router";
export default {
    name: "PublicLayout"
}
</script>

<template>
    <Header />
    <div class="d-flex grow-1 justify-content-center">
        <component :is="$route.meta.layout" />
        <RouterView />
    </div>
    <Footer />
</template>
