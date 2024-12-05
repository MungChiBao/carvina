@extends($theme . '.shop_layout')
@push('style')
    <style>
        .show-more {
            background: #e6004b;
            color: #fff;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 6px;
            margin-bottom: 10px;
        }

        .show-more:hover {
            background: #8d002e;
            cursor: pointer;
            color: #fff;
            font-weight: bold;
        }

        .buy-now {
            background: #543f8b;
            color: #fff;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 6px;
            margin-bottom: 10px;
        }

        .buy-now:hover {
            background: #8d002e;
            cursor: pointer;
            color: #fff;
            font-weight: bold;
        }
    </style>
@endpush
@section('slider')
@endsection
@section('content')
    <style>
        @media only screen and (max-width: 768px) {
            #main {
                padding-top: 105px !important;
            }
        }
    </style>
    <main id="main" style="padding-top:135px">

        <input type="hidden" id="quantity" value="1" />
        <div id="content" role="main" class="content-area">


            <div class="slider-wrapper relative " id="slider-1002406018">
                <div class="slider slider-nav-dots-simple slider-nav-circle slider-nav-large slider-nav-light slider-style-normal"
                    data-flickity-options='{
    "cellAlign": "center",
    "imagesLoaded": true,
    "lazyLoad": 1,
    "freeScroll": false,
    "wrapAround": true,
    "autoPlay": 3000,
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

                    @if (count($banners_top) > 0)
                        @foreach ($banners_top as $item)
                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_458192074">
                                <div class="img-inner image-cover dark" style="padding-top:33%;">
                                    <img width="1366" height="504" alt="{{ $item->html }}" title="{{ $item->html }}"
                                        class="attachment-original size-original"
                                        srcset="{{ 'documents/website/' . $item->image }} 1366w, {{ 'documents/website/' . $item->image }} 500w, {{ 'documents/website/' . $item->image }} 300w, {{ 'documents/website/' . $item->image }} 768w, {{ 'documents/website/' . $item->image }} 1024w"
                                        sizes="(max-width: 1366px) 100vw, 1366px">
                                </div>

                                <style scope="scope">
                                    #image_458192074 {
                                        width: 100%;
                                    }
                                </style>
                            </div>
                        @endforeach
                    @else
                    @endif

                </div>

                <div class="loading-spin dark large centered"></div>

                <style scope="scope">

                </style>
            </div>
            <!-- .ux-slider-wrapper -->

            {{-- 
        <div class="row row-small row-banner" id="row-591371893">
            <div class="col medium-4 small-12 large-4">
                <div class="col-inner">
                    <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1189503969">
                        <div class="img-inner dark">
                            <img width="400" height="151" src="wp-content/uploads/2018/06/BANNER2.jpg"
                                class="attachment-original size-original" alt=""
                                srcset="wp-content/uploads/2018/06/BANNER2.jpg 400w, wp-content/uploads/2018/06/BANNER2-300x113.jpg 300w"
                                sizes="(max-width: 400px) 100vw, 400px">
                        </div>

                        <style scope="scope">
                            #image_1189503969 {
                                width: 100%;
                            }
                        </style>
                    </div>

                </div>
            </div>
            <div class="col medium-4 small-12 large-4">
                <div class="col-inner">
                    <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1594579390">
                        <div class="img-inner dark">
                            <img width="400" height="151" src="wp-content/uploads/2018/06/BANNER1.jpg"
                                class="attachment-original size-original" alt=""
                                srcset="wp-content/uploads/2018/06/BANNER1.jpg 400w, wp-content/uploads/2018/06/BANNER1-300x113.jpg 300w"
                                sizes="(max-width: 400px) 100vw, 400px">
                        </div>

                        <style scope="scope">
                            #image_1594579390 {
                                width: 100%;
                            }
                        </style>
                    </div>

                </div>
            </div>
            <div class="col medium-4 small-12 large-4">
                <div class="col-inner">
                    <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_895324975">
                        <div class="img-inner dark">
                            <img width="400" height="151" src="wp-content/uploads/2018/06/banner3.jpg"
                                class="attachment-original size-original" alt=""
                                srcset="wp-content/uploads/2018/06/banner3.jpg 400w, wp-content/uploads/2018/06/banner3-300x113.jpg 300w"
                                sizes="(max-width: 400px) 100vw, 400px">
                        </div>

                        <style scope="scope">
                            #image_895324975 {
                                width: 100%;
                            }
                        </style>
                    </div>

                </div>
            </div>

            <style scope="scope">
                #row-591371893>.col>.col-inner {
                    padding: 0px 0px 0 0px;
                }
            </style>
        </div> --}}
            <section class="section danh-muc" id="section_666867822">
                {{-- <div class="bg section-bg fill bg-fill  bg-loaded">



                </div> --}}
                <div class="woocommerce-tabs container tabbed-content">

                    <div class="category-title">
                        <h1 class="tieu-de" style="width:100%; text-align:center"><i class="fa fa-cart-plus"
                                aria-hidden="true"></i>&nbsp; Sản phẩm bán chạy</h1>

                    </div>
                    <ul class="product-tabs  nav small-nav-collapse tabs nav nav-uppercase nav-line nav-left"
                        id="small-nav-collapse">
                        @if (count($categories_product_hot) > 0)
                            @foreach ($categories_product_hot as $item)
                                <li class="description_tab">
                                    <a id="description_tab" href="#tab-description">{{ $item->name }}</a>
                                </li>
                            @endforeach
                        @else
                        @endif


                    </ul>


                    <div class="tab-panels">

                        @if (count($categories_product_hot) > 0)
                            @foreach ($categories_product_hot as $item)
                                <div class="panel entry-content " id="tab-description">


                                    <div class="row large-columns-4 medium-columns-4 small-columns-2 row-small">

                                        @foreach ($item->products_hot as $product)
                                            <div class="col">
                                                <div class="col-inner">

                                                    @if ($product->unpromotion_price && $product->unpromotion_price > 0)
                                                        @php
                                                            $percent = 100 - intval(($product->price / $product->unpromotion_price) * 100, 0);
                                                        @endphp

                                                        <div class="badge-container absolute left top z-1">
                                                            <div class="callout badge badge-square">
                                                                <div class="badge-inner secondary on-sale"><span
                                                                        class="onsale">-{{ $percent }}%</span></div>
                                                            </div>
                                                        </div>
                                                    @endif



                                                    <div class="product-small box has-hover box-normal box-text-bottom">
                                                        <div class="box-image">
                                                            <div class="image-overlay-add image-cover"
                                                                style="padding-top:90%;">
                                                                <a href="{{ url($product->slug . '.html') }}">
                                                                    <img width="434" height="286"
                                                                        data-src="{{ asset('documents/website/' . $product->image) }}"
                                                                        class="lazy-load attachment-original size-original wp-post-image"
                                                                        alt="{{ $product->name }}"
                                                                        title="{{ $product->name }}" srcset=""
                                                                        data-srcset="{{ asset('documents/website/' . $product->image) }} 434w, {{ asset('documents/website/' . $product->image) }} 300w"
                                                                        sizes="(max-width: 434px) 100vw, 434px"> </a>
                                                                <div class="overlay fill"
                                                                    style="background-color: rgba(191, 0, 0, 0.2)"></div>
                                                            </div>
                                                            <div class="image-tools top right show-on-hover">
                                                            </div>
                                                            <div
                                                                class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                                            </div>
                                                        </div>
                                                        <!-- box-image -->

                                                        <div class="box-text text-center">
                                                            <div class="title-wrapper">
                                                                <p class="name product-title"><a
                                                                        href="{{ url($product->slug . '.html') }}">{{ $product->name }}</a>
                                                                </p>
                                                            </div>
                                                            <div class="price-wrapper">
                                                                <span class="price">
                                                                    @if ($product->unpromotion_price && $product->unpromotion_price > 0)
                                                                        <span
                                                                            style="text-decoration:line-through; opacity:0.6"
                                                                            class="woocommerce-Price-amount amount">{{ number_format($product->unpromotion_price) }}<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></span>

                                                                        <ins><span
                                                                                class="woocommerce-Price-amount amount">{{ number_format($product->price) }}<span
                                                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins>
                                                                    @elseif ($product->price == 0)
                                                                        <ins><span
                                                                                class="woocommerce-Price-amount amount">Liên
                                                                                hệ</span></ins>
                                                                    @else
                                                                        <ins><span
                                                                                class="woocommerce-Price-amount amount">{{ number_format($product->price) }}<span
                                                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins>
                                                                    @endif

                                                                </span>
                                                            </div>
                                                        </div>
                                                        <!-- box-text -->

                                                        <div class="box-text text-center">
                                                            <a class="buy-now" onclick="buyNow({{ $product->id }})">Mua
                                                                ngay</a>
                                                        </div>
                                                    </div>
                                                    <!-- box -->
                                                </div>
                                                <!-- .col-inner -->
                                            </div>
                                        @endforeach


                                        <!-- col -->
                                    </div>

                                    <div class="text-center" style="margin:20px 0">
                                        <a class="show-more" href="{{ url($item->slug . '.html') }}">Xem
                                            thêm</a>
                                    </div>
                                </div>
                            @endforeach
                        @else
                        @endif


                    </div>
                    <!-- .tab-panels -->
                </div>


                <style scope="scope">
                    #section_666867822 {
                        padding-top: 20px;
                        padding-bottom: 20px;
                    }
                </style>
            </section>

            <section class="section danh-muc" id="section_666867822">
                <div class="bg section-bg fill bg-fill  bg-loaded">


                </div>

                <div class="section-content relative">

                    <div class="row" id="row-1193247359">
                        <div class="col small-12 large-12">
                            <div class="col-inner">

                                <div class="category-title">
                                    <img src="{{ asset('documents/website/' . $banners_left->image) }}" alt=""
                                        alt="{{ $banners_left->html }}" title="{{ $banners_left->html }}">

                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <style scope="scope">
                    #section_666867822 {
                        padding-top: 20px;
                        padding-bottom: 20px;
                    }
                </style>
            </section>


            @if (count($categories_hot) > 0)
                @foreach ($categories_hot as $category)
                    {{-- {{ dd($category->getProductsToCategory($category->id)) }} --}}
                    @if (count($category->getProductsToCategory($category->id)) > 0)
                        <section class="section danh-muc" id="section_395761015">
                            <div class="bg section-bg fill bg-fill  bg-loaded">





                            </div>
                            <!-- .section-bg -->

                            <div class="section-content relative">

                                <div class="row" id="row-518612406">
                                    <div class="col small-12 large-12">
                                        <div class="col-inner">
                                            <div class="category-title">
                                                <h2 class="tieu-de"><i class="fa fa-car" aria-hidden="true"></i>&nbsp;
                                                    {{ $category->name }}
                                                </h2>
                                                <div class="sub-menu">
                                                    <ul>

                                                        @if (count($category->getChildrens($category->id)) > 0)
                                                            @foreach ($category->getChildrens($category->id) as $index => $item)
                                                                @if ($index < 7)
                                                                    <li class="more-all"><a
                                                                            href="{{ url($item->slug . '.html') }}">{{ $item->name }}</a>
                                                                    </li>
                                                                @endif
                                                            @endforeach
                                                        @else
                                                        @endif

                                                        {{-- <li class="more-all"><a href="{{ url($category->slug . '.html') }}">Xem
                                                        tất cả</a></li> --}}
                                                    </ul>
                                                </div>
                                            </div>


                                            <div class="row large-columns-4 medium-columns-4 small-columns-2 row-small">
                                                @foreach ($category->getProductsToCategory($category->id, $limit = 4) as $product)
                                                    <div class="col">
                                                        <div class="col-inner">

                                                            @if ($product->unpromotion_price && $product->unpromotion_price > 0)
                                                                @php
                                                                    $percent = 100 - intval(($product->price / $product->unpromotion_price) * 100, 0);
                                                                @endphp

                                                                <div class="badge-container absolute left top z-1">
                                                                    <div class="callout badge badge-square">
                                                                        <div class="badge-inner secondary on-sale"><span
                                                                                class="onsale">-{{ $percent }}%</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endif



                                                            <div
                                                                class="product-small box has-hover box-normal box-text-bottom">
                                                                <div class="box-image">
                                                                    <div class="image-overlay-add image-cover"
                                                                        style="padding-top:90%;">
                                                                        <a href="{{ url($product->slug . '.html') }}">
                                                                            <img width="434" height="286"
                                                                                data-src="{{ asset('documents/website/' . $product->image) }}"
                                                                                class="lazy-load attachment-original size-original wp-post-image"
                                                                                alt="{{ $product->name }}"
                                                                                title="{{ $product->name }}"
                                                                                srcset=""
                                                                                data-srcset="{{ asset('documents/website/' . $product->image) }} 434w, {{ asset('documents/website/' . $product->image) }} 300w"
                                                                                sizes="(max-width: 434px) 100vw, 434px">
                                                                        </a>
                                                                        <div class="overlay fill"
                                                                            style="background-color: rgba(191, 0, 0, 0.2)">
                                                                        </div>
                                                                    </div>
                                                                    <div class="image-tools top right show-on-hover">
                                                                    </div>
                                                                    <div
                                                                        class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                                                    </div>
                                                                </div>
                                                                <!-- box-image -->

                                                                <div class="box-text text-center">
                                                                    <div class="title-wrapper">
                                                                        <p class="name product-title"><a
                                                                                href="{{ url($product->slug . '.html') }}">{{ $product->name }}</a>
                                                                        </p>
                                                                    </div>
                                                                    <div class="price-wrapper">
                                                                        <span class="price">
                                                                            @if ($product->unpromotion_price && $product->unpromotion_price > 0)
                                                                                <span
                                                                                    style="text-decoration:line-through; opacity:0.6"
                                                                                    class="woocommerce-Price-amount amount">{{ number_format($product->unpromotion_price) }}<span
                                                                                        class="woocommerce-Price-currencySymbol">&#8363;</span></span>

                                                                                <ins><span
                                                                                        class="woocommerce-Price-amount amount">{{ number_format($product->price) }}<span
                                                                                            class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins>
                                                                            @elseif ($product->price == 0)
                                                                                <ins><span
                                                                                        class="woocommerce-Price-amount amount">Liên
                                                                                        hệ</span></ins>
                                                                            @else
                                                                                <ins><span
                                                                                        class="woocommerce-Price-amount amount">{{ number_format($product->price) }}<span
                                                                                            class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins>
                                                                            @endif

                                                                        </span>
                                                                    </div>
                                                                </div>

                                                                <div class="box-text text-center">
                                                                    <a class="buy-now"
                                                                        onclick="buyNow( {{ $product->id }} )">Mua
                                                                        ngay</a>
                                                                </div>
                                                                <!-- box-text -->
                                                            </div>
                                                            <!-- box -->
                                                        </div>
                                                        <!-- .col-inner -->
                                                    </div>
                                                @endforeach

                                            </div>

                                            <div class="text-center" style="margin:20px 0">
                                                <a class="show-more" href="{{ url($category->slug . '.html') }}">Xem
                                                    thêm</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- .section-content -->


                            <style scope="scope">
                                #section_395761015 {
                                    padding-top: 20px;
                                    padding-bottom: 20px;
                                }
                            </style>
                        </section>
                    @else
                    @endif
                @endforeach
            @else
            @endif

            <section class="section danh-muc" id="section_2086243040">
                <div class="bg section-bg fill bg-fill  bg-loaded">





                </div>
                <!-- .section-bg -->

                <div class="section-content relative">

                    <div class="row" id="row-1894088309">
                        <div class="col small-12 large-12">
                            <div class="col-inner">
                                <div class="container section-title-container">
                                    <h3 class="section-title section-title-center"><b></b><span class="section-title-main"
                                            style="font-size:110%;color:rgb(198, 0, 0);">CẢM NHẬN KHÁCH HÀNG</span><b></b>
                                    </h3>
                                </div>
                                <!-- .section-title -->


                                <div class="row large-columns-3 medium-columns-2 small-columns-1 row-normal has-shadow row-box-shadow-1 slider row-slider slider-nav-simple slider-nav-outside slider-nav-push"
                                    data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", 
        "dragThreshold" : 5, "cellAlign": "left","wrapAround": false,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : 3000}'
                                    style="background: url('{{ asset('images/bg_feedback.jpg') }}') no-repeat center; background-size:cover; padding:6% 0 ; color:#fff">

                                    <style>
                                        .bdr-50 {
                                            border-radius: 50%;
                                        }
                                    </style>

                                    <div class="col" style="padding: 30px; ">
                                        <div class="">
                                            <div class="badge-container absolute left top z-1">
                                            </div>
                                            <div style="display:flex">
                                                <div class="">
                                                    <img class="bdr-50" width="200" height="100"
                                                        src="{{ asset('images/feedbacks/feedback1.png') }}"
                                                        class="attachment-thumbnail size-thumbnail"
                                                        alt="Đánh giá Nguyễn Thanh Bình" title="Đánh giá Nguyễn Thanh Bình" loading="lazy">
                                                </div>
                                                <div class="" style="padding-left: 20px">

                                                    <div id="text-2093850480" class="text comment-customer"
                                                        style="text-align:left !important">


                                                        <p><strong>Nguyễn Thanh Bình</strong><br><em
                                                                style="font-size:12px;">Ghế điện chất lượng tuyệt vời!
                                                                Không chỉ tiện nghi mà còn rất êm ái và thoải mái khi ngồi.
                                                                Được làm từ chất liệu bền và đẹp, giá thành rất hợp lý.</em>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col" style="padding: 30px; ">
                                        <div class="">
                                            <div class="badge-container absolute left top z-1">
                                            </div>
                                            <div style="display:flex">
                                                <div class="">
                                                    <img class="bdr-50" width="200" height="100"
                                                        src="{{ asset('images/feedbacks/feedback2.png') }}"
                                                        class="attachment-thumbnail size-thumbnail"
                                                        alt="Đánh giá Lê Văn Lâm" title="Đánh giá Lê Văn Lâm" loading="lazy">
                                                </div>
                                                <div class="" style="padding-left: 20px">

                                                    <div id="text-2093850480" class="text comment-customer"
                                                        style="text-align:left !important">


                                                        <p><strong>Lê Văn Lâm</strong><br><em style="font-size:12px;">Sản
                                                                phẩm của Carvina luôn đảm bảo chất lượng và giá cả hợp lý.
                                                                Tôi mua nhiều lần chưa bao giờ thất vọng.Sản phẩm được đóng
                                                                gói cẩn thận và giao hàng đúng hạn.</em></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col" style="padding: 30px; ">
                                        <div class="">
                                            <div class="badge-container absolute left top z-1">
                                            </div>
                                            <div style="display:flex">
                                                <div class="">
                                                    <img class="bdr-50" width="200" height="100"
                                                        src="{{ asset('images/feedbacks/feedback3.png') }}"
                                                        class="attachment-thumbnail size-thumbnail"
                                                        alt="Đánh giá Đặng Thành Đạt" title="Đánh giá Đặng Thành Đạt" loading="lazy">
                                                </div>
                                                <div class="" style="padding-left: 20px">

                                                    <div id="text-2093850480" class="text comment-customer"
                                                        style="text-align:left !important">


                                                        <p><strong>Đặng Thành Đạt</strong><br><em
                                                                style="font-size:12px;">Tôi đã thay đổi đèn pha của xe tôi
                                                                với sản phẩm từ trang web này và chúng thực sự tuyệt vời.
                                                                Ánh sáng mạnh và rõ ràng, giúp tôi cảm thấy an toàn khi lái
                                                                xe vào ban đêm.</em></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col" style="padding: 30px; ">
                                        <div class="">
                                            <div class="badge-container absolute left top z-1">
                                            </div>
                                            <div style="display:flex">
                                                <div class="">
                                                    <img class="bdr-50" width="200" height="100"
                                                        src="{{ asset('images/feedbacks/feedback4.png') }}"
                                                        class="attachment-thumbnail size-thumbnail"
                                                        alt="Đánh giá Trần Minh Sáng" title="Đánh giá Trần Minh Sáng" loading="lazy">
                                                </div>
                                                <div class="" style="padding-left: 20px">

                                                    <div id="text-2093850480" class="text comment-customer"
                                                        style="text-align:left !important">


                                                        <p><strong>Trần Minh Sáng</strong><br><em
                                                                style="font-size:12px;">Đội ngũ nhân viên của Carvina thật
                                                                sự rất tuyệt vời. Họ rất chu đáo và tận tâm với khách hàng.
                                                                Tôi rất đánh giá cao tinh thần trách nhiệm và hài lòng với
                                                                dịch vụ của họ.</em></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col" style="padding: 30px; ">
                                        <div class="">
                                            <div class="badge-container absolute left top z-1">
                                            </div>
                                            <div style="display:flex">
                                                <div class="">
                                                    <img class="bdr-50" width="200" height="100"
                                                        src="{{ asset('images/feedbacks/feedback5.png') }}"
                                                        class="attachment-thumbnail size-thumbnail"
                                                        alt="Đánh giá Đào Văn Nguyên" title="Đánh giá Đào Văn Nguyên" loading="lazy">
                                                </div>
                                                <div class="" style="padding-left: 20px">

                                                    <div id="text-2093850480" class="text comment-customer"
                                                        style="text-align:left !important">


                                                        <p><strong>Đào Văn Nguyên</strong><br><em
                                                                style="font-size:12px;">Tôi đã sử dụng dịch vụ hậu mãi của
                                                                Carvina và tôi cảm thấy rất hài lòng. Họ luôn đáp ứng nhanh
                                                                chóng và giúp tôi giải quyết vấn đề một cách chuyên nghiệp
                                                                và lịch sự.</em></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col" style="padding: 30px; ">
                                        <div class="">
                                            <div class="badge-container absolute left top z-1">
                                            </div>
                                            <div style="display:flex">
                                                <div class="">
                                                    <img class="bdr-50" width="200" height="100"
                                                        src="{{ asset('images/feedbacks/feedback6.png') }}"
                                                        class="attachment-thumbnail size-thumbnail"
                                                        alt="Đánh giá Nguyễn Quang Bảo" title="Đánh giá Nguyễn Quang Bảo" loading="lazy">
                                                </div>
                                                <div class="" style="padding-left: 20px">

                                                    <div id="text-2093850480" class="text comment-customer"
                                                        style="text-align:left !important">


                                                        <p><strong>Nguyễn Quang Bảo</strong><br><em
                                                                style="font-size:12px;">Website rất dễ dàng sử dụng và trực
                                                                quan, cung cấp đầy đủ thông tin về sản phẩm và dịch vụ hậu
                                                                mãi. Tôi cũng rất hài lòng với đội ngũ hỗ trợ khách
                                                                hàng.</em></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    <!-- .col -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .section-content -->


                <style scope="scope">
                    #section_2086243040 {
                        padding-top: 30px;
                        padding-bottom: 30px;
                    }
                </style>
            </section>

            <section class="section danh-muc" id="section_2086243040">
                <div class="bg section-bg fill bg-fill  bg-loaded">





                </div>
                <!-- .section-bg -->

                <div class="section-content relative">

                    <div class="row" id="row-1894088309">
                        <div class="col small-12 large-12">
                            <div class="col-inner">
                                <div class="container section-title-container">
                                    <h3 class="section-title section-title-center"><b></b><span class="section-title-main"
                                            style="font-size:110%;color:rgb(198, 0, 0);">XE VÀ ĐỜI SỐNG</span><b></b>
                                    </h3>
                                </div>
                                <!-- .section-title -->


                                <div class="row large-columns-4 medium-columns-1 small-columns-1">
                                    @if (count($blogs_all) > 0)
                                        @foreach ($blogs_all as $item)
                                            <div class="col post-item">
                                                <div class="col-inner">
                                                    <a href="{{ url($item->slug . '.html') }}" class="plain">
                                                        <div
                                                            class="box box-normal box-text-bottom box-blog-post has-hover">
                                                            <div class="box-image">
                                                                <div class="image-overlay-add image-cover"
                                                                    style="padding-top:65%;">
                                                                    <img width="434" height="286"
                                                                        data-src="{{ asset('documents/website/' . $item->image) }}"
                                                                        class="lazy-load attachment-original size-original wp-post-image"
                                                                        alt="{{ $item->title }}"
                                                                        title="{{ $item->title }}" srcset=""
                                                                        data-srcset="{{ asset('documents/website/' . $item->image) }} 434w, {{ asset('documents/website/' . $item->image) }} 300w"
                                                                        sizes="(max-width: 434px) 100vw, 434px">
                                                                    <div class="overlay"
                                                                        style="background-color: rgba(201, 0, 0, 0.23)">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- .box-image -->
                                                            <div class="box-text text-left">
                                                                <div class="box-text-inner blog-post-inner">


                                                                    <h5 class="post-title is-large ">{{ $item->title }}
                                                                    </h5>
                                                                    <div class="is-divider"></div>
                                                                    <!-- <p class="from_the_blog_excerpt ">
                                                                        {{ $item->description }}
                                                                    </p> -->



                                                                </div>
                                                                <!-- .box-text-inner -->
                                                            </div>
                                                            <!-- .box-text -->
                                                        </div>
                                                        <!-- .box -->
                                                    </a>
                                                    <!-- .link -->
                                                </div>
                                                <!-- .col-inner -->
                                            </div>
                                        @endforeach
                                    @else
                                    @endif

                                    <!-- .col -->
                                </div>
                                <div class="text-center" style="margin:20px 0">
                                    <a class="show-more" href="{{ url('tin-tuc.html') }}">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .section-content -->


                <style scope="scope">
                    #section_2086243040 {
                        padding-top: 30px;
                        padding-bottom: 30px;
                    }
                </style>
            </section>



        </div>



    </main>
    <script>
        var firstLi = document.querySelector('.description_tab:first-child');
        firstLi.classList.add('active');
    </script>
    <script>
        var firstLi = document.querySelector('.entry-content:first-child');
        firstLi.classList.add('active');
    </script>

    {{-- <script>
        var menuItems = document.getElementsByClassName('description_tab');

        var index = 0;
        var leftLength = 0;

        var intervalId = setInterval(function() {
            // menuItems[index].scrollIntoView({ behavior: 'smooth', block: 'center' });
            document.getElementById("small-nav-collapse").scrollLeft = leftLength + menuItems[index].offsetLeft;
            leftLength += menuItems[index].offsetLeft;
            $(menuItems[index]).find("a").click();


            index++;

            if (index >= menuItems.length) {
                index = 0;
                leftLength = 0;
            }
        }, 5000);
    </script> --}}

    {{-- <script>
        var divElement = document.getElementById("small-nav-collapse");

        function scrollDiv() {
            divElement.scrollLeft += 120;
            if (divElement.scrollLeft >= (divElement.scrollWidth - divElement.offsetWidth)) {
                divElement.scrollLeft = 0;
            }
        }

        setTimeout(function() {
            setInterval(scrollDiv, 5000);
        }, 5000);
    </script> --}}
@endsection
@push('scripts')
    <script src="{{ asset('theme/https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js') }}"></script>
    <script>
        $(".home-nav_item").toggleClass("active");
        // $("#home2-nav_item").toggleClass("active");
    </script>
@endpush
