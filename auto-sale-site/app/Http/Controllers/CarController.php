<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Car;

use App\Models\Favourite;

use Illuminate\Validation\Rules\File;

class CarController extends Controller
{
    //GET
    function display(){

        $cars = Car::all();

        return response()->json([
            'cars'=>$cars
        ]);
    }
    function pinpoint($cars_id){

        $car = Car::find($cars_id);

        return response()->json([
            'car'=>$car
        ]);
    }
    function search($search){

   
        $cars = Car::where('make',$search);

        return response()->json([
            'cars'=>$cars
        ]);
    }
//POST
    function addCar(Request $request ){
          $request->validate([
            'description'=> 'required',
            'make'=> 'required',
            'model'=> 'required',
            'colour'=> 'required',
            'year'=> 'required',
            'transmission'=> 'required',
            'car_type'=> 'required',
            'price'=> 'required',
            'photo' =>['required',File::types(['png','jpg','webp'])->min(180)->max(1080)],
            'user_id'=> 'required'        ]);
       
   
        $base = new Car();
        $base->description= $request ->input('description');
        $base->make= $request ->input('make');
        $base->model= $request ->input('model');
        $base->colour= $request ->input('colour');
        $base->year= $request ->input('year');
        $base->transmission= $request ->input('transmission');
        $base->car_type= $request ->input('car_type');
        $base->price= $request ->input('price');
        $base->photo= $request ->photo-> storeAs('images',$request->photo->getClientOriginalName());
        $base->user_id= $request ->input('user_id');
        $base->save();
        return response()->json([
            'message'=>"Car has been created sucessfully",
            'cars'=>$base
        ],201);
    }
    
    function setFav(Request $request ){
        $request->validate([
          'car_id'=> 'required',
          'user_id'=> 'required'        ]);
 
      $base = new Favourite();
      $base->car_id= $request ->input('car_id');
      $base->user_id= $request ->input('user_id');
      $base->save();
      return response()->json([
          'message'=>"Favorite Car has been set",
          'favorite'=>$base
      ],201);
  }
}
