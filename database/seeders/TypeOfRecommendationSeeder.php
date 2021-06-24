<?php

namespace Database\Seeders;

use App\Models\TypeOfRecommendation;
use Illuminate\Database\Seeder;

class TypeOfRecommendationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $TypeOfRecommendation = [
            [
                'name' => 'DKO',
                'description' => 'Dialog Kinerja Organisasi',
            ],
            [
                'name' => 'PKPT',
                'description' => 'Pemantauan Kepatuhan Pelaksanakan Tugas',
            ],
            [
                'name' => 'EVKIN',
                'description' => 'Evaluasi Kinerja',
            ]
        ];

        TypeOfRecommendation::insert($TypeOfRecommendation);
    }
}
