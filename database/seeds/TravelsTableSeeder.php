<?php

use Illuminate\Database\Seeder;
use App\Travel;
use Faker\Generator as Faker;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // ---- With Faker ----
        for($i = 0; $i < 10; $i++) {
            $new_travel = new Travel();
            $new_travel->località = $faker->city();
            $new_travel->prezzo = $faker->randomFloat(2, 100, 500);
            $new_travel->tipo_viaggio = $faker->word();
            $new_travel->tipo_località = $faker->cityPrefix();
            $new_travel->save();
        }

        // ---- Seeders ----
        // $travels = [
        //     [
        //         'località' => 'Palinuro',
        //         'prezzo' => 150,
        //         'tipo_viaggio' => 'Auto/Treno',
        //         'tipo_località' => 'Mare'
        //     ],

        //     [
        //         'località' => 'Cuneo',
        //         'prezzo' => 220,
        //         'tipo_viaggio' => 'Auto/Treno',
        //         'tipo_località' => 'Montagna'
        //     ],

        //     [
        //         'località' => 'Assisi',
        //         'prezzo' => 250,
        //         'tipo_viaggio' => 'Auto',
        //         'tipo_località' => 'Città'
        //     ],

        //     [
        //         'località' => 'Taormina',
        //         'prezzo' => 312,
        //         'tipo_viaggio' => 'Aereo/Nave',
        //         'tipo_località' => 'Mare'
        //     ],
        // ];

        // foreach($travels as $travel) {
        //     $new_travel = new Travel();
        //     $new_travel->località = $travel['località'];
        //     $new_travel->prezzo = $travel['prezzo'];
        //     $new_travel->tipo_viaggio = $travel['tipo_viaggio'];
        //     $new_travel->tipo_località = $travel['tipo_località'];
        //     $new_travel->save();
        // }
    }
}
