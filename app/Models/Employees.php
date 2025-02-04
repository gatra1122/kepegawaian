<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    protected $table = 'employees';

    public $timestamps = false;

    protected $fillable = [
        'nama', 'nip', 'position', 'department', 'salary', 'join_date',
    ];

    protected $dates = [
        'join_date',
    ];
}
