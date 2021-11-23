<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToMasterFormPaymentsTable extends Migration
{
    public function up()
    {
        Schema::table('master_form_payments', function (Blueprint $table) {
            $table->unsignedBigInteger('buyer_id')->nullable();
            $table->foreign('buyer_id', 'buyer_fk_5205481')->references('id')->on('registration_forms');
            $table->unsignedBigInteger('conference_id')->nullable();
            $table->foreign('conference_id', 'conference_fk_5205482')->references('id')->on('masters');
        });
    }
}
