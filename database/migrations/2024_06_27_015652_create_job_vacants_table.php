<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobVacantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_vacants', function (Blueprint $table) {
            $table->id();
            $table->string('vacant_name')->nullable();
            $table->text('industry')->nullable();
            $table->text('emptype')->nullable();
            $table->text('no_vacant')->nullable();
            $table->text('qualification')->nullable();
            $table->text('experience')->nullable();
            $table->text('gender')->nullable();

            $table->string('category_id')->nullable();
            $table->string('job_role')->nullable();
            $table->text('vacant_description')->nullable();
            $table->text('vacant_spec')->nullable();
            $table->string('region')->nullable();
            $table->string('township')->nullable();
            $table->string('address')->nullable();

            $table->text('salary')->nullable();
            $table->text('currency')->nullable();
            $table->text('min')->nullable();
            $table->text('max')->nullable();
            $table->text('offer')->nullable();
            $table->text('q1')->nullable();
            $table->text('q2')->nullable();
            $table->text('q3')->nullable();

            $table->string('vacant_banner')->nullable();
            $table->string('vacant_image')->nullable();

            $table->string('status')->nullable();
            $table->string('status1')->default('Activate');
            $table->string('remark')->nullable();
            $table->string('date')->nullable();
            $table->unsignedBigInteger('view_count')->default(0);
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
        Schema::dropIfExists('job_vacants');
    }
}
