<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnonSecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anon_secs', function (Blueprint $table) {
            $table->id();
            $table->string("nickname")->nullable();
            $table->string("title")->nullable();
            $table->text("content")->nullable();
            $table->date("date")->nullable();
            $table->string("tag_identifier")->nullable();   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anon_secs');
    }
}
