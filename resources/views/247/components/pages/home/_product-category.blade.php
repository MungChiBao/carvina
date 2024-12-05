<?php 

if(!isset($category_item)){
    $category_item = (object)[
        "thumb" => "http://mypham7.giaodienwebmau.com/wp-content/uploads/2019/07/Kem-ch%E1%BB%91ng-n%E1%BA%AFng-Neutrogena-Beach-Defense-SPF-70-198ml.jpg",
        "name" => "Chăm sóc da",
        "slug" => "san-pham-moi-00979973",
        "price" => "280.000"
    ];
}
?>

<div class="product-cat">
    <div class="product-cat-thumb">
        <a href="{{ url('shop/'.ktc_str_convert($category_item->name).'_'.$category_item->id.'.html') }}">
            <img class="lazy" data-original="{{ asset('documents/website/thumb/'.$category_item->image) }}" 
                alt="{{$category_item->name}}" width="300" height="300">
        </a>
    </div>
    <div class="product-cat-content">
        <h5 class="uppercase header-title">
        <a href="{{ url('shop/'.ktc_str_convert($category_item->name).'_'.$category_item->id.'.html') }}">
            {{ $category_item->name }}        
        </a>        
        </h5>      
        <!-- <p class="is-xsmall uppercase count">
            {{count($category_item->products)}}
        </p> -->
    </div>
</div>