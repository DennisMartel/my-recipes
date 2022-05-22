<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    const BORRADOR = 1;
    const PUBLICADO = 2;

    protected $withCount = ['reviews'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getRatingAttribute()
    {
        if ($this->reviews_count) {
            return round($this->reviews->avg('rating'), 1);
        } else {
            return 5;
        }
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
