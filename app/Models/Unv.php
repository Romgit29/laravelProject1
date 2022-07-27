<?php

namespace App\Models;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class Unv{
    public static function createImg($request, $catg, $fieldname, $id){
      $input_file = $request->file($fieldname)->getClientOriginalName();
      $file_ext = pathinfo($input_file, PATHINFO_EXTENSION);
      $filename = $catg."_".$id.".".$file_ext;
      $path = $request->file($fieldname)->storeAs("public/images",  $filename);
      
      return $filename;
    }

    public static function setDefaultImg($defImg, $catg, $id){
      $defImg = 'public/images/'.$defImg;
      $file_ext = pathinfo($defImg, PATHINFO_EXTENSION);
      $filename = $catg."_".$id.".".$file_ext;
      $filepath = 'public/images/'.$filename;
      Storage::copy($defImg, $filepath);
      return $filename;
    }

    public static function delete($name){
      $path = "public/images/".$name;
      if(str_contains($path, "_default") == false){
        if(Storage::exists($path)) {
            Storage::delete($path);
        }
      }
    }
  }
