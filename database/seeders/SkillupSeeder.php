<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skillup;

class SkillupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skillup::create([
            'topik' => 'Pemrograman',
            'penyelenggara' => 'PT. ABC',
            'pembicara' => 'John Doe',
            'link_video' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
        ]);
    }
}
