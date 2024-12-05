<?php

if (!isset($item)) {
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
        <div class="product-box product-box-{{$product_item->id}}">
            @if ($product_item->price != $product_item->getPrice())
                <!-- <div class="badge-container absolute left top z-1" style="z-index: 6 !important;">
                    <div class="callout badge badge-square">
                        <div class="badge-inner secondary on-sale"><span class="onsale">
                            {{number_format(round(($product_item->price - $product_item->getPrice())*100)/$product_item->price)}} %
                        </span></div>
                    </div>
                </div> -->
            @endif
            <div class="product-thumb image-cover shine">
           
                <a href="{{ url('san-pham/'.ktc_str_convert($product_item->name).'_'.$product_item->id.'.html') }}">
                    <img class="lazy" width="500" data-original="{{ asset('documents/website/'.$product_item->image) }}" />
                </a>
                <!-- <div class="image-tools top right show-on-hover">
                    <div class="wishlist-icon"> <button href="#"  onClick="addToCart({{ $product_item->id }},'wishlist')" class="wishlist-button button is-outline circle icon" aria-label="Wishlist"> <i class="fa fa-heart-o"></i> </button>
                        <div class="wishlist-popup dark">
                            <div class="yith-wcwl-add-to-wishlist add-to-wishlist-303  wishlist-fragment on-first-load" data-fragment-ref="303" 
                            data-fragment-options="{&quot;base_url&quot;:&quot;http:\/\/mypham13.giaodienwebmau.com&quot;,&quot;wishlist_url&quot;:&quot;http:\/\/mypham13.giaodienwebmau.com\/wishlist\/&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:&quot;303&quot;,&quot;parent_product_id&quot;:&quot;303&quot;,&quot;product_type&quot;:&quot;variable&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Xem s\u1ea3n ph\u1ea9m y\u00eau th\u00edch&quot;,&quot;already_in_wishslist_text&quot;:&quot;S\u1ea3n ph\u1ea9m \u0111\u00e3 \u0111\u01b0\u1ee3c l\u01b0u y\u00eau th\u00edch&quot;,&quot;product_added_text&quot;:&quot;\u0110\u00e3 th\u00eam&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;before_image&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">


                                <div class="yith-wcwl-add-button">
                                    <a   data-title="{{__("guest.wishlist")}}">
                                         <span style="color: white; text-decoration: none;" >{{__("guest.wishlist")}}</span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover"></div>
                </div> -->
                <div class="buycart show-on-hover"><div class="add-to-cart-button"><a onClick="addToCart({{ $product_item->id }})" rel="nofollow" 
                    data-product_id="3265" class=" add_to_cart_button product_type_variable button primary is-outline mb-0 is-small">
                    <i class="fa fa-shopping-cart"></i> {{__("guest.cart_add_to")}}</a></div></div>
            </div>

            <div class="product-content">
                <div class="product-content__label">
                    <a href="{{ url('san-pham/'.ktc_str_convert($product_item->name).'_'.$product_item->id.'.html') }}">
                        <span>
                        @if(app()->getLocale()=="vi")
                            {{$product_item->name}}
                        @elseif(app()->getLocale()=="en")
                            {{$product_item->name_en}}
                        @endif
                        </span>
                    </a>
                </div>
                <div class="product-content__price" >
                            @if ($product_item->price != $product_item->getPrice())

                                    <span class="special-price"> <span class="price-label"></span> <span class="price"> {{ number_format($product_item->getPrice()) }} </span> </span>
                                    &nbsp;&nbsp;
                                    <span class="old-price"> <span class="price-label"></span> <span class="price"> {{ number_format($product_item->price) }} </span> </span>
                            @else
                                    <span class="regular-price">
                                        <span class="price">{{ number_format($product_item->price) }}</span>
                                     </span>
                            @endif
                </div>
            </div>
        </div>
    </div>