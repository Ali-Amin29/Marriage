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
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->string('phone')->nullable();
            $table->string('password')->nullable();
            $table->string('OfficeName')->nullable();
            $table->string('name')->nullable();
            $table->string('ID Number')->nullable();
            $table->string('OfficeDesc')->nullable();
            $table->string('BankAccountNumber')->nullable();
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
        Schema::dropIfExists('providers');
    }
};