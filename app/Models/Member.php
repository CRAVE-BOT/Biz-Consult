<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Member extends Model
{
    use HasFactory;
    protected $table = 'members';
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
     'facebook',
     'twitter',
     'linkedin',
 ];
    public function getRouteKeyName(){
        return 'slug';
    }
}
