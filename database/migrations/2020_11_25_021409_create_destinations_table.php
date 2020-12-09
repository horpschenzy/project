<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinations', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string("fname");
            $table->string("lname");
            $table->string("company");
            $table->string("address");
            $table->string("address1");
            $table->string("city");
            $table->string("country");
            $table->string("province");
            $table->string("zip_code");
            $table->string("phone");

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
        Schema::dropIfExists('destinations');
    }
}
