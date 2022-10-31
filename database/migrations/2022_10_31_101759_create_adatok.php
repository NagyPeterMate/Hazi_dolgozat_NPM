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
        Schema::create('adatok', function (Blueprint $table) {
            $table->id("a_id");
            $table->string("vezeteknev", 150);
            $table->string("keresztnev", 150);
            $table->date("szul_ev");
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adatok');
    }
};
