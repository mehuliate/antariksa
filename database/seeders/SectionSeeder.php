<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sections = [
            ['name'          => 'Kepala Kantor'],
            ['name'          => 'Subbagian Umum'],
            ['name'          => 'Seksi Pelayanan Kepabeanan dan Cukai'],
            ['name'          => 'Seksi Penindakan dan Penyidikan'],
            ['name'          => 'Seksi Perbendaharaan'],
            ['name'          => 'Seksi Kepatuhan Internal'],
            ['name'          => 'Seksi Penyuluhan dan Layanan Informasi'],
            ['name'          => 'Seksi Pengolahan Data dan Administrasi Dokumen'],
        ];

        Section::insert($sections);
    }
}
