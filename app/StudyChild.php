<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudyChild extends Model
{
    protected $fillable   = ['teacher_id','title','description','image','study_id'];

    public function teacher() {
        return $this->belongsTo(Teacher::class);
    }

    public function study() {
        return $this->belongsTo(Study::class);
    }
}
