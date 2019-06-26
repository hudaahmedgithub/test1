<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUlrToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {  Schema::create('posts', function (Blueprint $table)
     {
         $table->file('url');
     });
    }
                      
   
    public function down()
    {
        Schema::create('posts', function (Blueprint $table)
     {
         
     });
    }
    }
