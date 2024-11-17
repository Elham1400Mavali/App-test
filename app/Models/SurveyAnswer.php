<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyAnswer extends Model
{
    use HasFactory;
    protected $fillable = [
        'education',
        'old',
        'gender',
        'marital_status',
        'income',
        'job'
    ];

}
