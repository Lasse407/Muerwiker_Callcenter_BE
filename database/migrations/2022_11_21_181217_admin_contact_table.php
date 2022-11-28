<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdminContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_contact', function (Blueprint $table) {
            $table->primary(['admin_id','contact_id']);
            $table->bigInteger('admin_id')->unsigned();
            $table->bigInteger('contact_id')->unsigned();
            $table->timestamps();
            $table->foreign('admin_id')
                ->references('id')
                ->on('admins');
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
