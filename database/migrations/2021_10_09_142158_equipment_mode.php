<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EquipmentMode extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('equipment_mode', function (Blueprint $table) {
            $table->id();
            $table->integer('eq_mode_id');
            $table->integer('eq_type_id');
            $table->string('eq_mode_name');
            $table->string('description');
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
