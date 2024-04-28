<template>
    <div class="container">
        <h1>Register</h1>
        <form class="form" @submit.prevent="handleRegister">
            <div class="row">
                <div class="form-group col">
                    <label class="form-label" for="username">Username</label>
                    <input v-model="username" v-dilate:username type="text" id="username" class="form-control"
                        placeholder="Username">
                    <error-box v-if="isInvalid('username')" :errors="errors.username" />
                </div>
                <div class="form-group col">
                    <label class="form-label" for="password">Password</label>
                    <input v-model="password" v-dilate:password type="password" id="password" class="form-control"
                        placeholder="Password">
                    <error-box v-if="isInvalid('password')" :errors="errors.password" />
                </div>
            </div>
            <div class="row">
                <div class="form-group col">
                    <label class="form-label" for="fullname">Fullname</label>
                    <input v-model="fullname" v-dilate:fullname type="text" id="fullname" class="form-control"
                        placeholder="Fullname">
                    <error-box v-if="isInvalid('fullname')" :errors="errors.fullname" />
                </div>
                <div class="form-group col">
                    <label class="form-label" for="email">Email</label>
                    <input v-model="email" v-dilate:email type="email" id="email" class="form-control"
                        placeholder="Email">
                    <error-box v-if="isInvalid('email')" :errors="errors.email" />
                </div>
            </div>
            <div class="form-group">
                <label class="form-label" for="location">Location</label>
                <input v-model="location" v-dilate:location type="text" id="location" class="form-control"
                    placeholder="Location">
                <error-box v-if="isInvalid('location')" :errors="errors.location" />
            </div>
            <div class="form-group">
                <label class="form-label" for="biography">Biography/Description</label>
                <textarea v-model="biography" v-dilate:biography class="form-control" id="biography"
                    rows="3"></textarea>
                <error-box v-if="isInvalid('biography')" :errors="errors.biography" />
            </div>
            <div class="form-group">
                <label class="form-label" for="profile_photo">Profile Photo</label>
                <input type="file" id="profile_photo" class="form-control-file" @change="onFileChange">
                <img :src="profile_photo_url" width="100" v-if="profile_photo_url" />
                <error-box v-if="isInvalid('profile_photo')" :errors="errors.profile_photo" />
            </div>
            <button class="btn btn-primary" type="submit">Register</button>
        </form>
    </div>
</template>