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
        Schema::create('items', function (Blueprint $table) {
            $table->id();

            $table->foreignId('item_type_id')->constrained();

            $table->string('full_name')->unique();
            $table->string('short_name')->unique();
            $table->integer('sort_order')->unique();

            $table->timestamps();
        });

        // This is a reference table with data that
        // rarely if ever changes

        DB::table('items')->insert([

            [ 
                'item_type_id' => 4, 
                'full_name' => 'Administrative', 
                'short_name' => 'Admin',  
                'sort_order' => 9999,  
            ], 

            [ 
                'item_type_id' => 1, 
                'full_name' => 'Figure March', 
                'short_name' => 'March',  
                'sort_order' => 1100,  
            ], [ 
                'item_type_id' => 1, 
                'full_name' => 'Free Exercises', 
                'short_name' => 'Exercises',  
                'sort_order' => 1200,  
            ], [ 
                'item_type_id' => 1, 
                'full_name' => 'Rod Exercises', 
                'short_name' => 'Rods',  
                'sort_order' => 1300,  
            ], [ 
                'item_type_id' => 1, 
                'full_name' => 'Club Swinging', 
                'short_name' => 'Clubs',  
                'sort_order' => 1400,  
            ],

            [ 
                'item_type_id' => 2, 
                'full_name' => 'Aesthetic', 
                'short_name' => 'Aesthetic',  
                'sort_order' => 2100,  
            ], [ 
                'item_type_id' => 2, 
                'full_name' => 'Rhythmical Aesthetic', 
                'short_name' => 'Rhythmical Aesthetic',  
                'sort_order' => 2200,  
            ], [ 
                'item_type_id' => 2, 
                'full_name' => 'Rhythmic Interpretation', 
                'short_name' => 'Rhythmic Interpretation',  
                'sort_order' => 2300,  
            ], [ 
                'item_type_id' => 2, 
                'full_name' => 'Dance Arrangement', 
                'short_name' => 'Dance Arrangement',  
                'sort_order' => 2400,  
            ], [ 
                'item_type_id' => 2, 
                'full_name' => 'Dance Rods', 
                'short_name' => 'Dance Rods',  
                'sort_order' => 2500, 
             ], [ 
                'item_type_id' => 2, 
                'full_name' => 'Character Folk Dance', 
                'short_name' => 'Character Folk',  
                'sort_order' => 2600, 
             ], [ 
                'item_type_id' => 2, 
                'full_name' => 'Calisthenic Revue', 
                'short_name' => 'Cali Revue',  
                'sort_order' => 2700, 
             ], [ 
                'item_type_id' => 2, 
                'full_name' => 'Song with Movement', 
                'short_name' => 'Song and Action',  
                'sort_order' => 2800,  
            ], [ 
                'item_type_id' => 2, 
                'full_name' => 'Song and Dance', 
                'short_name' => 'Song and Dance',  
                'sort_order' => 2900,  
            ], [ 
                'item_type_id' => 2, 
                'full_name' => 'Stage Medley', 
                'short_name' => 'Stage Medley',  
                'sort_order' => 3000,  
            ],

            [ 
                'item_type_id' => 3, 
                'full_name' => 'Graceful Solo', 
                'short_name' => 'Gracefuls',  
                'sort_order' => 3100,  
            ], [ 
                'item_type_id' => 3, 
                'full_name' => 'Calisthenic Solo', 
                'short_name' => 'Solos',  
                'sort_order' => 3200,  
            ], [ 
                'item_type_id' => 3, 
                'full_name' => 'Calisthenic Duo', 
                'short_name' => 'Duos',  
                'sort_order' => 3300,  
            ],

        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
