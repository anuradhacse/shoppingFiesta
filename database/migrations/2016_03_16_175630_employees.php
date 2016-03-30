<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Employees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('Employee',function(Blueprint $table){
           $table->increments('id');
           $table->string('name');
           $table->string('email')->unique();
           $table->string('contact Number');
           $table->timestamps();
       });
           $faker=Faker\Factory::create();
           $limit=30;

           for($i=1;$i<$limit;++$i){
               DB::table('Employee')->insert([
                   'name'=> $faker->name,
                   'email'=>$faker->unique()->email,
                   'contact Number'=>$faker->phoneNumber,

               ]);
           }





    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Employee');
    }
}
