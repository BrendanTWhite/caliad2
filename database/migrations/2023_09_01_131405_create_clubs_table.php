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
        Schema::create('clubs', function (Blueprint $table) {
            $table->id();

            $table->foreignId('region_id')->constrained();

            $table->string('full_name')->unique();
            $table->string('short_name')->unique();
            $table->string('contact')->nullable();
            $table->string('email')->nullable();
            $table->string('location')->nullable();
            $table->string('website')->nullable();

            $table->timestamps();
        });

        // This is NOT a reference table 
        // however I'm going to insert the current records anyway.
        // Because I can. And I'm not afraid.

        DB::table('clubs')->insert([

            [
                'region_id'  => 1, 
                'full_name'  => 'Jayde Calisthenics Academy', 
                'short_name' => 'Jayde', 
                'contact'    => 'Felicity Vardon 0468 534 646', 
                'email'      => 'jaydecali@gmail', 
                'location'   => 'Aldgate Memorial Hall', 
                'website'    => '', 
            ], [
                'region_id'  => 1, 
                'full_name'  => 'Acacia (Littlehampton/ Mt Barker)', 
                'short_name' => 'Acacia', 
                'contact'    => 'Katie : 0411094070', 
                'email'      => 'secretary@acacia.dance', 
                'location'   => 'Anembo Park, Littlehampton', 
                'website'    => '', 
            ], [
                'region_id'  => 1, 
                'full_name'  => 'Innovation Calisthenics Club Incorporated', 
                'short_name' => 'Innovation',
                'contact'    => 'Principal Coach Kate Loveridge ph 0409 270 877', 
                'email'      => 'innovationcalisthenics@hotmail.com', 
                'location'   => '', 
                'website'    => 'www.innovationcalisthenicsclub.com.au', 
            ], [
                'region_id'  => 1, 
                'full_name'  => 'Murray Bridge Calisthenics Club', 
                'short_name' => 'Murray Bridge', 
                'contact'    => 'Leanne : 0407976635', 
                'email'      => 'murraybridgecalisthenicsclub@outlook.com', 
                'location'   => 'Murray Bridge', 
                'website'    => '', 
            ], [
                'region_id'  => 1, 
                'full_name'  => 'Onkaparinga', 
                'short_name' => 'Onkaparinga', 
                'contact'    => 'Debbie McKay 0404 079 240', 
                'email'      => '', 
                'location'   => 'Oakbank Soldiers Memorial Hall, Main Rd, Oakbank', 
                'website'    => '', 
            ], [
                'region_id'  => 2, 
                'full_name'  => 'Gawler', 
                'short_name' => 'Gawler', 
                'contact'    => '', 
                'email'      => 'gawlercali@gmail.com', 
                'location'   => 'Gawler Institute', 
                'website'    => '', 
            ], [
                'region_id'  => 3, 
                'full_name'  => 'AVV Millennium Calisthenics and Dance Academy', 
                'short_name' => 'AVV Millennium', 
                'contact'    => 'Karen Costanzo: 0438999367', 
                'email'      => 'Karen.costanzo1@gmail.com', 
                'location'   => '', 
                'website'    => 'www.avvm.com.au', 
            ], [
                'region_id'  => 3, 
                'full_name'  => 'Burnside Calisthenics & Dance Academy', 
                'short_name' => 'Burnside', 
                'contact'    => 'Vicki on 0426 259 957', 
                'email'      => 'secretary@burnsideacademy.com.au', 
                'location'   => 'Unit 2, 20 Fullarton Road Norwood', 
                'website'    => 'www.burnsideacademy.com.au', 
            ], [
                'region_id'  => 3, 
                'full_name'  => 'Marden Calisthenics', 
                'short_name' => 'Marden', 
                'contact'    => 'Nikki Ianunzio 0412 711 716', 
                'email'      => 'nicktrick82@gmail.com', 
                'location'   => 'St Josephs Hectorville', 
                'website'    => '', 
            ], [
                'region_id'  => 3, 
                'full_name'  => 'Waratah', 
                'short_name' => 'Waratah', 
                'contact'    => 'Lee-Ann Lewis 0466 637 343', 
                'email'      => 'Waratahcalisthenics@gmail.com', 
                'location'   => 'Athelstone', 
                'website'    => '', 
            ], [
                'region_id'  => 4, 
                'full_name'  => 'Happy Valley', 
                'short_name' => 'Happy Valley', 
                'contact'    => 'Jessica Catford - 0401450864', 
                'email'      => 'hvcalisthenics@hotmail.com', 
                'location'   => 'Happy Valley Primary, Education Rd', 
                'website'    => 'www.hvcalisthenics.com', 
            ], [
                'region_id'  => 4, 
                'full_name'  => 'Reynella Braeview School of Calisthenics', 
                'short_name' => 'Reynella Braeview', 
                'contact'    => 'Tamara: 0433255991', 
                'email'      => 'tamarabuley@hotmail.com', 
                'location'   => 'Braeview Primary School & Reynella East Primary School', 
                'website'    => '', 
            ], [
                'region_id'  => 5, 
                'full_name'  => 'Brighton Calisthenics Club', 
                'short_name' => 'Brighton', 
                'contact'    => 'Catherine Tilley - 8298 1766 or 0410 581 048', 
                'email'      => 'brightoncalisthenics@hotmail.com', 
                'location'   => 'Brighton Uniting Church, 443 Brighton Rd', 
                'website'    => 'www.brightoncalisthenicsclub.com.au', 
            ], [
                'region_id'  => 5, 
                'full_name'  => 'Plympton Halifax', 
                'short_name' => 'Plympton Halifax', 
                'contact'    => 'Lisa - 0438808967', 
                'email'      => '', 
                'location'   => 'All Saints Uniting Church, cnr Mooringe & Marion Rds, Plympton', 
                'website'    => 'www.plymptonhalifax.org.au', 
            ], [
                'region_id'  => 5, 
                'full_name'  => 'Seacliff Calisthenics', 
                'short_name' => 'Seacliff', 
                'contact'    => 'Annette Simpson: 0409 094 977', 
                'email'      => 'seacliffcalisthenicsclub@gmail.com', 
                'location'   => 'Seacliff Youth Centre, Yacca Rd, Seacliff', 
                'website'    => 'www.seacliffyouthcalisthenicsclub.websyte.com.au', 
            ], [
                'region_id'  => 6, 
                'full_name'  => 'Largs North', 
                'short_name' => 'Largs North', 
                'contact'    => 'Rachel - 0431920491', 
                'email'      => 'largsnorthcalisthenics@hotmail.com', 
                'location'   => '', 
                'website'    => 'www.largsnorthcalisthenics.com', 
            ], [
                'region_id'  => 7, 
                'full_name'  => 'Tonique Studio', 
                'short_name' => 'Tonique', 
                'contact'    => 'Tonya: 0407809714, Monique: 0438 255 576', 
                'email'      => 'toniquestudio@hotmail.com', 
                'location'   => 'Glenburnie', 
                'website'    => '', 
            ], [
                'region_id'  => 7, 
                'full_name'  => 'Kangaroo Island', 
                'short_name' => 'Kangaroo Island', 
                'contact'    => 'Lucy: 0437995023', 
                'email'      => 'kicalisthenics@gmail.com', 
                'location'   => 'Parndana Town Hall', 
                'website'    => '', 
            ], [
                'region_id'  => 7, 
                'full_name'  => 'Krymzon Academy of Calisthenics', 
                'short_name' => 'Krymzon', 
                'contact'    => 'Christiane : 0435 818 549', 
                'email'      => 'christianeellis87@gmail.com', 
                'location'   => 'Moorak', 
                'website'    => 'www.krymzon.com.au', 
            ], [
                'region_id'  => 7, 
                'full_name'  => 'Naracoorte', 
                'short_name' => 'Naracoorte', 
                'contact'    => 'Deb Pearce Ph. 08 8762 0296', 
                'email'      => '', 
                'location'   => 'Naracoorte Primary School, Park Terrace, Naracoorte', 
                'website'    => '', 
            ], [
                'region_id'  => 7, 
                'full_name'  => 'Pt Augusta', 
                'short_name' => 'Pt Augusta', 
                'contact'    => 'Christopher: 0417847536', 
                'email'      => 'Secretary.portaugustacc@gmail.com', 
                'location'   => '5 Gibson Street, Port Augusta', 
                'website'    => '', 
            ], [
                'region_id'  => 7, 
                'full_name'  => 'Pt Lincoln', 
                'short_name' => 'Pt Lincoln', 
                'contact'    => 'Renaye:0400265130', 
                'email'      => 'portlincolncali@hotmail.com', 
                'location'   => 'Port Lincoln', 
                'website'    => '', 
            ], [
                'region_id'  => 7, 
                'full_name'  => 'Synergy', 
                'short_name' => 'Synergy', 
                'contact'    => 'Kym Lindner: 8723 3728', 
                'email'      => '', 
                'location'   => 'Ripley Arcade, 1st Floor, Mt Gambier', 
                'website'    => '', 
            ], [
                'region_id'  => 7, 
                'full_name'  => 'Whydale', 
                'short_name' => 'Whydale', 
                'contact'    => 'Natasha Skinner: 0421 441 845', 
                'email'      => '', 
                'location'   => 'McRitchie Cr Hall, Whyalla', 
                'website'    => '', 
            ], [
                'region_id'  => 8, 
                'full_name'  => 'Carisbrook', 
                'short_name' => 'Carisbrook', 
                'contact'    => 'Kerry : 0402 411 771', 
                'email'      => 'carisbrookcali@gmail.com ', 
                'location'   => 'Salisbury Uniting Church', 
                'website'    => 'www.facebook.com/carisbrookcalisthenicsclub', 
            ], [
                'region_id'  => 8, 
                'full_name'  => 'Elizabeth Eastside', 
                'short_name' => 'Elizabeth Eastside', 
                'contact'    => 'Kate: 0412 598 195', 
                'email'      => 'elizeastside@gmail.com', 
                'location'   => 'Elizabeth East Primary, Dolphin St', 
                'website'    => '', 
            ], [
                'region_id'  => 8, 
                'full_name'  => 'Gleneliz', 
                'short_name' => 'Gleneliz', 
                'contact'    => 'Jasmin - 0403566175', 
                'email'      => 'gleneliz.secretary@yahoo.com.au', 
                'location'   => 'Edinburgh North', 
                'website'    => '', 
            ], [
                'region_id'  => 8, 
                'full_name'  => 'Golden Heights', 
                'short_name' => 'Golden Heights', 
                'contact'    => 'Kerri-Anne Clarke: 0410 516 270', 
                'email'      => 'ghcaliclub@gmail.com', 
                'location'   => 'Golden Grove Community Centre', 
                'website'    => 'www.goldenheightscalisthenicsclub.com', 
            ], [
                'region_id'  => 8, 
                'full_name'  => 'Jem Calisthenics College', 
                'short_name' => 'Jem', 
                'contact'    => 'Sonia - 0417 826 563', 
                'email'      => 'jemcalisthenics@gmail.com', 
                'location'   => '4&5 25 Research Rd, Pooraka', 
                'website'    => 'jemcalisthenicscollege.com', 
            ], [
                'region_id'  => 8, 
                'full_name'  => 'Northern Districts', 
                'short_name' => 'Northern Districts', 
                'contact'    => 'Lee Yon: 0411 174 741', 
                'email'      => 'secretary@northerndistrictscalisthenicsclub.com', 
                'location'   => 'Salisbury Park Primary, Goddard Dr. Salisbury Park & St. John\'s Church, Church St. Salisbury', 
                'website'    => '', 
            ], [
                'region_id'  => 8, 
                'full_name'  => 'Para Vista', 
                'short_name' => 'Para Vista', 
                'contact'    => 'Neroli : 0449 24742', 
                'email'      => 'paravistacalisthenics@hotmail.com', 
                'location'   => 'East Para Primary School', 
                'website'    => 'www.paravistacalisthenics.org.au', 
            ], [
                'region_id'  => 8, 
                'full_name'  => 'Payton Calisthenics College', 
                'short_name' => 'Payton', 
                'contact'    => 'Dianne Ryan 0412 197 863', 
                'email'      => 'payton.cali@gmail.com', 
                'location'   => 'Pooraka Memorial Hall', 
                'website'    => '', 
            ], [
                'region_id'  => 8, 
                'full_name'  => 'Northern Vixens - Masters Only', 
                'short_name' => 'Northern Vixens', 
                'contact'    => 'Sharyn : 0400224055', 
                'email'      => 'sharynrichter@bigpond.com', 
                'location'   => 'Salisbury Downs', 
                'website'    => '', 
            ], [
                'region_id'  => 9, 
                'full_name'  => 'Aurora', 
                'short_name' => 'Aurora', 
                'contact'    => 'Marie Pickering: 0417 827 584', 
                'email'      => 'aurora.cali.college@gmail.com', 
                'location'   => 'RSL Memorial Hall, Memorial Dr, Tea Tree Gully', 
                'website'    => 'www.aurora-calisthenics.websyte.com.au', 
            ], [
                'region_id'  => 9, 
                'full_name'  => 'Highbury', 
                'short_name' => 'Highbury', 
                'contact'    => 'Kathrine : 0437716808', 
                'email'      => 'highburycali@gmail.com', 
                'location'   => 'Hope Valley Institute, Valley Rd', 
                'website'    => 'www.highburycalisthenics.com', 
            ], [
                'region_id'  => 9, 
                'full_name'  => 'Ridgehaven', 
                'short_name' => 'Ridgehaven', 
                'contact'    => 'Phone  – Tracey Emes - 0412 080 854', 
                'email'      => ' Temes8@optusnet.com.auWebsite – ', 
                'location'   => 'Modbury Uniting Church', 
                'website'    => 'www.ridgehavencalisthenics.com.au', 
            ], [
                'region_id'  => 9, 
                'full_name'  => 'Windsor', 
                'short_name' => 'Windsor', 
                'contact'    => 'Rachel: 0401 592 919', 
                'email'      => ' windsor.calisthenics.club@gmail.com', 
                'location'   => '', 
                'website'    => 'www.windsorcalisthenics.com.au', 
            ], [
                'region_id'  => 10, 
                'full_name'  => 'Seaford', 
                'short_name' => 'Seaford', 
                'contact'    => 'Telisha Bayly: 0421 212 562', 
                'email'      => 'Seafordcalisthenics@gmail.com', 
                'location'   => '', 
                'website'    => 'www.seafordcalisthenicsclub.org.au', 
            ], [
                'region_id'  => 10, 
                'full_name'  => 'Cherum', 
                'short_name' => 'Cherum', 
                'contact'    => 'Sally Delaat: 0426 268 119 or Michelle Tromp: 0423 769 467', 
                'email'      => 'cherumcali@gmail.com', 
                'location'   => 'Christies Beach Uniting Church', 
                'website'    => 'www.cherumcalisthenics.com', 
            ], [
                'region_id'  => 11, 
                'full_name'  => 'Del Sante Gardens', 
                'short_name' => 'Del Sante Gardens', 
                'contact'    => 'Lauren Mazzachi: 0414 744 884', 
                'email'      => 'delsantesecretary@gmail.com', 
                'location'   => 'Flinders Park Primary School', 
                'website'    => '', 
            ], [
                'region_id'  => 11, 
                'full_name'  => 'Seaton', 
                'short_name' => 'Seaton', 
                'contact'    => 'Susan : 0420 989 007', 
                'email'      => 'seatoncalisthenics@hotmail.com', 
                'location'   => 'Seaton Baptist Church, cnr Trimmer Pde & Tapleys Hill Road, Seaton', 
                'website'    => 'www.seatoncalisthenics.com.au', 
            ], [
                'region_id'  => 11, 
                'full_name'  => 'Seaview Calisthenics College', 
                'short_name' => 'Seaview', 
                'contact'    => 'Renee 0439 186 734', 
                'email'      => 'seaviewcalisthenicscollege@gmail.com', 
                'location'   => 'Henley Town Hall, Henley Beach', 
                'website'    => 'www.seaviewcalisthenics.org', 
            ], 

        ]);
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clubs');
    }
};
