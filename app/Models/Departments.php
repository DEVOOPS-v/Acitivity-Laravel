<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employees;

class Departments extends Model
{
    /** @use HasFactory<\Database\Factories\DepartmentsFactory> */
    use HasFactory;

    protected $fillable = [
        'name', 
        'description'
    ];

    public function employees() {
        return $this->hasMany(Employees::class);

    }
}

