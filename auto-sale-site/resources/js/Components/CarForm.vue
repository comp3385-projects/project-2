<script setup>

function saveMovie(){
let Form = document.getElementById('Form');
let form_data = new FormData(Form);

fetch("/api/v1/movie", {
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

<form @submit.prevent= 'saveMovie' id = 'Form' enctype="multipart/form-data">
<div class="form-group mb-3">
<label for="description" class="form-label">Description</label>
<input type="text" name="description" class="form-control" />
<label for="make" class="form-label">Car Make</label>
<input type="text" name="make" class="form-control" />
<label for="model" class="form-label">Car Model</label>
<input type="text" name="model" class="form-control" />
<label for="car_type" class="form-label">Car Type</label>
<input type="text" name="car_type" class="form-control" />
<label for="colour" class="form-label">Colour</label>
<input type="text" name="colour" class="form-control" />
<label for="year" class="form-label">Year</label>
<input type="text" name="year" class="form-control" />
<label for="transmission" class="form-label">transmission</label>
<input type="text" name="transmission" class="form-control" />
<label for="car_type" class="form-label">Price</label>
<input type="text" name="price" class="form-control" />
<label for="price" class="form-label">Colour</label>
<input type="text" name="colour" class="form-control" />
<label for='photo'>Photo</label><br>        
<input type="file" id="photo" name="photo" accept ="image/*"><br>
<button  class="btn btn-Primary" type="submit">Submit</button>

</div>

</form>

</template>