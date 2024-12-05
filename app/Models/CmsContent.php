<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;

class CmsContent extends Model
{
    public $table = 'cms_conten';
    use HasSlug;

    
    public function setSlugAttribute1($value)
    {
        if (! $value) {
            $slugOptions = $this->getSlugOptions();
            $this->attributes['slug'] = $this->slug ?? $this->getSlug($this->title, $slugOptions);
        } else {
            $this->attributes['slug'] = $value;
        }
    }
    
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
    public function category()
    {
        return $this->belongsTo('App\Models\CmsCategory', 'category_id', 'id');
    }

    public function images()
    {
        return $this->hasMany('App\Models\CmsImage', 'content_id', 'id');
    }

    public static function resultSearchArticle($keyword, $sort_by = null, $sort_order = null)
    {
        $query =  self::where('status', 1)
            ->where(function ($sql) use ($keyword) {
                $sql->where('title', 'like', '%' . $keyword . '%');
            });


        if (($sort_by) && ($sort_order)) {
            $query->orderBy($sort_by, $sort_order)
                ->orderBy('id', 'desc')
                ->orderBy('sort', 'desc');
        } else {
            $query->orderBy('id', 'desc')
                ->orderBy('id', 'desc');
        }
        return $query->paginate(12);
    }
}
