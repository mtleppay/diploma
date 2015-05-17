<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');			
			$table->string('firstName', 32);
			$table->string('lastName', 32);
			$table->string('thirdName')->nullable();
			$table->string('email', 320);
			$table->string('password', 64);
			$table->integer('role')->nullable();
			$table->string('temaRus')->nullable();
			$table->string('temaKaz')->nullable();
			$table->string('temaEn')->nullable();
			$table->string('rukovoditel')->nullable();
			$table->string('vopros1')->nullable();
			$table->string('vopros2')->nullable();
			$table->string('vopros3')->nullable();
			$table->string('vopros4')->nullable();
			$table->string('vopros5')->nullable();
            $table->string('vopros6')->nullable();
            $table->string('vopros7')->nullable();
			$table->string('ocenka1')->nullable();
            $table->string('ocenka2')->nullable();
            $table->string('ocenka3')->nullable();
            $table->string('ocenka4')->nullable();
            $table->string('ocenka5')->nullable();
            $table->string('ocenka6')->nullable();
            $table->string('ocenka7')->nullable();
            $table->string('ocenkaRukovoditelya')->nullable();
            $table->string('ocenkaTotal')->nullable();
            $table->string('ocenkaZaGosy')->nullable();
			$table->string('minutes')->nullable();
            $table->string('patroNumic')->nullable();
            $table->string('major')->nullable();
            $table->string('date')->nullable();
            $table->string('recendentName')->nullable();
            $table->string('recendentOcenka')->nullable();


		


                        // required for Laravel 4.1.26
                        $table->string('remember_token', 100)->nullable();
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
		Schema::dropIfExists('users');
	}

}
