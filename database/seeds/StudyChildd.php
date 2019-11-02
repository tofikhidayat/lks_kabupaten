<?php

use Illuminate\Database\Seeder;
use App\StudyChild;

class StudyChildd extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StudyChild::create([
            'teacher_id'=> 1,
            'title'=> 'Belajar matematika dasar',
            'description'=> '
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab vero atque quas quis iusto quidem nulla enim? Exercitationem sequi sapiente aliquid, facere doloribus architecto vel at, adipisci deleniti consequatur iure.',
            'image'=> 'banner.png'
        ]);
    }
}
