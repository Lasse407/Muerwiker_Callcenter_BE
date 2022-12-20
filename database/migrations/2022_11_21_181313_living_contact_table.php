<?php
// Inside the migrations-table, the database is given a instruction on how to set up a table with what values.
// This table connects the contacts and living objects to one another

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LivingContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('living_contact', function (Blueprint $table) {
            $table->primary(['living_id','contact_id']);
            $table->bigInteger('living_id')->unsigned();
            $table->bigInteger('contact_id')->unsigned();
            $table->timestamps();
            $table->foreign('living_id')
                ->references('id')
                ->on('livings');
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
