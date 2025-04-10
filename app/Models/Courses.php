<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $connection = 'mysql';
    protected $table='courses';
    protected $guarded = [];

    public function units()
    {
        return $this->belongsTo(Units::class);
    }

    public function studyPlans()
    {
        return $this->hasMany(StudyPlans::class);
    }
}
