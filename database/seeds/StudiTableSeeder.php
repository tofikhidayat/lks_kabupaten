<?php

use Illuminate\Database\Seeder;
use App\Study;
use App\Admin;

class StudiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Admin::first()->id;
        Study::create([
            'admin_id' => $admin,
            'title' => 'Matematika',
            'description'=> 'Pelajaran ini paling di minati para siawa karena mengajarkan perhitungan :)'
        ]);

        Study::create([
            'admin_id' => $admin,
            'title' => 'Bahasa Inggris',
            'description'=> 'Pelajaran ini paling di minati para siawa karena mengajarkan perhitungan :)'
        ]);

        Study::create([
            'admin_id' => $admin,
            'title' => 'Olahraga',
            'description'=> 'Pelajaran ini paling di minati para siawa karena mengajarkan perhitungan :)'
        ]);

        Study::create([
            'admin_id' => $admin,
            'title' => 'Bahasa Indonesia',
            'description'=> 'Pelajaran ini paling di minati para siawa karena mengajarkan perhitungan :)'
        ]);

        Study::create([
            'admin_id' => $admin,
            'title' => 'Bahas Sunda',
            'description'=> 'Pelajaran ini paling di minati para siawa karena mengajarkan perhitungan :)'
        ]);
    }
}
