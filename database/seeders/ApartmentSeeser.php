<?php

namespace Database\Seeders;

use App\Models\Apartments;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApartmentSeeser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake = Factory::create();
        DB::table('apartments')->truncate();
        for ($i = 0; $i < 20; $i++) {
            Apartments::create([
                'name' => $fake->name,
                'address' => $fake->address,
                'price' => $fake->price,
                'generalInformation' => $fake->generalInformation,
                'details' => $fake->details,
                'avatar' => $fake->avatar,
                'status' => random_int(0, 3)
            ]);
        }
    }
}
