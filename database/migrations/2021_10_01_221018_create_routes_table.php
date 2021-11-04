<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('departure_city_id')->constrained('cities')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('arrival_city_id')->constrained('cities')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedSmallInteger('distance')->default(0);
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->boolean('deleted')->default(false)->nullable();
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
        Schema::dropIfExists('routes');
    }
}
