<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'middle_name',
        'surname',
        'sex',
        'age_range',
        'phone_number',
        'email',
        'marital_status',
        'address',
        'photo',
        'centre',
        'completed_growth_track',
    ];
}
