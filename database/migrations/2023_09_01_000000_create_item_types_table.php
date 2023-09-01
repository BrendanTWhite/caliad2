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
        Schema::create('item_types', function (Blueprint $table) {
            $table->id();

            $table->string('name')->unique();
            $table->integer('sort_order')->unique();
            $table->boolean('has_music_title');

            $table->timestamps();
        });

        // This is a reference table with data that
        // rarely if ever changes

        DB::table('item_types')->insert([
            [ 'sort_order' => 100, 'has_music_title' => FALSE, 'name' => 'Core' ],
            [ 'sort_order' => 200, 'has_music_title' => TRUE,  'name' => 'Fancy' ],
            [ 'sort_order' => 300, 'has_music_title' => TRUE,  'name' => 'Solos / Duos' ],
            [ 'sort_order' => 999, 'has_music_title' => FALSE, 'name' => 'Admin' ],
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_types');
    }
};
