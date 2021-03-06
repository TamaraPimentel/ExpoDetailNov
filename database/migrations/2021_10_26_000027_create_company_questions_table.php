<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyQuestionsTable extends Migration
{
    public function up()
    {
        Schema::create('company_questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('statement');
            $table->longText('meaning');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
