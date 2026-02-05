<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class CitySeeder extends Seeder
{
    public function run(): void
    {
        $path = database_path('json/cities.json');
        $cities = json_decode(File::get($path), true);
        DB::table('cities')->insert($cities);
    }
}
