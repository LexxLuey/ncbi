<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 220)->nullable();
            $table->string('middle_name', 220)->nullable();
            $table->string('surname', 220)->nullable();
            $table->enum('sex', ['male', 'female'])->nullable();
            $table->enum('age_range', ['Under 20', 'Above 40','20 - 25','26 - 30','31 - 35','36 - 40',])->nullable();
            $table->string('phone_number', 15)->nullable();
            $table->string('email', 220)->nullable();
            $table->enum('marital_status',['single','married','divorced','widowed'])->nullable();
            $table->string('address', 225)->nullable();
            $table->string('photo', 250)->nullable();
            $table->enum('centre',['CFC ABUJA','CFC GBOKO','CFC MAKURDI','CFC SAGAMU','CFC KADUNA'])->nullable();
            $table->boolean('completed_growth_track')->default(false);
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
        Schema::dropIfExists('students');
    }
}
