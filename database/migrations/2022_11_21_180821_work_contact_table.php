<?php
// Inside the migrations-table, the database is given a instruction on how to set up a table with what values.

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WorkContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_contact', function (Blueprint $table) {
            $table->primary(['work_id','contact_id']);
            $table->bigInteger('work_id')->unsigned();
            $table->bigInteger('contact_id')->unsigned();
            $table->timestamps();
            $table->foreign('work_id')
                ->references('id')
                ->on('works');
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
