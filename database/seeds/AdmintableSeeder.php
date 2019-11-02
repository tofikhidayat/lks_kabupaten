<?php

use Illuminate\Database\Seeder;

use App\Admin;

class AdmintableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name'=>'Admin',
            'email'=> 'admin@test.app',
            'password'=> bcrypt('secret'),
            'address'=> 'west java'
        ]);
    }
}
