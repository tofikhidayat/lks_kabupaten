<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Study extends Model
{

    protected $fillable = ['teacher_id','admin_id','title','description'];
    
    public function teacher() {
        return $this->belongsTomany(Teacher::class);
    }

    public function child() {
        return $this->hasMany(StudyChild::class);
    }

    public function value() {
        return $this->hasMany(Value::class);
    }
}
