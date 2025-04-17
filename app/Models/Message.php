<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Message extends Model
{
    use HasFactory;
    protected $table = 'messages';
    use HasSlug;
    public function getSlugOptions() : \Spatie\Sluggable\SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
    ];
public function getRouteKeyName()
{
    return 'slug';
}

}




