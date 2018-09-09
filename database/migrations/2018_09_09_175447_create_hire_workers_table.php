<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHireWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hire_workers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id')->unsigned()->index();
            $table->foreign('client_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('worker_id')->unsigned()->index();
            $table->foreign('worker_id')->references('id')->on('users')->onDelete('cascade');
            $table->tinyInteger('worker_action')->default(0)->comment('0 = UnSeen 1 = Seen');
            $table->tinyInteger('client_action')->default(0)->comment('1 = Accept 2 = Reject');
            $table->timestamps();
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
        Schema::dropIfExists('hire_workers');
    }
}
