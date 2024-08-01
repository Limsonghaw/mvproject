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
        Schema::create('venue', function (Blueprint $table) {
            $table->id();
            $table->string('venuename');
            $table->string('address');
            $table->string('city_area');
            $table->string('state');
            $table->string('postcode');
            $table->decimal('rentalperday', 8, 2);
            $table->integer('maxcapacity');
            $table->string('picname');
            $table->string('picemail');
            $table->string('pich_p');
            $table->json('otherinfo')->nullable();
            $table->json('textarea')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('venue');
    }
};
