<?php 

if(!isset($sideProductList)){
    $sideProductList = [];
} else {
    $sideProductList = $sideProductList;
}
?>

<div class="product-side-list">
    <div class="product-side-title">
        <span>Sản phẩm mới</span>
    </div>
    <div class="product-side-data">
    
    @if (isset($sideProductList) && count($sideProductList) > 0)
        @foreach($sideProductList as $product_item)
        <div class="product-side-data-item">
            <div class="product-side-data-item-thumb">
                <img src="{{asset('/storage/data/store/'.$product_item->thumb)}}" alt="{{$product_item->name}}"/>
            </div>
            <div class="product-side-data-item-title">
                <a href="{{url('/san-pham/'.$product_item->slug)}}">{{$product_item->name}}</a>
            <div class="product-side-data-item-price">
                <span>{{$product_item->show_price == 1 ? number_format($product_item->price,0,0,".").'đ' : "Liên hệ"}}</span>
            </div>
            </div>

        </div>
        @endforeach
    @else
    @endif
       
    </div>
</div>