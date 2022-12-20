<?php
// Inside the migrations-table, the database is given a instruction on how to set up a table with what values.
// This table connects the contacts and driving-service objects to one another

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DrivingServiceContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driving_service_contact', function (Blueprint $table) {
            $table->primary(['driving_service_id','contact_id']);
            $table->bigInteger('driving_service_id')->unsigned();
            $table->bigInteger('contact_id')->unsigned();
            $table->timestamps();
            $table->foreign('driving_service_id')
                ->references('id')
                ->on('driving_services');
            $table->foreign('contact_id')
                ->references('id')
                ->on('contacts');
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

    }
}
