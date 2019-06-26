<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  public function up()
    {
       Schema::create('cart', function (Blueprint $table) {
            
            $table->increments('id');
            $table->unsignedInteger('id_parent');
            $table->date('date');
            $table->integer('title');
            $table->integer('result'); 
            $table->integer('description');
            $table->string('user_email');
            $table->string('session_id');
            $table->timestamps();
           
       // $table->foreign('id_parent')
	//->references('id')->on('users')
	//->onDelete('cascade');
       // });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('cart');
    }
}
