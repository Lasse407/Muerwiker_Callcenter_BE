<?php
// Inside the migrations-table, the database is given a instruction on how to set up a table with what values.
// This table connects the contacts and care-center objects to one another

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CareCenterContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('care_center_contact', function (Blueprint $table) {
            $table->primary(['care_center_id','contact_id']);
            $table->bigInteger('care_center_id')->unsigned();
            $table->bigInteger('contact_id')->unsigned();
            $table->timestamps();
            $table->foreign('care_center_id')
                ->references('id')
                ->on('care_centers');
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
        //
    }
}
