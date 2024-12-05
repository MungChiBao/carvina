<?php 

if(!isset($sideProductList)){
    $sideProductList = [];
} else {
    $sideProductList = $sideProductList;
}
?>

<div class="product-side-list">
    <div class="product-side-title">
        <span>{{__("guest.new_product")}}</span>
    </div>
    <div class="product-side-data">
    
    @if (isset($sideProductList) && count($sideProductList) > 0)
        @foreach($sideProductList as $product_item)
        <div class="product-side-data-item">
            <div class="product-side-data-item-thumb">
                <img src="{{ asset('documents/website/'.$product_item->image) }}" alt="{{$product_item->name}}"/>
            </div>
            <div class="product-side-data-item-title">
                <a href="{{ url('san-pham/'.ktc_str_convert($product_item->name).'_'.$product_item->id.'.html') }}">
                        @if(app()->getLocale()=="vi")
                            {{$product_item->name}}
                        @elseif(app()->getLocale()=="en")
                            {{$product_item->name_en}}
                        @endif
                        </a>
            <div class="product-side-data-item-price">
                <!-- <span>{{$product_item->show_price == 1 ? number_format($product_item->price,0,0,".").'đ' : __("guest.contact")}}</span> -->
            </div>
            </div>

        </div>
        @endforeach
    @else
    @endif
       
    </div>
</div>