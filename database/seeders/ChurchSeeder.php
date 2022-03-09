<?php

namespace Database\Seeders;

use App\Models\Church;
use Illuminate\Database\Seeder;

class ChurchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $church = new Church;
        $church->name = 'CFC Abuja';
        $church->pastor = 1;
        $church->save();
        
        $church = new Church;
        $church->name = 'CFC Gboko';
        $church->pastor = 1;
        $church->save();
        
        $church = new Church;
        $church->name = 'CFC Makurdi';
        $church->pastor = 1;
        $church->save();
        
        $church = new Church;
        $church->name = 'CFC Kaduna';
        $church->pastor = 1;
        $church->save();
        
        $church = new Church;
        $church->name = 'CFC Sagamu';
        $church->pastor = 1;
        $church->save();

    }
}
