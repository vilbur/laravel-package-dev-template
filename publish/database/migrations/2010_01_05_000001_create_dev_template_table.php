<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('dev_templates', function(Blueprint $table) {
			$table->increments('id');
			$table->string('slug')->nullable();
			$table->string('title',\Config::get('migrations.lenght.title'))->nullable();
			$table->string('summary',\Config::get('migrations.lenght.summary'))->nullable();
			$table->string('description',\Config::get('migrations.lenght.description'))->nullable();
			$table->string('image',	\Config::get('migrations.image'))->nullable();
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
        Schema::drop('dev_templates');
    }
}
