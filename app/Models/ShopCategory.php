<?php

namespace App\Models;

use App\Models\Config;
use App\Models\ShopProduct;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;


class ShopCategory extends Model
{

    public $timestamps = false;
    public $table      = 'shop_category';

    use HasSlug;

    
    public function setSlugAttribute1($value)
    {
        if (! $value) {
            $slugOptions = $this->getSlugOptions();
            $this->attributes['slug'] = $this->slug ?? $this->getSlug($this->name, $slugOptions);
        } else {
            $this->attributes['slug'] = $value;
        }
    }
    
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
    public function products()
    {
        return $this->hasMany('App\Models\ShopProduct', 'category_id', 'id')->take(4)->where('status', 1)->orderByDesc('id');
    }

    public function products_hot()
    {
        return $this->hasMany('App\Models\ShopProduct', 'category_id', 'id')->take(4)->where('status', 1)->where('type', 2)->orderByDesc('id');
    }

    public function listCate()
    {
        $list   = [];
        $result = $this->select('name', 'id', 'parent')
            ->where('parent', 0)
            ->get()
            ->toArray();
        foreach ($result as $value) {
            $list[$value['id']] = $value['name'];
            if ($this->getChildrens($value['id'])->count() > 0) {
                $this->listCateExceptRoot($value['id'], $list);
            }
        }
        return $list;
    }

    public function listCateExceptRoot($id, &$list, $st = '--')
    {
        $result = $this->select('name', 'id', 'parent')
            ->where('parent', $id)
            ->get()
            ->toArray();
        foreach ($result as $value) {
            $list[$value['id']] = $st . ' ' . $value['name'];
            $this->listCateExceptRoot($value['id'], $list, $st . '--');
        }

    }

    public function checkChild($id)
    {
        return $this->where('parent', $id)->count();
    }

    public function arrChild($id)
    {
        return $this->where('parent', $id)->pluck('id')->all();
    }

/**
 * Get category parent
 * @return [type]     [description]
 */
    public function getParent()
    {
        return $this->find($this->parent);

    }
/**
 * Get category child
 * @param  [type] $id [description]
 * @return [type]     [description]
 */
    public function getCateChild($id)
    {
        return $this->with('products')->where('parent', $id)->get();
    }
/**
 * Get all products in category, include child category
 * @param  [type] $id    [description]
 * @param  [type] $limit [description]
 * @return [type]        [description]
 */
    public function getProductsToCategory($id, $limit = null, $opt = null, $sort_by= null, $sort_order= null, $brand= null, $keyword=null, $price_start = null, $price_end = null)
    {


        $arrChild1   = $this->arrChild($id);     
        // dd($arrChild);
        // $arrChild[] = $id;
        // return $arrChild1;
        $data = [];
        foreach($arrChild1 as $item){
            $array2 = $this->arrChild($item);
            if($array2){
                $data = array_merge($data, $array2);
            }
        }
        $arrChild = array_merge($data, $arrChild1, [$id]);
        // return $data;
        if( count($arrChild)  == 1){

            $query      = (new ShopProduct)->where('status', 1)->where('category_id', $id)
            ->where(function ($query) use($sort_by, $keyword, $brand, $price_start, $price_end) {
                 if ($brand){
                    $query->where('brand_id', $brand);
                }

                // if (($price_start || $price_start==0) && ($price_end)){
                //     $query->whereBetween('price', [$price_start, $price_end]);
                // }
                if (($price_start >= 0) && ($price_end > 0)){
                    $query->where('price', '>=', $price_start)->where('price', '<', $price_end);
                }
                // if ($keyword){
                //     $query->where('name', 'like', '%' . $keyword . '%');
                // }
            });
        }else{
            $query      = (new ShopProduct)->where('status', 1)->whereIn('category_id', $arrChild)
            ->where(function ($query) use($sort_by, $keyword, $brand, $price_start, $price_end) {
                
                if ($brand){
                    $query->where("brand_id", $brand);
                }

                if (($price_start >= 0 ) && ($price_end > 0)){
                    $query->where('price', '>=', $price_start)->where('price', '<', $price_end);

                }
                // if ($keyword){
                //     $query->where('name', 'like', '%' . $keyword . '%');
                // }
                // if ($brand){
                //     $query->where("brand_id", $brand);
                // }
            });
        }
         
        // return var_dump($arrChild);
        // return $sort_by.$sort_order;
        // return  (new ShopProduct)->where('status', 1)->paginate(10);
        $query->orWhere('category_other', $id);
        $query->orWhereRaw('category_other like "' . $id . ',%" or category_other like "%,' . $id . '" or category_other like "%,' . $id . ',%"');

        
            //Hidden product out of stock

        if (($sort_by) && ($sort_order)){
            $query->orderBy($sort_by, $sort_order)
            ->orderBy('id', 'desc')
            ->orderBy('sort', 'desc');
        } else {
            $query->orderBy('id', 'desc')
            ->orderBy('sort', 'desc');
        }
        
        if ((int) Config::select('value')->where('key', 'product_display_out_of_stock')->first()->value == 0) {
            $query = $query->where('stock', '>', 0);
        }
        if (!(int) $limit) {
            return $query->get();
        } else
        if ($opt == 'paginate') {
            return $query->paginate((int) $limit);
        } else
        if ($opt == 'random') {
            return $query->inRandomOrder()->limit($limit)->get();
        } else {
            return $query->limit($limit)->get();
        }

    }
/**
 * [getCategories description]
 * @param  [type] $parent [description]
 * @return [type]         [description]
 */
    public static function getCategories($parent)
    {
        return self::where('status', 1)->where('parent', $parent)->orderBy('sort', 'asc')->orderBy('id', 'desc')->get();
    }

/**
 * Get category child
 * @param  [type] $id [description]
 * @return [type]     [description]
 */
    public function getChildrens($id)
    {
        return $this->with('products')->where('status', 1)->where('parent', $id)->get();
    }

}
