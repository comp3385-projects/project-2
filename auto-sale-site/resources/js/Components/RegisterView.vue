<template>
    <div class="container">
        <h1 class="font-weight-light">Register a new account</h1>
        <form id="Form" @submit.prevent="Registration">
            <div class="row">
                <div class="form-group col">
                    <label class="col-sm-2 col-form-label" for="email">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" v-model="email" required>
                    </div>
                </div>
                <div class="form-group col">
                    <label class="col-sm-2 col-form-label" for="password">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" v-model="password" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                    <label class="col-sm-2 col-form-label" for="name">Full Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" v-model="name" required>
                    </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-form-label" for="location">Location</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="location" v-model="location" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-form-label" for="biography">Description</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="biography" v-model="biography" required></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-form-label" for="photo">Profile Photo</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control-file form-control" id="photo" accept="image/*">
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

<script setup>

function Registration(){
let Form = document.getElementById('Form');
let form_data = new FormData(Form);

fetch("/api/v1/auth/register", {
 method: 'POST',
 body: form_data,
 headers: {
     'Accept': 'application/json'
 
 }
})
.then(function (response) {
 return response.json();
})
.then(function (data) {
 console.log(data);
})
.catch(function (error){ 
console.log(error);
});
}
</script>
