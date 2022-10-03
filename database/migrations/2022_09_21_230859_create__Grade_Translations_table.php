<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Grade_Translations', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('Grade_id')->unsigned();
            $table->string('locale')->index();
            $table->string('Name');
            
            $table->timestamps();
        
            $table->unique(['Grade_id', 'locale']);
            $table->foreign('Grade_id')->references('id')->on('Grades')->onDelete('cascade');
        });

       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Grade_Translations');
    }
};
