<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teams = [
            [
                'id'            => 1,
                'user_id'       => 3,
                'name'          => 'rinaldi\'s Team',
                'personal_team' => 1,

            ],
        ];

        Team::insert($teams);
    }
}
