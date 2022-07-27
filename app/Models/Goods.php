<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    use HasFactory;

    public function __construct($name=null, $description=null, $cost=null, $in_stock=null, $imglink=null) {
        $this->name = $name;
        $this->description = $description;
        $this->cost = $cost;
        $this->in_stock = $in_stock;
        $this->imglink = $imglink;
    }

    public function edit($name="", $description="", $cost="", $in_stock=""){
        $this->name = $name;
        $this->description = $description;
        $this->cost = $cost;
        $this->in_stock = $in_stock;
    }

    public static function forup($table){
      $table->id();
      $table->timestamps();
      $table->string('name');
      $table->string('description');
      $table->double("cost");
      $table->boolean("in_stock");
      $table->string("imglink");
    }



}
