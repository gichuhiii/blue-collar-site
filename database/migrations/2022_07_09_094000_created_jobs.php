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
        Schema::create('created_jobs', function (Blueprint $table) {
        $table->id();
        $table->string('job_name');
        $table->string('job_category');
        $table->text('job_desc');
        $table->string('job_location');
        $table->text('more_info')->nullable();
        $table->string('job_pay');
        $table->timestamps();
        $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
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
};
