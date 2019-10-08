<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('client_id');
            $table->string('specialization');
            $table->string('address');
            $table->date('start')->nullable();
            $table->integer('experience_years');
            $table->double('desired_salary');
            $table->text('qualifications');
            $table->text('note')->nullable();
            $table->enum('status',['to_hrAccept' , 'to_adminAccept' , 'reject' , 'admin_reject' ]) ;
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
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
        Schema::dropIfExists('job_requests');
    }
}
