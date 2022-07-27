<?php
require_once("Goods.php");

class Clothes extends Goods{
  public static function forup($table){
    parent::forup($table);
    $table->string("size");
    $table->string("textile");
    $table->string("color");
  }
};
