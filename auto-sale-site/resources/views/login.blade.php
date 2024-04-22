@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="mb-3">
            <label for="userName" class="form-label">Username</label>
            <input type="text" class="form-control" id="userName" placeholder="Enter username here">
          </div>
          <div class="mb-3">
            <label for="userPassword" class="form-label">Password</label>
            <input type="text" class="form-control" id="userPassword" placeholder="Enter password here">
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
    </div>
@endsection