<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  public function up()
    {
       Schema::create('results', function (Blueprint $table) {
            
            $table->increments('id');
            $table->date('date');
            $table->time('time');
            $table->string('description');
            
           
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
         Schema::dropIfExists('results');
    }
}
