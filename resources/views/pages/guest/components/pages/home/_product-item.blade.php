<?php 

if(!isset($item)){
    $product_item = (object)[
        "thumb" => "http://mypham7.giaodienwebmau.com/wp-content/uploads/2019/07/Kem-ch%E1%BB%91ng-n%E1%BA%AFng-Neutrogena-Beach-Defense-SPF-70-198ml.jpg",
        "name" => "Kem chống nắng Neutrogena Beach Defense SPF 70 198ml",
        "slug" => "san-pham-moi-00979973",
        "price" => "280.000"
    ];
} else {
    $product_item = $item;
}
?>
@if (isset($flick) && $flick==true)
<div class="product-container has-hover flick-set">
@else 
<div class="product-container has-hover">
@endif
    <div class="product-box">
        @if (isset($tag) && $tag)
            <span class="label-tag">{{$tag}}</span>
        @else 
            @if (isset($product_item) && ($product_item->flag==1))
                <span class="label-tag">Bán chạy</span>
            @endif
        @endif
        <div class="product-thumb image-cover shine">
            <a href="{{url('/san-pham/'.$product_item->slug)}}">
                <img class="lazy" width="500" data-original="{{asset('/storage/data/store/'.$product_item->thumb)}}" />
            </a>
        </div>

        <div class="product-content">
            <div class="product-content__label">
                <a href="{{url('/san-pham/'.$product_item->slug)}}">
                    <span>{{$product_item->name}}</span>
                </a>
            </div>
            <div class="product-content__price">
                <span>{{$product_item->show_price == 1 ? number_format($product_item->price,0,0,".").'đ' : "Liên hệ"}}</span>
                @if($product_item->show_promotion_price == 1)
                    <span class="product-content__price-promotion">{{number_format($product_item->promotion_price,0,0,".").'đ'}}</span>
                @endif
            </div>
            <div class="product-content__price">
           <form action="{{url('/gio-hang/them')}}" method="POST"
                              enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                    <input name="product_id" type="hidden" value="{{$item->id}}">
                                    <input type="hidden" id="product-quantity-input" name="product_quantity" value="1">
                                        <div class="add-to-cart-btn">
                                            <button><i class="fa  fa-shopping-cart" style="color: white"></i>&nbsp;Thêm vào giỏ</button>
                                        </div>
                        </form>
            </div>
            </div>
    </div>
</div>