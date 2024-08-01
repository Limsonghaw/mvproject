<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('event', function (Blueprint $table) {
            $table->bigIncrements('id'); //$table->id();//
            $table->string('eventname');
            $table->string('audience');
            $table->string('event_venue');
            $table->string('datetime');
            $table->string('artist')->nullable();;
            $table->string('singer')->nullable();;
            $table->string('language');
            $table->string('event_online');
            $table->string('online_link')->nullable();
            $table->text('description')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('image')->nullable();
            $table->string('saleticket');
            $table->decimal('price', 8, 2)->nullable();
            $table->decimal('promotional_price', 8, 2)->nullable();
            $table->integer('capacity');
            $table->integer('maxbooking');
            $table->integer('point');
            $table->json('voteby')->nullable();
            $table->string('youtube')->nullable();
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('blog')->nullable();
            $table->string('website')->nullable();
            $table->string('tiktok')->nullable();
            $table->string('name');
            $table->string('email');
            $table->string('phonenumber');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event');
    }
};
