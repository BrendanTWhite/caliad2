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
        Schema::create('divisions', function (Blueprint $table) {
            $table->id();

            $table->string('full_name')->unique();
            $table->string('short_name')->unique();
            $table->integer('rank')->unique();

            $table->timestamps();
        });

        // This is a reference table with data that
        // rarely if ever changes

        DB::table('divisions')->insert([
            [ 'id' => 100, 'rank' => 0, 'short_name' => 'Champs', 'full_name' => 'Championship Division' ],
            [ 'id' => 101, 'rank' => 1, 'short_name' => 'Div 1',  'full_name' => 'Division 1' ],
            [ 'id' => 102, 'rank' => 2, 'short_name' => 'Div 2',  'full_name' => 'Division 2' ],
            [ 'id' => 103, 'rank' => 3, 'short_name' => 'Div 3',  'full_name' => 'Division 3' ],
            [ 'id' => 104, 'rank' => 4, 'short_name' => 'Div 4',  'full_name' => 'Division 4' ],
            [ 'id' => 105, 'rank' => 5, 'short_name' => 'Div 5',  'full_name' => 'Division 5' ],
            [ 'id' =>  99, 'rank' => 99, 'short_name' => 'All',  'full_name' => 'All Divisions' ],
        ]);
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('divisions');
    }
};
