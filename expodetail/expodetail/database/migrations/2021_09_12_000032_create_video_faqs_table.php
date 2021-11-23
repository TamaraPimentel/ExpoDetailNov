<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoFaqsTable extends Migration
{
    public function up()
    {
        Schema::create('video_faqs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('video_faqs')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
