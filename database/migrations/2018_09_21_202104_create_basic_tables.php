<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasicTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->increments('id');
            $table->string('file');
            $table->string('type');
            $table->integer('fk_user_id');
            $table->timestamps();
        });
        
        Schema::create('cms_events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('fk_file_id');
            $table->text('content');
            $table->date('date');
            $table->integer('fk_user_id')->nullable();
            $table->timestamps();
        });
    
    
        Schema::create('cms_evaluations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            //Si un fichier est attaché a l'évaluation
            $table->integer('fk_file_id');
            $table->text('content');
            $table->integer('note');
            $table->integer('fk_user_id')->nullable();
            $table->timestamps();
        });
        
        Schema::table('users', function (Blueprint $table) {
            $table->string('country')->nullable();
            $table->integer('age')->nullable();
        });
        
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
        Schema::dropIfExists('cms_events');
        Schema::dropIfExists('cms_evaluations');
    }
}
