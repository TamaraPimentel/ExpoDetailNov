<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScheduleImagesTable extends Migration
{
    public function up()
    {
        Schema::create('schedule_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
