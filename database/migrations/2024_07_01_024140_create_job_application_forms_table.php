<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobApplicationFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_application_forms', function (Blueprint $table) {
            $table->id();
            $table->string('jobvacant_id');
            $table->string('cat_id');
            $table->string('position')->nullable();
            $table->string('title')->nullable();
            $table->string('surname')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('current_address')->nullable();
            $table->text('emergency_address')->nullable();
            $table->text('career_summary')->nullable();
            $table->text('resume')->nullable();
            $table->string('agree')->nullable();
            $table->string('status')->nullable();
            $table->string('remark')->nullable();
            $table->string('salary')->nullable();

            $table->string('q1')->nullable();
            $table->string('ans1')->nullable();

            $table->string('q2')->nullable();
            $table->string('ans2')->nullable();

            $table->string('q3')->nullable();
            $table->string('ans3')->nullable();

            $table->string('date')->nullable();
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
        Schema::dropIfExists('job_application_forms');
    }
}
