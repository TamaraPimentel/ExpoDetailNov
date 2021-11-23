<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceVideosTable extends Migration
{
    public function up()
    {
        Schema::create('service_videos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('service_video_url');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
