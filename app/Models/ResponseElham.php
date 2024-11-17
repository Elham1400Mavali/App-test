<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResponseElham extends Model
{
    use HasFactory;
    protected $fillable = [
        'step',
        'question',
        'completely_disagree_count',
        'disagree_count',
        'neutral_count',
        'agree_count',
        'completely_agree_count',
    ];
}
