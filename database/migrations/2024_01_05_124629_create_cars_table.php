<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        if (Schema::hasTable('cars')) {
            return;
        }

        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->string('color');
            $table->string('plates');
            $table->string('brand');
            $table->unsignedBigInteger('user_id');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
