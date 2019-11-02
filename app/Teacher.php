<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{

    protected $fillable = [
        'name','email','address','nuptk','password'
    ];
 
    public function study() {
        return $this->hassMany(StudyChild::class);
    }
}
