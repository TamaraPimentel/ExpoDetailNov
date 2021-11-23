<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyVideosTable extends Migration
{
    public function up()
    {
        Schema::create('company_videos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('video_company_url');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
