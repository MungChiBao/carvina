<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

    {{-- <div class="blog-sb-banner ads clearfix mb-30">
        <a href="../collections/san-pham-khuyen-mai.html" class="banner-effect">
            <img id="blog_banner" src="../200000292324/1001022916/14/blog_r01.jpg?v=11"
                alt="khuyến mãi mới nhất tại VNS">
        </a>
    </div> --}}


    <div class="blog-sidebar padd-15">
        <div class="blog-sb-title"><span>Danh mục sản phẩm</span></div>
        <ul class="nav sidebar" id="menu-blog">

            @foreach ($categories as $category)
                @if (count($category->getChildrens($category->id)) > 0)
                    <li class='item has-sub'>
                        <a href='{{ url($category->slug . '.html') }}'>
                            <i class="fa fa-angle-right"></i><span class="lbl">{{ $category->name }}</span>
                            <span data-toggle="collapse" data-parent="#cssmenu" href="#sub-item-3" class="sign">
                                <img src="{{ asset('theme/0/0/global/design/theme-default/arrow-down.png') }}">
                            </span>
                        </a>
                        <ul class="nav children collapse" id="sub-item-3">
                            @foreach ($category->getChildrens($category->id) as $cateChild)
                                <li class="">
                                    <a href="{{ url($cateChild->slug . '.html') }}"
                                        title="{{ $cateChild->name }}">
                                        <span>{{ $cateChild->name }}</span>
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </li>
                @else
                    <li class=" first">
                        <a href="{{ url($category->slug . '.html') }}">
                            <i class="fa fa-angle-right"></i><span>{{ $category->name }}</span>
                        </a>
                    </li>
                @endif
            @endforeach


        </ul>
    </div>




    <div class="blog-sb-collection styleblog">
        <div class="blog-sb-title clearfix">
            Bài viết mới nhất
        </div>
        <div class="blog-sb-content">
            <div class="blog-sb-slider swiper-container">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="blog-sb-slider-item">

                            @if (count($blogs_limit4) > 0)
                                @foreach ($blogs_limit4 as $item)
                                    <div class="article-mini-item">
                                        <div class="article-img">
                                            <a
                                                href="{{ url($item->slug . '.html') }}">
                                                <img src="{{ asset('documents/website/' . $item->image) }}"
                                                    alt="{{ $item->title }}">
                                            </a>
                                        </div>
                                        <div class="article-info">
                                            <div class="article-title text2line">
                                                <a href="{{ url($item->slug . '.html') }}"
                                                    title="{{ $item->title }}">{{ $item->title }}</a>
                                            </div>
                                            <span
                                                class="article-date">{{ date_format($item->updated_at, 'd/m/Y') }}</span>
                                            <div class="article-desc">
                                                {{ $item->description }}
                                            </div>

                                        </div>

                                    </div>
                                @endforeach
                            @else
                            @endif
                        </div>
                    </div>


                </div>
                <!-- Add Arrows -->
                {{-- <div class="swiper-button">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div> --}}
            </div>
        </div>
    </div>



    <div class="blog-sb-collection styleblog">
        <div class="blog-sb-title clearfix">
            Sản phẩm bán chạy
        </div>
        <div class="blog-sb-content">
            <div class="blog-sb-slider swiper-container">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="blog-sb-slider-item">

                            @if (isset($products_hot) && count($products_hot) > 0)
                            @foreach ($products_hot as $item)
                                <div class="product-mini-item">
                                    <div class="product-img">
                                        <a
                                            href="{{ url($item->slug . '.html') }}">
                                            <img src="{{ asset('documents/website/' . $item->image) }}"
                                                alt="{{ $item->name }}">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-title text2line">
                                            <a href="{{ url($item->slug . '.html') }}"
                                                title="{{ $item->name }}">{{ $item->name }}</a>
                                        </div>

                                        <div
                                            class="product-price clearfix on_sale">
                                            <span
                                                class="current-price">{{ number_format($item->price) }}₫</span>

                                            <span
                                                class="original-price"><s>{{ number_format($item->unpromotion_price) }}₫</s></span>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                        @endif



                        </div>
                    </div>



                </div>
                <!-- Add Arrows -->
                {{-- <div class="swiper-button">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div> --}}
            </div>
        </div>

    </div>


</div>
