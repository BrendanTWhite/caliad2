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
        Schema::create('venues', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('url');
            $table->string('address');
            $table->string('suburb');
            $table->string('state');
            $table->string('postcode');
            $table->double('latitude');
            $table->double('longitude');

            $table->timestamps();
        });

        // This is a reference table with data that
        // rarely if ever changes

        DB::table('venues')->insert([
            [ 
                'id' => 1,  
                'name'      => 'Royalty Theatre',
                'url'       => 'https://www.royaltytheatre.com.au/',
                'address'   => '69 Angas St', 
                'suburb'    => 'Adelaide', 
                'state'     => 'SA', 
                'postcode'  => '5000', 
                'latitude'  => -34.92995711910526, 
                'longitude' => 138.6038937961004, 
            ],
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('venues');
    }
};
