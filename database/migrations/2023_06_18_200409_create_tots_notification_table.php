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
        Schema::create('tots_notification', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->integer('type')->nullable(false)->default(0);
            $table->bigInteger('item_id')->nullable(false)->default(0);
            $table->json('data')->nullable(true);
            $table->text('title')->nullable(true);
            $table->text('caption')->nullable(true);
            $table->tinyInteger('is_read')->nullable(false)->default(0);
            $table->tinyInteger('is_email')->nullable(false)->default(0);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('tots_user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tots_notification');
    }
};
