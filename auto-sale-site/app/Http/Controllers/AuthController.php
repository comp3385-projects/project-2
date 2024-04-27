<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
   
//POST

function register(Request $request ){
    $request->validate([
      'email'=> 'required|email',
      'password'=> 'required',
      'name'=> 'required',
      'location'=> 'required',
      'biography'=> 'required',

      'photo' =>['required',File::types(['png','jpg','webp'])->min(180)->max(1080)]]);

  $base = new User();
  $base->email= $request ->input('email');
  $base->password= $request ->input('password');
  $base->name= $request ->input('name');
  $base->location= $request ->input('location');
  $base->biography= $request ->input('biography');
  $base->photo= $request ->photo-> storeAs('images',$request->photo->getClientOriginalName());
  $base->save();
  return response()->json([
      'message'=>"User has been registered sucessfully",
      'user'=>$base
  ],201);
}

function login(Request $request)
{
    $credentials = request(['email', 'password']);
    if (! $token = auth()->attempt($credentials)) {
    return response()->json(['error' => 'Unauthorized'], 401);
    }
    
    return response()->json([
    'message' => 'Login Successful!',
    'access_token' => $token,
    ]);
   
}


function logout()
{
    auth()->logout();
    return response()->json(['message' => 'Successfully logged out']);
}

function getdetails($user_id){
    $user = User::find($user_id);

    return response()->json([
        'user'=>$user
    ]);

}

function getfavorites($user_id){
    $favorite = Favorite::where($user_id);

    return response()->json([
        'favorite'=>$favorite
    ]);

}
}
