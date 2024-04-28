<template>
    <form action="">
        <div class="row">
            <div class="form-group col">
                <label class="form-label" form="userName">Username</label>
                <input type="text" name="name" id="userName" class="form-control">
            </div>

            <div class="form-group col">
                <label for="userPassword">Password</label>
                <input type="text" name="password" id="userPassword" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="form-group col">
                <label class="form-label" for="userFullName">Fullname</label>
                <input type="text" name="fullname" id="userFullName" class="form-control">
            </div>
            <div class="form-group col">
                <label class="form-label" for="userEmail">Email</label>
                <input type="text" name="email" id="userEmail" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="form-label" for="userLocation">Location</label>
            <input type="text" name="location" id="userLocation" class="form-control">
        </div>
        <div class="form-group">
            <label class="form-label" for="userBiography">Biography</label>
            <textarea name="description" id="userBiography" cols="30" rows="10"
                placeholder="Give us a short biography of yourself">
            </textarea>
        </div>
        <div class="form-group">
            <label class="form-label" for="userProfilePhoto">Upload Photo</label>
            <input type="file" name="profile_photo" id="userProfilePhoto" class="form-control">
        </div>
        <button class="btn btn-primary" type="submit">Register</button>
    </form>
</template>