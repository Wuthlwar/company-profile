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
            $table->string('vacant_name');
            $table->string('category_id')->nullable();
            $table->string('vacant_banner')->nullable();
            $table->string('vacant_image')->nullable();
            $table->text('vacant_description')->nullable();
            $table->text('vacant_shortxt')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('job_vacants');
    }
}
