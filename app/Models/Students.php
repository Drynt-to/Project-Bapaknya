<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Students extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table='students';
    protected $guarded = [];

    public function units()
    {
        return $this->belongsTo(Units::class, 'unit_id');
    }

    public function studyPlans()
    {
        return $this->hasMany(StudyPlans::class);
    }
}
