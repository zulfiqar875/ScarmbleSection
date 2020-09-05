<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $primarykey = 'SCid';

    public function Course()
    {
        return $this->hasMany(Course::class, 'SCid', 'SCid');
    }
}
