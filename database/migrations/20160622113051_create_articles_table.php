<?php

use Electro\Plugins\IlluminateDatabase\Migration;
use Electro\Plugins\IlluminateDatabase\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreateArticlesTable extends Migration {

	public function up()
	{
		Schema::create('articles', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 100);
			$table->date('date');
			$table->datetime('creation_date');
			$table->text('lead')->nullable();
			$table->text('text')->nullable();
			$table->string('source', 100)->nullable();
			$table->string('image', 100)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('articles');
	}
}
