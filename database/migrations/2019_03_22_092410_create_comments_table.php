<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentTable extends Migration
{
  public function up()
    {
       Schema::create('comments', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('post_id');
            $table->string('description');
            $table->timestamps();
           
          /*$table->foreign('name_user')->references('name')->on('users')->onDelete('cascade');
           
          $table->foreign('id_post')->references('id')->on('posts')->onDelete('cascade');
       // });*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('comments');
    }
}
