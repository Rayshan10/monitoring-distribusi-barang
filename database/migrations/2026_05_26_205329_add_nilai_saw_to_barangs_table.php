<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('barangs', function (Blueprint $table) {

            $table->double('nilai_saw')
                  ->nullable();

        });
    }

    public function down(): void
    {
        Schema::table('barangs', function (Blueprint $table) {

            $table->dropColumn('nilai_saw');

        });
    }
};