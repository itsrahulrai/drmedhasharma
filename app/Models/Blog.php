<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'image',
        'content',
        'meta_title',
        'meta_description',
        'canonical_url',
        'robots',
        'status',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
