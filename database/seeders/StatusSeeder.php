<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = [
            ['label' => 'Belum Ditindaklanjuti'],
            ['label' => 'Proses'],
            ['label' => 'Selesai'],
        ];

        Status::insert($status);
    }
}
