@extends('layouts.main')
@section('content')
    <div class="container">
        <h1>Register New User</h1>
        <form class="form" action="" method="post">
            @csrf
            <div class="form-group">
                <label for="userName">UserName</label>
                <input type="text" class="form-control" id="userName" name="userName">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="userFullName" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="userFullName" name="userFullName">
            </div>
            <div class="form-group">
                <label for="userEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="userEmail" name="userEmail">
            </div>
            <div class="form-group">
                <label for="userLocation">Location</label>
                <input type="text" class="form-control" id="userLocation" name="userLocation">
            </div>
            <div class="form-group">
                <label for="userBiography">Biography</label>
                <textarea class="form-control" id="userBiography" name="userBiography"></textarea>
            </div>
            <div class="form-group">
                <label for="userImage">Upload Photo</label>
                <input type="file" class="form-control" id="userImage" name="userImage">
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
@endsection
