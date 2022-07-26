<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\HasTranslatableSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;

class ProjectCategory extends Model
{
    use HasFactory;
    use HasTranslations;
    use HasSlug;

    protected $table = 'project_categories';
    public $translatable = ['title'];


    protected $guarded = [];

    public $sluggable = 'title.en';


    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug')
            ->usingLanguage('en');
    }


}
