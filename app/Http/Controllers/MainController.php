<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clothe;
use App\Models\Unv;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Goods;
use App\Models\User;

class MainController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // function index(){
    //
    //   $objects = Clothe::all();
    //   return view('pages.index',[
    //     'objects' => $objects
    //   ]);
    // }

    function loggedBro(){
      return view('home');
    }

    function edit($category,$id){
        if($category=="clothes"){
          $obj = Clothe::find($id);
        }
        if($category=="users"){
          $obj = User::find($id);
        }
        return view('pages.edit',[
          "obj"=>$obj,
          "category"=>$category,
          "id"=>$id
        ]);
    }

    // function create(Request $request){
    //   $path = $request->file("image")->store("images","public");
    //   return redirect("/");
    // }
    function create($category){
        return view('pages.create',[
          "category"=>$category
        ]);
    }

    function description($category,$id){
      if($category=="clothes"){
        $obj = Clothe::find($id);
      }
        return view('pages.description',[
          "obj"=>$obj,
          "category"=>$category,
          "id"=>$id,
        ]);
    }

    function createScript(Request $request){

      $clothe = new Clothe(
        $request["name"],
        $request["description"],
        $request["cost"],
        $request["in_stock"],
        "blahblah",
        $request["size"],
        $request["textile"],
        $request["color"],
      );
      $clothe->save();

      if($request["image"]!=null){
        $imgl = Unv::createImg($request, "clothe", "image", $clothe->id);
      }
      else{
        $imgl = Unv::setDefaultImg("img_default.png", "clothe", $clothe->id);
      }
      Clothe::find($clothe["id"])->update(['imglink' => $imgl]);

      return redirect('/');
    }

    function editScript(Request $request){
      if($request["category"]=="clothes"){
        $clothe = Clothe::find($request["id"]);

        $clothe->edit(
          $request["name"],
          $request["description"],
          $request["cost"],
          $request["in_stock"],
          $request["size"],
          $request["textile"],
          $request["color"],
        );

        $clothe->save();

        if($request["image"]!=null){
          Unv::createImg($request, "clothe", "image", $clothe["id"]);
        }
      }

      else if($request["category"]=="users"){
        $user = User::find($request["id"]);
        $user->update(
          ['name'=>$request['name'],
          'login'=>$request['login'],
          'email'=>$request['email']]
        );
        $user->save();

      }

      return redirect("/");
    }

    function deleteScript(Request $request){
      $clothe=Clothe::find($request["id"]);
      $name = $clothe['imglink'];
      Unv::delete($name);
      $clothe->delete();
      return redirect("/");
    }

    function profile($category,$id){
        $user = User::find($id);
        return view('pages.profile',[
          "category"=>$category,
          "user"=>$user
        ]);
    }

}
