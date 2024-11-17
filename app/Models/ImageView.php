<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageView extends Model
{
    use HasFactory;

    protected $table = 'image_views';

    // ستون کلید اصلی (id) به صورت پیش‌فرض در Eloquent موجود است
    protected $primaryKey = 'id';

    // دیگر تنظیمات مدل
    public $timestamps = true; // اگر فیلدهای created_at و updated_at موجود باشند

    protected $fillable = [
        'id',
		'ip_address',
        'image_name',
        'views',
    ];
}
