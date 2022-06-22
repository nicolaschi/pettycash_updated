<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreatePettyCashesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_petty_cashes', function (Blueprint $table) {
            $table->id();
            $table->string('department');
            $table->string('date');
            $table->string('amount');
            $table->string('requestedby');
            $table->string('description');
            $table->string('company');
            $table->string('status')->default('In Progress');
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
        Schema::dropIfExists('create_petty_cashes');
    }
}
