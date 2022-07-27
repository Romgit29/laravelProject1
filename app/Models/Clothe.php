<?php

namespace App\Models;

require_once("Goods.php");

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Unv;

class Clothe extends Goods
{
    use HasFactory;

    protected $fillable = [
      "imglink"
    ];

    public function __construct($name=null, $description=null, $cost=null, $in_stock=null, $imglink=null, $size=null, $textile=null, $color=null) {
        parent::__construct($name, $description, $cost, $in_stock, $imglink);
        $this->size = $size;
        $this->textile = $textile;
        $this->color = $color;
    }

    public function edit($name="", $description="", $cost="", $in_stock="", $size="", $textile="", $color="")
    {
      parent::edit($name, $description, $cost, $in_stock);
      $this->size = $size;
      $this->textile = $textile;
      $this->color = $color;
    }

    public static function forup($table){
      parent::forup($table);
      $table->string("size");
      $table->string("textile");
      $table->string("color");
    }

    // public function  __destruct(){
    //   Unv::delete($this->imglink);
    // }


}
