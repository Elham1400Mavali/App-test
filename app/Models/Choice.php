<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    use HasFactory;

    protected $fillable = ['image_id', 'path_dataset_choice'];

    public function image()
    {
        return $this->belongsTo(Advertisement::class);
    }
}
