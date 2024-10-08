<?php

use App\Models\Paket;
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
        Schema::create('packetoptions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Paket::class);
            $table->integer('price');
            $table->integer('minimum_person');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packetoptions');
    }
};
