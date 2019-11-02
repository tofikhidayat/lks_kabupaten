<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=> 'Example teacher',
            'email'=> 'teacher@test.app',
            'password'=> bcrypt('secret'),
            'address'=> 'Sukabumi',
            'nis'=> '1234567890'
        ]);
    }
}
