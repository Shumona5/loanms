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
        Schema::create('loan_apply', function (Blueprint $table) {
            $table->id();
            $table->string('user_id',50);
            $table->string('loan_id',50);
            $table->string('bank_id',50);
            $table->string('status',3);
            $table->string('duration',30);
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
        Schema::dropIfExists('loan_apply');
    }
};
