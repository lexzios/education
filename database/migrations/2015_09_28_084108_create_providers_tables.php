<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvidersTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->increments('id_provider');
			$table->string('name')->default('');
			$table->string('email')->default('');
			$table->string('phone')->default('');
			$table->string('address')->default('');
			$table->string('is_active')->default('');
            $table->timestamps('created_at');
			$table->timestamps('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('providers');
    }
}
