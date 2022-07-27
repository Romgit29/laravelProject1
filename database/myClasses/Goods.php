<?php

class Goods{

  public static function forup($table){
    $table->id();
    $table->timestamps();
    $table->string('name');
    $table->string('description');
    $table->double("cost");
    $table->boolean("in stock");
    $table->string("imglink");
  }

};
