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
        Schema::create('leads', function (Blueprint $table) {
            $table->id('lead_id');
            $table->string('cl_name');
            $table->timestamp('called_at');
            $table->decimal('sell_rate', 8, 2);
            $table->string('company_name');
            $table->string('d_date');
            $table->foreignId('user_id');





            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
