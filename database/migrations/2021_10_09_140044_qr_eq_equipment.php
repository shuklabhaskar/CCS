<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class QrEqEquipment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qr_eq_equipment', function (Blueprint $table){
            $table->id();
            $table->integer('atek_id');
            $table->integer('equipment_id');
            $table->integer('eq_type_id');
            $table->string('eq_name');
            $table->integer('station_id');
            $table->boolean('status');
            $table->text('description');
            $table->integer('eq_mode_id');
            $table->string('eq_mode_name');
            $table->string('ip_address');
            $table->integer('primary_ssid');
            $table->string('primary_ssid_pwd');
            $table->string('backup_ssid');
            $table->string('backup_ssid_pwd');
            $table->integer('gateway');
            $table->integer('subnetmask');
            $table->integer('cord_x');
            $table->integer('cord_y');
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
     *
     */
    public function down()
    {
        //
    }
}
