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
        Schema::create('profiles', function (Blueprint $table) {
            // $table->id();
            // $table->string('fname')->default('First Name');
            // $table->string('lname')->default('Last Name');
            // $table->string('jobTitle')->default('Job');
            // $table->enum('gender', ['male','female'])->default('male');
            // $table->integer('age')->default('25');
            // $table->bigInteger('phone')->default('0999999999');
            // $table->date('birthdate')->default('2022-01-01');
            // $table->string('country')->default('Syria');
            // $table->string('address')->default('Address');
            // $table->string('about')->default('Description');
            // $table->string('email')->default('Email');
            // $table->integer('pin')->default('0000');
            // $table->string('profile_photo_path', 2048)->nullable();
            // $table->foreignId('user_id')->default('2')->constrained();
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('jobTitle');
            $table->enum('gender', ['male','female'])->default('male');
            $table->integer('age');
            $table->bigInteger('phone');
            $table->date('birthdate');
            $table->string('country');
            $table->string('address');
            $table->string('about');
            $table->string('email');
            $table->integer('pin');
            $table->string('profile_photo_path', 2048)->nullable();
            $table->foreignId('user_id')->constrained();
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
        Schema::dropIfExists('profiles');
    }
};
