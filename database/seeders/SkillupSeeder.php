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
            'topik' => 'Improving Our Public Speaking',
            'penyelenggara' => 'PPKD Jakarta Pusat',
            'pembicara' => 'Sunyoto Wirawan, S.T., M.T',
            'link_video' => 'https://www.youtube.com/embed/e04ftLUs8MM',
        ]);

        Skillup::create([
            'topik' => 'Improve Our Radio Jurnalism Skills',
            'penyelenggara' => 'Brawijaya University',
            'pembicara' => 'Sanjaya Oktaviano, S.I.Kom.',
            'link_video' => 'https://www.youtube.com/embed/e04ftLUs8MM',
        ]);

        Skillup::create([
            'topik' => 'Optimization of Communication Skills',
            'penyelenggara' => 'Karier.mu',
            'pembicara' => 'Stephanus Avatar, S.Kom.',
            'link_video' => 'https://www.youtube.com/embed/e04ftLUs8MM',
        ]);

        Skillup::create([
            'topik' => 'Effective Report Writing for Internal Audit',
            'penyelenggara' => 'Pusat Pengembangan Internal Audit',
            'pembicara' => 'Dr. Ir. Mudjahidin, S.T., M.T',
            'link_video' => 'https://www.youtube.com/embed/e04ftLUs8MM',
        ]);

        Skillup::create([
            'topik' => 'Learning and Teaching In Pandemi Era',
            'penyelenggara' => 'Whiteboard Education',
            'pembicara' => 'Eric Kunto Ariwibowo',
            'link_video' => 'https://www.youtube.com/embed/e04ftLUs8MM',
        ]);

        Skillup::create([
            'topik' => 'Improving Your Excel Skills',
            'penyelenggara' => 'Karier.mu',
            'pembicara' => 'Alexander Amando Tanoesoedibjo',
            'link_video' => 'https://www.youtube.com/embed/e04ftLUs8MM',
        ]);
    }
}
