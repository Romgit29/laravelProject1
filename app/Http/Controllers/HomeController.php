<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clothe;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     function index(){

       $objects = Clothe::all();
       // $clothe = new Clothe;
       // $clothe->name = "Hello!";
       // $clothe->description = Str::random(100);
       // $clothe->cost = rand(0,1000);
       // $clothe["in stock"] = rand(0,1);
       // $clothe["size"] = Str::random(1);
       // $clothe["textile"] = Str::random(10);
       // $clothe["color"] = Str::random(10);
       // $clothe["imglink"] = "img/img.png";
       // $clothe->save();
       return view('pages.index',[
         'objects' => $objects
       ]);
     }

}
