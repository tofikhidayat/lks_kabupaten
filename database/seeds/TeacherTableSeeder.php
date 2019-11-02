<?php

use Illuminate\Database\Seeder;
use App\Teacher;

class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teacher::create([
            'name'=> 'Example teacher',
            'email'=> 'teacher@test.app',
            'password'=> bcrypt('secret'),
            'address'=> 'Sukabumi',
            'nuptk'=> '1234567890'
        ]);
    }
}
