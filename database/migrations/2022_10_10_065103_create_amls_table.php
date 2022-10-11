<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amls', function (Blueprint $table) {
            $table->id();
            $table->string('client_ID');
            $table->string('passport_proff');
            $table->string('passport_expire_date');
            $table->string('address_proff');
            $table->string('address_expire_date');
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
        Schema::dropIfExists('amls');
    }
}
