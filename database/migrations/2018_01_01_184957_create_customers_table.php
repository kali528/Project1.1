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
            $table->string('eik', 20);
            $table->string('name', 30);
            $table->string('first_name', 30);
            $table->string('second_name', 30);
            $table->string('family_name', 30);
            $table->string('name_en', 30);
            $table->string('first_name_en', 30);
            $table->string('second_name_en', 30);
            $table->string('family_name_en', 30);
            $table->string('email', 30)->unique()->nullable();
            $table->string('phone', 20)->nullable();
            $table->integer('address_id')->references('id')->on('addresses');
            $table->timestamps();
            $table->softDeletes();
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
