<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMissingpeoplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('missingpeoples', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name_of_Complaintant');
            $table->integer('Aadhar_Number');
            $table->integer('Mobile_Number');
            $table->mediumText('Address');
            $table->string('Name_of_Lost_person');
            $table->integer('Age');
            $table->string('Gender');
            $table->mediumText('Description');
            $table->mediumText('Last location');
            $table->string('Lastlocation')->nullable();
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
        Schema::dropIfExists('missingpeoples');
    }
}
