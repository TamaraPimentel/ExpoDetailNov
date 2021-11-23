<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThruVideoTimesTable extends Migration
{
    public function up()
    {
        Schema::create('thru_video_times', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('video_url');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
