<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Value extends Model
{

    protected $fillable = ['user_id','study_id','value'];

    public function user() {
        
        return $this->belongsTo(User::class);
    }

    public function study() {
        return $this->belongsTo(Study::class);
    }
}
