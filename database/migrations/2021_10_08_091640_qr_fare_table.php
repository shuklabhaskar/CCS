<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class QrFareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fare_table', function (Blueprint $table) {
            $table -> id();
            $table -> integer('fare_table_id');
            $table -> integer('source_id');
            $table -> integer('destination_id');
            $table -> double('fare');
            $table -> double('fare_version');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->timestamp('created_date')->default(now());
            $table->timestamp('updated_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
