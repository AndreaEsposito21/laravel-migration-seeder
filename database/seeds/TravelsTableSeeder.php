<?php

use Illuminate\Database\Seeder;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $travels = [
            [
                'località' => 'Palinuro',
                'prezzo' => 150,
                'tipo_viaggio' => 'Auto/Treno',
                'tipo_località' => 'Mare'
            ],

            [
                'località' => 'Cuneo',
                'prezzo' => 220,
                'tipo_viaggio' => 'Auto/Treno',
                'tipo_località' => 'Montagna'
            ],

            [
                'località' => 'Assisi',
                'prezzo' => 250,
                'tipo_viaggio' => 'Auto',
                'tipo_località' => 'Città'
            ],

            [
                'località' => 'Taormina',
                'prezzo' => 312,
                'tipo_viaggio' => 'Aereo/Nave',
                'tipo_località' => 'Mare'
            ],
        ];

        foreach($travels as $travel) {
            $new_travel = new Travel();
            $new_travel->località = $travel['località'];
            $new_travel->prezzo = $travel['prezzo'];
            $new_travel->tipo_viaggio = $travel['tipo_viaggio'];
            $new_travel->tipo_località = $travel['tipo_località'];
            $new_travel->save();
        }
    }
}
