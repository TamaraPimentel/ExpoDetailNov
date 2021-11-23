<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExponentsTable extends Migration
{
    public function up()
    {
        Schema::create('exponents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('topic');
            $table->datetime('date');
            $table->longText('curriculum');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
