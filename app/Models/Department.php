<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $table = 'APPX_department';
    public $timestamps = true;

    protected $fillable = [
        'department_name',
        'department_city'
    ];
}
