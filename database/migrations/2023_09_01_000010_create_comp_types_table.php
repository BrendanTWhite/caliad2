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
        Schema::create('comp_types', function (Blueprint $table) {
            $table->id();

            $table->string('name')->unique();

            $table->timestamps();
        });

        // This is a reference table with data that
        // rarely if ever changes

        DB::table('comp_types')->insert([

            [
                'id'         => 1,
                'name'       => 'CASA Competitions', 
            ], [
                'id'         => 2,
                'name'       => 'PHCC Concert', 
            ]

        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comp_types');
    }
};
