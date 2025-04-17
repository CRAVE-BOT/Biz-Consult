<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Feature extends Model
{
    use HasFactory;
    protected $table = 'features';
    use HasSlug;
    public function getSlugOptions() : \Spatie\Sluggable\SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
    protected $fillable = [
      'title',
      'description',
    ];
    public function getRouteKeyName(){
        return 'slug';
    }
}
