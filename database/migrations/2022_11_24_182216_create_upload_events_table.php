<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upload_events', function (Blueprint $table) {
            $table->id();
            $table->text('eventName');
            $table->float('eventPrice');
            $table->longText('eventDescription');
            $table->text('eventPlace');
            $table->time('eventTime');
            $table->date('eventDate');
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
        Schema::dropIfExists('upload_events');
    }
};
