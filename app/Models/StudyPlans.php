<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudyPlans extends Model
{
    protected $connection = 'mysql';
    protected $table='study_plans';
    protected $guarded = [];

    public function students()
    {
        return $this->belongsTo(Students::class);
    }

    public function courses()
    {
        return $this->belongsTo(Courses::class);
    }
}
