<?php

use Illuminate\Database\Seeder;

class DAPhasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $phases = [
            [
                'status' => 'Vorbereitungs Phase',
            ],
            [
                'status' => 'Bewerbungs Phase',
            ],
            [
                'status' => 'Absprache/Korrektur Phase(Bewerbung schließen)',
            ],
            [
                'status' => 'Durchführungs Phase',
            ],
            [
                'status' => 'Diplomarbeit abschließen',
            ],

        ];

        foreach ($phases as $phase) {
            $phase = \App\Models\DAPhase::create(['status'=>$phase['status']]);
        }
    }
}
