<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandVideosTable extends Migration
{
    public function up()
    {
        Schema::create('brand_videos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('video_url');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
