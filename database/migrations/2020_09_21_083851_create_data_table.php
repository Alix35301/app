<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date')->nullable();
            $table->bigInteger('bank_id')->nullable();
            $table->bigInteger('from_currency')->nullable();
            $table->bigInteger('to_currency')->nullable();
            $table->bigInteger('conversion_type')->nullable();
            $table->float('rate')->nullable();
            $table->float('inverse_rate')->nullable();
            $table->timestamps();
            $table->string('username', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data');
    }
}
