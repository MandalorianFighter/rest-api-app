<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\CarbonPeriod;
use App\Models\CovidCase;

class CovidCasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CovidCase::truncate();

        $faker = \Faker\Factory::create();

        $dates = CarbonPeriod::create('2023-01-01', '2023-01-24');

        foreach($dates as $date) {
            $item = [
                'report_date' => $date,
                'cases' => $faker->numberBetween(10, 100),
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            ];
            $data[]= $item;
        }

        CovidCase::insert($data);

    }
}
