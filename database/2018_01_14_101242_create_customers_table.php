<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('eik', 15)->nullable();
            $table->string('bulstad', 15)->nullable();
            $table->string('name', 30)->nullable();
            $table->string('first_name', 30)->nullable();
            $table->string('second_name', 30)->nullable();
            $table->string('family_name', 30)->nullable();
            $table->string('name_en', 30)->nullable();
            $table->string('first_name_en', 30)->nullable();
            $table->string('second_name_en', 30)->nullable();
            $table->string('family_name_en', 30)->nullable();
            $table->string('email', 30)->unique()->nullable();
            $table->string('phone', 20)->nullable();
            // $table->integer('address_id')->unsigned();
            // $table->foreign('address_id')->references('id')->on('addresses');
            $table->integer('user_id')->unsigned();

    $table->foreign('user_id')->references('id')->on('users');
            $table->string('mol', 30)->nullable();
            $table->timestamps();
            $table->softDeletes()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
