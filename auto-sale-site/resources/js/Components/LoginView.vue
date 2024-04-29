<script setup>

function Login(){
let Form = document.getElementById('Form');
let form_data = new FormData(Form);

fetch("/api/v1/auth/login", {
 method: 'POST',
 body: form_data,
 headers: {
    'Authorization': `Bearer your-jwt-access-token`,
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
<template>

        <h1>Login to your account</h1>
        <form @submit.prevent='Login' id= 'Form'>
            <div class="form-group">
                <label class="form-label" for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label class="form-label" for="password">Password</label>
                <input type="text" name="password" id="password" class="form-control">
            </div>
            <button class="btn btn-primary" type="submit">Login</button>
        </form>

</template>