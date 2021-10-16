<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StationInventory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('station_inventory', function (Blueprint $table){
            $table->id();
            $table->integer('station_id');
            $table->string('station_name');
            $table->text('description');
            $table->integer('company_id');
            $table->boolean('status');
            $table->integer('line_id');
            $table->string('stn_short_name');
            $table->string('stn_national_lang');
            $table->string('stn_regional_lang');
            $table->integer('cord_x');
            $table->integer('cord_y');
            $table->timestamp('start_date');
            $table->dateTime('end_date')->nullable();
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
