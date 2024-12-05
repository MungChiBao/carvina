<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;

class CmsNews extends Model
{
    public $table = 'cms_news';

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

    public function getItemsNews($limit = null, $opt = null)
    {
        $query = (new CmsNews)->where('status', 1)->orderBy('sort', 'desc')->orderBy('id', 'desc');
        if (!(int) $limit) {
            return $query->get();
        } else
        if ($opt == 'paginate') {
            return $query->paginate((int) $limit);
        } else {
            return $query->limit($limit)->get();
        }

    }
}
