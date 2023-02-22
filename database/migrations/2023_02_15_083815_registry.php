<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registry', function (Blueprint $table) {
            $table->id();
            $table->integer('household_num');
            //$table->integer('build_num');
            $table->string('province');
            $table->string('city');
            $table->string('barangay');
            $table->integer('room_num');
            $table->integer('house_lot_num');
            $table->string('street_nam');
            $table->string('name_res');
            $table->string('house_head');
            $table->integer('household_mem_num');
            $table->integer('num_visit');
            $table->date('date_visit');
            $table->timestamp('time_visit');
            $table->date('date_nextvisit');
            $table->timestamp('time_nextvisit');
            $table->string('name_super');
            $table->string('surname');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('suffix');
            $table->string('relation_household');
            $table->string('sex');
            $table->string('age');
            $table->date('date_birth');
            $table->string('place_birth');
            $table->string('nationality');
            $table->string('marital_status');
            $table->string('religion');
            $table->string('ethnicity');
            $table->string('currently_enrolled');
            $table->string('school_level');
            $table->string('place_school');
            $table->string('monthly_income');
            $table->string('source_income');
            $table->string('status_work');
            $table->string('place_work');
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
};
