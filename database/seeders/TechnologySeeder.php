<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array_tech = config("technologies"); 
        foreach($array_tech as $single_tech)
        {
            $new_tech=new Technology();
            $new_tech->name=$single_tech['name'];
            $new_tech->img=$single_tech['img'];
            $new_tech->description=$single_tech['description'];
            $new_tech->fill($single_tech);
            $new_tech->save();
        }   
    }
}
