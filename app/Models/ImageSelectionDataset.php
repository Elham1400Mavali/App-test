<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageSelectionDataset extends Model
{
    use HasFactory;

    protected $fillable = [ 'url_image','image_ads_name'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ImageView()
    {
        return $this->belongsTo(ImageView::class);
    }
}
