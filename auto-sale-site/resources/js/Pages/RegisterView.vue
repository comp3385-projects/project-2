<template>
    <div class="container">
        <h1 class="font-weight-light">Register a new account</h1>
        <form class="" @submit.prevent="handleFormSubmission">
            <div class="row">
                <div class="form-group col">
                    <label class="col-sm-2 col-form-label" for="username">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="username" v-model="username" required>
                    </div>
                </div>
                <div class="form-group col">
                    <label class="col-sm-2 col-form-label" for="password">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" v-model="password" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col">
                    <label class="col-sm-2 col-form-label" for="fullName">Full Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="fullName" v-model="fullName" required>
                    </div>
                </div>
                <div class="form-group col">
                    <label class="col-sm-2 col-form-label" for="email">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" v-model="email" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-form-label" for="location">Location</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="location" v-model="location" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-form-label" for="description">Description</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="description" v-model="description" required></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-form-label" for="profilePhoto">Profile Photo</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control-file form-control" id="profilePhoto"
                        @change="setProfilePhoto">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <button class="btn btn-primary" type="submit">Register</button>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    methods: {
        handleFormSubmission() {
            // TODO: Handle form submission
        }
    }
}
</script>
