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
        Schema::create('filed_investments', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('project_id');
            $table->string('amount_invested');
            $table->timestamp('date_of_deposit');
            $table->string('deposit_upload');
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
        Schema::dropIfExists('filed_investments');
    }
};
