@extends($theme . '.shop_layout', ['title' => $product->name, 'header' => ['description' => $description, 'keyword' => $keyword, 'og_image' => $og_image]])
@push('style')
@endpush
@section('content')
    <style>
        @media only screen and (max-width: 768px) {
            #main {
                padding-top: 105px !important;
            }
        }

        .more-content {
            height: 1300px;
            overflow: hidden;
        }

        .display-none {
            display: none;
        }
    </style>
    <main id="main" style="padding-top:155px">

        <div class="shop-container">

            <div class="container">
            </div>
            <!-- /.container -->
            <div id="product-161"
                class="post-161 product type-product status-publish has-post-thumbnail product_cat-boc-noi-that product_cat-mescerdes first instock sale shipping-taxable purchasable product-type-simple">
                <div class="product-main">
                    <div class="row content-row row-divided row-large row-reverse">
                        <div class="col large-9">
                            <div class="row">
                                <div class="large-6 col">

                                    <div class="product-images relative mb-half has-hover woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images"
                                        data-columns="4">

                                        @if ($product->unpromotion_price && $product->unpromotion_price > 0)
                                            @php
                                                $percent = 100 - intval(($product->price / $product->unpromotion_price) * 100, 0);
                                            @endphp

                                            <div class="badge-container is-larger absolute left top z-1">
                                                <div class="callout badge badge-square">
                                                    <div class="badge-inner secondary on-sale"><span
                                                            class="onsale">-{{ $percent }}%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                        <div class="image-tools absolute top show-on-hover right z-3">
                                        </div>

                                        <figure
                                            class="woocommerce-product-gallery__wrapper product-gallery-slider slider slider-nav-small mb-half"
                                            data-flickity-options='{
        "cellAlign": "center",
        "wrapAround": true,
        "autoPlay": 3000,
        "prevNextButtons":true,
        "adaptiveHeight": true,
        "imagesLoaded": true,
        "lazyLoad": 1,
        "dragThreshold" : 15,
        "pageDots": false,
        "rightToLeft": false       }'>
                                            <div style="height: 364px; overflow:hidden"
                                                data-thumb="{{ asset('documents/website/' . $product->image) }}"
                                                class="woocommerce-product-gallery__image slide first">
                                                <a href="{{ asset('documents/website/' . $product->image) }}"><img
                                                        width="434" height="286"
                                                        src="{{ asset('documents/website/' . $product->image) }}"
                                                        class="wp-post-image" alt="" title="product9"
                                                        data-caption=""
                                                        data-src="{{ asset('documents/website/' . $product->image) }}"
                                                        data-large_image="{{ asset('documents/website/' . $product->image) }}"
                                                        data-large_image_width="434" data-large_image_height="286"
                                                        srcset="{{ asset('documents/website/' . $product->image) }} 434w, {{ asset('documents/website/' . $product->image) }} 300w"
                                                        sizes="(max-width: 434px) 100vw, 434px"></a>
                                            </div>
                                            @if (count($product->images) > 0)
                                                @foreach ($product->images as $item)
                                                    <div style="height: 364px; overflow:hidden"
                                                        data-thumb="{{ asset('documents/website/' . $item->image) }}"
                                                        class="woocommerce-product-gallery__image slide first">
                                                        <a href="{{ asset('documents/website/' . $item->image) }}"><img
                                                                width="434" height="286"
                                                                src="{{ asset('documents/website/' . $item->image) }}"
                                                                class="wp-post-image" alt="" title="product9"
                                                                data-caption=""
                                                                data-src="{{ asset('documents/website/' . $item->image) }}"
                                                                data-large_image="{{ asset('documents/website/' . $item->image) }}"
                                                                data-large_image_width="434" data-large_image_height="286"
                                                                srcset="{{ asset('documents/website/' . $item->image) }} 434w, {{ asset('documents/website/' . $item->image) }} 300w"
                                                                sizes="(max-width: 434px) 100vw, 434px"></a>
                                                    </div>
                                                @endforeach
                                            @else
                                            @endif



                                        </figure>
                                        {{-- 
                                        <div class="image-tools absolute bottom left z-3">
                                            <a href="#product-zoom"
                                                class="zoom-button button is-outline circle icon tooltip hide-for-small"
                                                title="Zoom">
                                                <i class="icon-expand"></i> </a>
                                        </div> --}}
                                    </div>

                                    <div class="product-thumbnails thumbnails slider-no-arrows slider row row-small row-slider slider-nav-small small-columns-4"
                                        data-flickity-options='{
                                        "cellAlign": "left",
                                        "wrapAround": false,
                                        "autoPlay": false,
                                        "prevNextButtons":true,
                                        "asNavFor": ".product-gallery-slider",
                                        "percentPosition": true,
                                        "imagesLoaded": true,
                                        "pageDots": false,
                                        "rightToLeft": false,
                                        "contain": true
                                        }'>
                                        <div class="col is-nav-selected first">
                                            <a>
                                                <img style="width:100px; height:100px"
                                                    src="{{ asset('documents/website/' . $product->image) }}" width="100"
                                                    height="100" class="attachment-woocommerce_thumbnail"> </a>
                                        </div>

                                        @if (count($product->images) > 0)
                                            @foreach ($product->images as $item)
                                                <div class="col">
                                                    <a>
                                                        <img style="width:100px; height:100px"
                                                            src="{{ asset('documents/website/' . $item->image) }}"
                                                            width="100" height="100"
                                                            class="attachment-woocommerce_thumbnail"> </a>
                                                </div>
                                            @endforeach
                                        @endif

                                    </div>


                                </div>


                                <div class="product-info summary entry-summary col col-fit product-summary">
                                    <nav class="woocommerce-breadcrumb breadcrumbs"><a href="{{ url('/') }}">Trang
                                            chủ</a>
                                        <span class="divider">&#47;</span> <a
                                            href="{{ url($product->category->slug . '.html') }}">{{ $product->category->name }}</a>
                                    </nav>
                                    <h1 class="product-title entry-title">
                                        {{ $product->name }}</h1>

                                    @if ($product->price == 0)
                                        <div class="price-wrapper">
                                            <p class="price product-page-price price-on-sale">
                                                <ins><span class="woocommerce-Price-amount amount">Liên hệ</ins>
                                            </p>
                                        </div>
                                    @elseif ($product->unpromotion_price && $product->unpromotion_price > 0)
                                        <div class="price-wrapper">
                                            <p class="price product-page-price price-on-sale">
                                                <span style="text-decoration:line-through; opacity:0.6"
                                                    class="woocommerce-Price-amount amount">{{ number_format($product->unpromotion_price) }}<span
                                                        class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                                                <ins><span
                                                        class="woocommerce-Price-amount amount">{{ number_format($product->price) }}<span
                                                            class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins>
                                            </p>
                                        </div>
                                    @else
                                        <div class="price-wrapper">
                                            <p class="price product-page-price price-on-sale">
                                                <ins><span
                                                        class="woocommerce-Price-amount amount">{{ number_format($product->price) }}<span
                                                            class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins>
                                            </p>
                                        </div>
                                    @endif


                                    <div class="product-short-description">
                                        {!! $product->description !!}
                                    </div>
                                    @if ($product->price == 0)
                                    @else
                                        <p class="stock in-stock">Còn hàng</p>
                                    @endif


                                    <form class="cart" style="padding-top: 20px"
                                        enctype='multipart/form-data'>

                                        <input type="hidden" id="quantity" value="1">

                                        @if ($product->price == 0)
                                            <a href="#register-modal"><button style="background-color: green"
                                                    type="button" name="" value="161"
                                                    class="single_add_to_cart_button button alt">Nhận tư vấn</button></a>
                                        @else
                                            <button onclick="buyNow( {{ $product->id }} )" type="button"
                                                name="" value="161"
                                                class="single_add_to_cart_button button alt">Thêm vào giỏ</button>

                                            <a href="#register-modal"><button style="background-color: green"
                                                    type="button" name="" value="161"
                                                    class="single_add_to_cart_button button alt">Nhận tư vấn</button></a>
                                        @endif



                                    </form>


                                    <div class="product_meta">

                                        <span class="posted_in">Danh mục: <a
                                                href="{{ url($product->category->slug . '.html') }}"
                                                rel="tag">{{ $product->category->name }}</a></span>

                                    </div>

                                </div>
                                <!-- .summary -->


                            </div>
                            <!-- .row -->
                            <div class="product-footer">

                               
                                <div class="woocommerce-tabs container tabbed-content">
                                    <ul
                                        class="product-tabs  nav small-nav-collapse tabs nav nav-uppercase nav-line nav-left">
                                        <li class="description_tab  active">
                                            <a href="#tab-description">Mô tả</a>
                                        </li>
                                        {{-- <li class="reviews_tab  ">
                                            <a href="#tab-reviews">Đánh giá (0)</a>
                                        </li> --}}
                                    </ul>
                                    <div class="tab-panels" style="color: #000 !important">

                                        <div class="panel entry-content active more-content" id="tab-description">

                                            {!! $product->content !!}

                                        </div>
                                        <div id="show-more-content" style="margin-top:20px">
                                            <button id="more-content"
                                                style="width:100%; border:1px solid rgb(65, 146, 199); color: rgb(65, 146, 199); border-radius:10px;">Xem
                                                thêm &nbsp;&nbsp; <i class="fa-sharp fa-solid fa-caret-down"></i></button>
                                        </div>

                                        <div class="display-none" id="hide-more-content" style="margin-top:20px">
                                            <button id="hide-content"
                                                style="width:100%; border:1px solid rgb(65, 146, 199); color: rgb(65, 146, 199); border-radius:10px;">Thu
                                                gọn &nbsp;&nbsp; <i class="fa-sharp fa-solid fa-caret-up"></i></i></button>
                                        </div>

                                        <div class="fb-comments" data-href="https://carvina.aivyjsc.com/" data-width="100%"
                                        data-numposts="5"></div>
    


                                    </div>
                                    <!-- .tab-panels -->
                                </div>
                                <!-- .tabbed-content -->


                                <div class="related related-products-wrapper product-section">

                                    <h3
                                        class="product-section-title container-width product-section-title-related pt-half pb-half uppercase">
                                        Sản phẩm tương tự </h3>



                                    <div class="row large-columns-4 medium-columns- small-columns-2 row-small">
                                        <div class="slider-wrapper relative " id="slider-1002406018">
                                            <div class="slider slider-nav-dots-simple slider-nav-circle slider-nav-large slider-nav-light slider-style-normal"
                                                data-flickity-options='{
                                "cellAlign": "center",
                                "imagesLoaded": true,
                                "lazyLoad": 1,
                                "freeScroll": false,
                                "wrapAround": false,
                                "autoPlay": 1500,
                                "pauseAutoPlayOnHover" : true,
                                "prevNextButtons": true,
                                "contain" : true,
                                "adaptiveHeight" : true,
                                "dragThreshold" : 5,
                                "percentPosition": true,
                                "pageDots": true,
                                "rightToLeft": false,
                                "draggable": true,
                                "selectedAttraction": 0.1,
                                "parallax" : 0,
                                "friction": 0.6        }'>
                                        @if (count($products_other) > 0)
                                            @foreach ($products_other as $product)
                                                <div
                                                    class="product-small col has-hover post-157 product type-product status-publish has-post-thumbnail product_cat-boc-noi-that product_cat-mescerdes last instock shipping-taxable purchasable product-type-simple">
                                                    <div class="col-inner">

                                                        <div class="badge-container absolute left top z-1">
                                                        </div>
                                                        <div class="product-small box ">
                                                            <div class="box-image">

                                                                <div class="image-none" style="height: 130px; width:100%; overflow:hidden">
                                                                    <a
                                                                        href="{{ asset('documents/website/' . $product->image) }}">
                                                                        <img  width="434" height="286"
                                                                            src="{{ asset('documents/website/' . $product->image) }}"
                                                                            data-src="{{ asset('documents/website/' . $product->image) }}"
                                                                            class="lazy-load attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                                            alt="" srcset=""
                                                                            data-srcset="{{ asset('documents/website/' . $product->image) }} 434w, {{ asset('documents/website/' . $product->image) }} 300w"
                                                                            sizes="(max-width: 434px) 100vw, 434px"> </a>
                                                                </div>
                                                                <div class="image-tools is-small top right show-on-hover">
                                                                </div>
                                                                <div
                                                                    class="image-tools is-small hide-for-small bottom left show-on-hover">
                                                                </div>
                                                                <div
                                                                    class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                                                </div>
                                                            </div>
                                                            <!-- box-image -->

                                                            <div
                                                                class="box-text box-text-products text-center grid-style-2">
                                                                <div 
                                                                    class="title-wrapper">
                                                                    <p style="font-size:13px; min-height:70px"  class="name product-title"><a
                                                                            href="#">{{ $product->name }}</a></p>
                                                                </div>
                                                                <div class="price-wrapper" style="height: 36px !important">
                                                                    @if (isset($product->unpromotion_price) && $product->unpromotion_price > 0)
                                                                        <span
                                                                            style="text-decoration:line-through; opacity:0.6"
                                                                            class="woocommerce-Price-amount amount">{{ number_format($product->unpromotion_price) }}<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                                                                        <span class="price"><span
                                                                                class="woocommerce-Price-amount amount">{{ number_format($product->price) }}<span
                                                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                                                                        </span>
                                                                    @elseif ($product->price == 0)
                                                                        <span class="price"><span
                                                                                class="woocommerce-Price-amount amount">Liên
                                                                                hệ
                                                                            </span></span>
                                                                        @else
                                                                            <span class="price"><span
                                                                                    class="woocommerce-Price-amount amount">{{ number_format($product->price) }}<span
                                                                                        class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                                                                            </span>
                                                                    @endif

                                                                </div>
                                                            </div>
                                                            <!-- box-text -->
                                                        </div>
                                                        <!-- box -->
                                                    </div>
                                                    <!-- .col-inner -->
                                                </div>
                                            @endforeach
                                        @else
                                            <h3 style="font-size:13px; padding-left:10px">Sản phẩm đang cập nhật</h3>
                                        @endif

                                        <!-- col -->


                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- col large-9 -->

                        @include($theme . '.components.sidebar_left')
                        <!-- col large-3 -->

                    </div>
                    <!-- .row -->
                </div>
                <!-- .product-main -->
            </div>


        </div>
        <!-- shop container -->

    </main>
    @include($theme . '.components.contact-modal')
