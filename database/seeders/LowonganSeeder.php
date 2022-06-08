<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lowongan;

class LowonganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
        {
            Lowongan::create([
             'perusahaan'=>'PT. Bintang Jaya',
             'jabatan'=>'Programmer',
             'lokasi'=>'Jakarta',
             'gaji'=>'Rp. 5.000.000',
             'tentang_lowongan'=>'Pemrograman Java, PHP, dan lain-lain',
             'persyaratan'=>'Pengalaman kerja di perusahaan yang sama',
            ]);
            Lowongan::create([
             'perusahaan'=>'BCA',
             'jabatan'=>'Backend Developer',
             'lokasi'=>'Banten',
             'gaji'=>'Rp. 5.000.000',
             'tentang_lowongan'=>'Perkembangan teknologi yang kian pesat merupakan salah satu tantangan yang harus dihadapi oleh semua perusahaan di Indonesia, termasuk BCA. Menjawab tantangan ini, BCA terus mengedepankan inovasi agar dapat senantiasa menjadi bank yang dapat diandalkan oleh masyarakat. Teknologi dan inovasi di bidang teknologi saat ini berkembang pesat, sehingga BCA membutuhkan Backend Developer yang bertanggung jawab sebagai middleware developer yang melakukan coding, blackbox testing, debugging, analisis, dan monitoring sistem yang menghubungkan core system dengan sistem lain. Backend Developer juga bertugas melakukan support kebutuhan UAT dan kebutuhan bisnis dari user.',
             'persyaratan'=>'Minimal lulusan  SMA IPA/SMK untuk jalur karyawan PKWT, dan S1 yang berkaitan dengan Teknik Informatika untuk jalur IT Staff
             IPK minimal 2.75 untuk lulusan Diploma/Sarjana dan nilai minimal 70 untuk lulusan SMA/SMK
             Usia maksimal 28 tahun
             Menguasai minimal 1 bahasa pemrograman
             Memiliki pengetahuan terkait Java Programming, relational database, REST API, serta proses dan teknologi DevOps
             Bersedia ditempatkan di Jakarta / Tangerang',
            ]);
     }

}
