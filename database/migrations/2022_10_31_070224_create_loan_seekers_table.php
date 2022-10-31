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
        Schema::create('loan_seekers', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('email',100);
            $table->string('image')->nullable();
            $table->string('status',3);
            $table->string('contact',15);
            $table->text('address')->nullable();
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
        Schema::dropIfExists('loan_seekers');
    }
};
