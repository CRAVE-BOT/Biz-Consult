<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Setting extends Model
{
    use HasFactory;
    protected $table = 'settings';
    use HasSlug;
    public function getSlugOptions() : \Spatie\Sluggable\SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('address')
            ->saveSlugsTo('slug');
    }
    protected $fillable = [
        'address',
        'phone',
        'email',
        'facebook',
        'twitter',
        'youtube',
        'instagram',
        'linkedin',
    ];
    public function getRouteKeyName(){
        return 'slug';
    }

}
