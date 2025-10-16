<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    /** @use HasFactory<\Database\Factories\EmployeesFactory> */
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email', 
        'salary'
    ];

    public function departments() {
        return $this->belongsTo(Departments::class);
    }

    public function positions() {
        return $this->belongsTo(Positions::class);
    }
}