@endsection

@section('breadcrumb')
    {{-- <div class="breadcrumbs" style="padding: 15px 0">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul style="list-style-type: none; display: flex;">
                        <li class="home"> <a title="Go to Home Page" href="{{ url('/') }}">
                                {{ __('guest.home') }}</a><span><i class="fa fa-chevron-right"
                                    style=" margin: 0 5px; font-size: 10px; "></i></span></li>


                        @if (app()->getLocale() == 'vi')
                            @if ($product->category)
                                <li class=""> <a title="{{ $product->category->name }}"
                                        href="{{ url($product->category->slug . '.html') }}">{{ $product->category->name }}</a><span><i
                                            class="fa fa-chevron-right"
                                            style=" margin: 0 5px; font-size: 10px; "></i></span></li>

                                <li class=""> <a title="{{ $product->category->name }}"
                                        href="{{ url($product->slug . '.html') }}">{{ $product->name }}</a>
                                </li>
                            @endif
                        @elseif(app()->getLocale() == 'en')
                            @if ($product->category)
                                <li class=""> <a title="{{ $product->category->name_en }}"
                                        href="{{ url($product->category->slug . '.html') }}">{{ $product->category->name_en }}</a><span><i
                                            class="fa fa-chevron-right"
                                            style=" margin: 0 5px; font-size: 10px; color: #fd669f; "></i></span></li>

                                <li class=""> <a title="{{ $product->category->name_en }}"
                                        href="{{ url($product->slug . '.html') }}">{{ $product->name_en }}</a>
                                </li>
                            @endif
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div> --}}
@endsection

