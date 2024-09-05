<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('childName');
            $table->string('gender');
            $table->string('placeOfBirth');
            $table->date('dateOfBirth');
            $table->string('address');
            $table->string('photo')->nullable();
            $table->string('fatherName');
            $table->string('fatherWork');
            $table->string('fatherPhone');
            $table->string('fatherEmail');
            $table->string('motherName');
            $table->string('motherWork');
            $table->string('motherPhone');
            $table->string('motherEmail');
            $table->timestamps();
        });
    }

        public function down()
        {
            Schema::dropIfExists('students');

        }
    }

