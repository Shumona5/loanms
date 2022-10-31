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
        Schema::create('loan', function (Blueprint $table) {
            $table->id();
            $table->string('title',30);
            $table->string('status',3);
            $table->string('type_id',30);
            $table->text('details',100);
            $table->string('bank_id',50);
            $table->string('loan_amount',50);
            $table->string('number_of_years',40);
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
        Schema::dropIfExists('loan');
    }
};
