<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email', 
        'salary',
        'department_id',
        'position_id'
    ];

    // Each employee belongs to one department
    public function department() {
        return $this->belongsTo(Departments::class);
    }

    // Each employee belongs to one position
    public function position() {
        return $this->belongsTo(Positions::class);
    }
}
