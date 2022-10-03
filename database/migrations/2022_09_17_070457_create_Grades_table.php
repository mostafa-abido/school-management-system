<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration {

	public function up()
	{
		Schema::create('Grades', function(Blueprint $table) {
			$table->increments('id');
			$table->text('Notes')->nullable();
			$table->timestamps();
			
		});
	}

	public function down()
	{
		Schema::drop('Grades');
	}
}