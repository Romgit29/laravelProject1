<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ClothesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for($i=0;$i<10;$i++){
        DB::table('clothes')->insert([
            'name' => Str::random(10),
            'description' => Str::random(100),
            'cost' => rand(0,1000),
            'in_stock' => rand(0,1),
            "size" => Str::random(1),
            "textile" => Str::random(10),
            "color" => Str::random(10),
            "imglink" => "img.png"
        ]);
      }
    }
}

// $table->id();
// $table->timestamps();
// $table->string('name');
// $table->string('desctiption');
// $table->double("cost");
// $table->boolean("in stock");
// $table->string("slug")->uniqe();
// $table->string("size");
// $table->string("textile");
// $table->string("color");