@push('scripts')
    <script>
        $('#more-content').click(function(e) {
            e.preventDefault();
            $('#tab-description').removeClass('more-content');
            $('#hide-more-content').removeClass('display-none');
            $('#show-more-content').addClass('display-none');
        });

        $('#hide-content').click(function(e) {
            e.preventDefault();
            $('#tab-description').addClass('more-content');
            $('#show-more-content').removeClass('display-none');
            $('#hide-more-content').addClass('display-none');
        });
    </script>

    <script type='text/javascript'>
        /* <![CDATA[ */
        var wc_single_product_params = {
            "i18n_required_rating_text": "Vui l\u00f2ng ch\u1ecdn m\u1ed9t m\u1ee9c \u0111\u00e1nh gi\u00e1",
            "review_rating_required": "yes",
            "flexslider": {
                "rtl": false,
                "animation": "slide",
                "smoothHeight": true,
                "directionNav": false,
                "controlNav": "thumbnails",
                "slideshow": false,
                "animationSpeed": 500,
                "animationLoop": false,
                "allowOneSlide": false
            },
            "zoom_enabled": "",
            "zoom_options": [],
            "photoswipe_enabled": "1",
            "photoswipe_options": {
                "shareEl": false,
                "closeOnScroll": false,
                "history": false,
                "hideAnimationDuration": 0,
                "showAnimationDuration": 0
            },
            "flexslider_enabled": ""
        };
        /* ]]> */
    </script>

    <script type="application/ld+json">
{!!$schema!!}
</script>
@endpush
