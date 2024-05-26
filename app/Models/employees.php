<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    protected $table = 'employees_tbl';
    protected $primaryKey = 'id';

    protected $fillable = [
        'firstname',
        'lastname',
        'DOB',
        'phone',
    ];
    use HasFactory;
}
