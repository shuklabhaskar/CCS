<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class QrFareInventory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fare_inventory', function (Blueprint $table) {
            $table -> id();
            $table -> integer('fare_inventory_id');
            $table -> integer('fare_table_id');
            $table -> string('name');
            $table -> string('description');
            $table -> double('fare_version');
            $table -> integer('pass_id');
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
