<?php
// Inside the migrations-table, the database is given a instruction on how to set up a table with what values.

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('section');
            $table->string('emergency_number');
            $table->string('location');
            $table->string('street');
            $table->string('house_number');
            $table->string('picture');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livings');
    }
}
