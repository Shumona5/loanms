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
        Schema::create('apply_now', function (Blueprint $table) {
            $table->id();
            $table->integer('loan_id');
            $table->string('name');
            $table->date('birth_date');
            $table->string('marital_status',10);
            $table->string('email')->unique();
            $table->string('phone_number',20);
            $table->text('address');
            $table->string('living_duration');
            $table->string('company_name');
            $table->string('designation',100);
            $table->string('years_of_experience');
            $table->double('gross_monthly_income');
            $table->string('status')->default('pending');
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
        Schema::dropIfExists('apply_now');
    }
};
