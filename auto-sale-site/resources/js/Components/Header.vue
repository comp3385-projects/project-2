<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">United Auto Sales</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <RouterLink class="nav-link" :class="{ active: $route.path === '/' }" to="/">Home</RouterLink>
                    </li>
                    <li class="nav-item">
                        <RouterLink class="nav-link" :class="{ active: $route.path === '/about' }" to="/about">About</RouterLink>
                    </li>
                    <li class="nav-item">
                        <RouterLink class="nav-link" :class="{ active: $route.path === '/register' }" to="/register">Register</RouterLink>
                    </li>
                    <li class="nav-item">
                        <RouterLink class="nav-link" :class="{ active: $route.path === '/login' }" to="/login">Login</RouterLink>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>