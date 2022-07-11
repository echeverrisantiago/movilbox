<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'APPX_employee';
    public $timestamps = true;

    protected $fillable = [
        'firstname',
        'lastname',
        'department_id',
        'salary',
        'educationlevel_id'
    ];
}
