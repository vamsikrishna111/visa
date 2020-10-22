<?php

namespace App\Http\Controllers;
use App\recipes;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function insert(Request $request){
        $food = new recipes;
        $food->title =$request->title;
        $food->instructions =$request->instructions;
        $food->ingredients =$request->ingredients;
        $food->time =$request->time;
        $food->servings =$request->servings;
        $food->nutrition =$request->nutrition;
        $food->food =$request->food;
        $food->save();

        return redirect('select');
    }
    public function select(){
        $users = recipes::all();
          // echo $users;die('hii');
          return view('select',['users'=>$users]);
    }
}
