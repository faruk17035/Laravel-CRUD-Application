<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'code', 'title', 'credit','teacher_id'
    ];

    public function teacher()
    {
        return $this->belongsTo('App\Teacher');
    }
}
