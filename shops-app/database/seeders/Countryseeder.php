<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;
use App\Models\Country;
use File;

class Countryseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::truncate();
  
        $json = File::get("database/data/country.json");
        $countries = json_decode($json);
  
        foreach ($countries as $key => $value) {
            Country::create([
                "name" => $value->name,
                "code" => $value->code
            ]);
        }
    }
}
