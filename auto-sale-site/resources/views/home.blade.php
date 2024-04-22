@extends('layouts.main')

@section('content')
    <div class="container row">
        <div class="col mx-auto text-center p-4 w-1/2 bg-gray-100 rounded shadow mb-4 ">
            <div class="justify-content-center align-items-center"></div>
            <h1 class="text-2xl">Buy and Sell Cars Online</h1>
            <p class="text-gray-600">United Auto Sales provides the fastest,easiest and most user friendly way to buy or
                sell cars online. Find a Great Price on the Vehicle you Want</p>
            <div class="flex justify-between mt-4">
                <button class="w-full">Register</button>
                <button class="w-full">Login</button>
            </div>
        </div>
        <div class="col">
            <img src="{{ asset('images/pexels-mikebirdy-170811.jpg') }}" alt="">
        </div>
    </div>
@endsection
