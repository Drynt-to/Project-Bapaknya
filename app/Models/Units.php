<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Units extends Model
{

    use HasFactory;

    protected $connection = 'mysql';
    protected $table='units';
    protected $guarded = [];
    // protected $fillable = ['name', 'unit_level', 'is_active'];

    public static array $rules = [
        'name' => 'required|max:255',
        'unit_level' => 'required|integer',
        'is_active' => 'nullable',
    ];

    public static array $messages = [
        'name.required' => 'Please enter the unit name',
        'name.max' => 'The unit name should not exceed 255 characters',
        'unit_level.required' => 'Please enter the unit level',
        'unit_level.integer' => 'The unit level should be an integer',
    ];

    public function students()
    {
        return $this->hasMany(Students::class,'unit_id');
    }

    public function courses()
    {
        return $this->hasMany(Courses::class);
    }
}
