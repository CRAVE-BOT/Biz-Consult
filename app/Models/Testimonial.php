<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Testimonial extends Model
{
    use HasFactory;
    protected $table = 'testimonials';
    use HasSlug;
    public function getSlugOptions() : \Spatie\Sluggable\SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
    protected $fillable = [
        'name',
        'position',
        'image',
        'description',
    ];
    public function getRouteKeyName(){
        return 'slug';
    }
}
