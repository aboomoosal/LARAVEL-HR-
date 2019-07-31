<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('photo')->unsigned();
            $table->string('code');
            $table->string('name');
            $table->tinyInteger('status');
            $table->tinyInteger('gender');
            $table->date('date_of_birth');
            $table->date('date_of_joining');
            $table->string('number');
            $table->string('qualification');
            $table->string('emergency_number');
            $table->string('current_address');
            $table->string('permanent_address');
            $table->tinyInteger('offer_acceptance');
            $table->string('probation_period');
            $table->date('date_of_confirmation');
            $table->string('department');
            $table->string('salary');
            $table->string('account_number');
            $table->string('bank_name');
            $table->string('ID_number');
            $table->date('date_of_resignation');
            $table->string('notice_period');
            $table->date('last_working_day');
            $table->integer('user_id')->unsigned();
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
        Schema::dropIfExists('emps');
    }
}
