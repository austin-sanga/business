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
        Schema::create('new_projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('est_start_date');
            $table->date('start_date')->nullable();
            $table->string('est_duration');
            $table->date('date_of_maturity')->nullable();
            $table->bigInteger('budget');
            $table->bigInteger('est_roi');
            $table->foreignId('user_id')->constrained()->nullable();
            $table->string('manager_notice');
            $table->string('project_contract')->nullable();
            $table->string('status_id')->default(1);
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
        Schema::dropIfExists('new_projects');
    }
};
