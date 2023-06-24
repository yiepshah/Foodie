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
        Schema::create('foodpost', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('foodsender');
            $table->string('foodname');
            $table->string('foodprice');
            $table->string('foodimage');
            $table->string('phonenumber');
            $table->foreignId('user_id')->constrained();
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foodpost');
    }
};
