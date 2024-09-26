<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Factory as Faker;

class TrainSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->azienda = $faker->randomElement(['Trenitalia', 'Italo', 'Frecciarossa', 'Regionale']);
            $train->stazione_partenza = $faker->city;
            $train->stazione_arrivo = $faker->city;
            $train->orario_partenza = $faker->time($format = 'H:i:s');
            $train->orario_arrivo = $faker->time($format = 'H:i:s');
            $train->codice_treno = $faker->regexify('[A-Z0-9]{6}');
            $train->numero_carrozze = $faker->numberBetween(3, 12);
            $train->in_orario = $faker->boolean;
            $train->cancellato = $faker->boolean(20);
            $train->save();
        }
    }
}
