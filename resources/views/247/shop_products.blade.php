@extends($theme . '.shop_layout')
@push('style')
    <link href="{{ asset('css/guest/product/list-by-category.css') }}" rel="stylesheet" type="text/css" />
@endpush
@section('content')
@section('breadcrumb')
@endsection


<div class="shop-page-title category-page-title page-title ">

    <div class="page-title-inner flex-row  medium-flex-wrap container">
        <div class="flex-col flex-grow medium-text-center">
            <div class="is-small">
                <nav class="woocommerce-breadcrumb breadcrumbs"><a href="{{ url('/') }}">Trang chủ</a> <span
                        class="divider">&#47;</span>

                    @if (isset($categorySelf))
                        @php $parent = $categorySelf->getParent(); @endphp
                        @if ($parent)
                            @php $parent2 = $parent->getParent(); @endphp
                            @if ($parent2)
                                <a href="{{ url($parent2->slug . '.html') }}">{{ $parent2->name }}</a> <span
                                    class="divider">&#47;</span>
                            @endif
                            <a href="{{ url($parent->slug . '.html') }}">{{ $parent->name }}</a> <span
                                class="divider">&#47;</span>
                        @endif
                        {{ $categorySelf->name }}
                    @elseif (isset($search_keyword) && $search_keyword && $search_keyword != '')
                        Kết quả tìm kiếm với từ khóa: {{ $search_keyword }}
                    @else
                    @endif
                </nav>
            </div>
            {{-- <div class="category-filtering category-filter-row show-for-medium">
                <a href="#" data-open="#shop-sidebar" data-visible-after="true" data-pos="left" class="filter-button uppercase plain">
                    <i class="icon-menu"></i>
                    <strong>Lọc</strong>
                </a>
                <div class="inline-block">
                </div>
            </div> --}}
        </div>
        <!-- .flex-left -->
        {{-- {{ dd($categorySelf->getChildrens($categorySelf->id)) }} --}}
        @if (isset($categorySelf) && count($categorySelf->getChildrens($categorySelf->id)) > 0)
        @else
            <div class="flex-col medium-text-center">
                {{-- 
                        <div class="woocommerce-ordering" style="margin-right:30px">
                            <select name="brand" class="orderby" onchange="location='?brand='+this.value;">
                                <option value="popularity" selected='selected'>Lọc theo hãng &nbsp;&nbsp;&nbsp;&nbsp; </option>
                                @if (count($brands) > 0)
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                    @endforeach
                                @else
                                @endif
                            </select>
                        </div> --}}

                <div class="woocommerce-ordering" style="margin-right:30px">
                    <select name="brand" class="orderby" onchange="location='?sort_by=id&sort_order='+this.value;">
                        <option value="popularity" selected='selected'>Sắp xếp theo &nbsp;&nbsp;&nbsp;&nbsp; </option>

                        <option value="asc">Từ cũ đến mới</option>
                        <option value="desc">Từ mới đến cũ</option>


                    </select>
                </div>


                <div class="woocommerce-ordering">
                    <form method="get" style="display:flex">
                        <div style="margin:10px">
                            <span>Từ</span>
                        </div>
                        <div>
                            <select name="price_start">
                                <option selected='selected' value="0">0</option>
                                <option value="1000000">1.000.000 đ &nbsp;&nbsp;&nbsp;</option>
                                <option value="5000000">5.000.000 đ &nbsp;&nbsp;&nbsp;</option>
                                <option value="10000000">10.000.000 đ &nbsp;&nbsp;&nbsp;</option>
                            </select>
                        </div>

                        <div style="margin:10px">
                            <span>đến</span>
                        </div>
                        <div>
                            <select name="price_end">
                                <option selected='selected' value="1000000">1.000.000 đ &nbsp;&nbsp;&nbsp;</option>
                                <option value="5000000">5.000.000 đ &nbsp;&nbsp;&nbsp;</option>
                                <option value="10000000">10.000.000 đ &nbsp;&nbsp;&nbsp;</option>
                                <option value="50000000">50.000.000 đ &nbsp;&nbsp;&nbsp;</option>
                            </select>

                        </div>

                        <button type="submit" class="btn-filter"
                            style="color:#fff;background: red; margin: 5px 20px 10px 10px; border-radius:4px;">Lọc</button>

                    </form>

                </div>
            </div>
        @endif

        <!-- .flex-right -->

    </div>
    <!-- flex-row -->
</div>
<!-- .page-title -->

<main id="main" class="">
    <div class="row category-page-row">

        @include($theme . '.components.sidebar_left')

        <!-- #shop-sidebar -->

        <div class="col large-9">

            @if (isset($categorySelf) && count($categorySelf->getChildrens($categorySelf->id)) > 0)
                <p style="font-size:15px">{!! $categorySelf->description !!}</p>

                @foreach ($categorySelf->getChildrens($categorySelf->id) as $category)
                    <div class="shop-container">

                        {{-- <p style="font-size:15px">{!! $category->description !!}</p> --}}

                        <hr>

                        <div style="display:flex; justify-content:space-around">
                            <h3>
                                {{ $category->name }}
                            </h3>
                            <h3 style="text-align:right">
                                <a style="font-size: 14px;" href="{{ url($category->slug . '.html') }}"> Xem thêm >></a>
                            </h3>
                        </div>

                        <div
                            class="products row row-small large-columns-4 medium-columns-3 small-columns-2 has-equal-box-heights">
                            @if (isset($products) && count($products) > 0)
                                @foreach ($category->getProductsToCategory($category->id, $limit = 4) as $product)
                                    <div
                                        class="product-small col has-hover post-161 product type-product status-publish has-post-thumbnail product_cat-boc-noi-that product_cat-mescerdes last instock sale shipping-taxable purchasable product-type-simple">
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

                                            <div class="product-small box ">
                                                <div class="box-image">
                                                    <div class="image-none">
                                                        <a href="{{ url($product->slug . '.html') }}">
                                                            <img width="434" height="286"
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

                                                <div class="box-text box-text-products text-center grid-style-2">
                                                    <div class="title-wrapper">
                                                        <p class="name product-title"><a
                                                                href="{{ url($product->slug . '.html') }}">{{ $product->name }}</a>
                                                        </p>
                                                    </div>
                                                    <div class="price-wrapper">
                                                        <span class="price">
                                                            @if ($product->unpromotion_price && $product->unpromotion_price > 0)
                                                                <span style="text-decoration:line-through; opacity:0.6"
                                                                    class="woocommerce-Price-amount amount">{{ number_format($product->unpromotion_price) }}<span
                                                                        class="woocommerce-Price-currencySymbol">&#8363;</span></span>

                                                                <ins><span
                                                                        class="woocommerce-Price-amount amount">{{ number_format($product->price) }}<span
                                                                            class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins>
                                                            @elseif ($product->price == 0)
                                                                <ins><span class="woocommerce-Price-amount amount">Liên
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
                                            </div>
                                            <!-- box -->
                                        </div>


                                        <!-- .col-inner -->
                                    </div>
                                @endforeach
                            @else
                                <h3 style="color: red">Không tồn tại sản phẩm </h3>
                            @endif
                            <!-- col -->
                        </div>
                        <!-- row -->
                    </div>
                @endforeach
            @else
                <div class="shop-container">

                   
                    <h3>
                        @if (isset($categorySelf))
                            {{ $categorySelf->name }}
                        @elseif (isset($search_keyword) && $search_keyword && $search_keyword != '')
                            Kết quả tìm kiếm với từ khóa: {{ $search_keyword }}
                        @else
                        @endif
                    </h3>
                    <p style="font-size:15px">{!! $categorySelf->description !!}</p>

                    <hr>
                    <div
                        class="products row row-small large-columns-4 medium-columns-3 small-columns-2 has-equal-box-heights">
                        @if (isset($products) && count($products) > 0)
                            @foreach ($products as $product)
                                <div
                                    class="product-small col has-hover post-161 product type-product status-publish has-post-thumbnail product_cat-boc-noi-that product_cat-mescerdes last instock sale shipping-taxable purchasable product-type-simple">
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

                                        <div class="product-small box ">
                                            <div class="box-image">
                                                <div class="image-none">
                                                    <a href="{{ url($product->slug . '.html') }}">
                                                        <img width="434" height="286"
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

                                            <div class="box-text box-text-products text-center grid-style-2">
                                                <div class="title-wrapper">
                                                    <p class="name product-title"><a
                                                            href="{{ url($product->slug . '.html') }}">{{ $product->name }}</a>
                                                    </p>
                                                </div>
                                                <div class="price-wrapper">
                                                    <span class="price">
                                                        @if ($product->unpromotion_price && $product->unpromotion_price > 0)
                                                            <span style="text-decoration:line-through; opacity:0.6"
                                                                class="woocommerce-Price-amount amount">{{ number_format($product->unpromotion_price) }}<span
                                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></span>

                                                            <ins><span
                                                                    class="woocommerce-Price-amount amount">{{ number_format($product->price) }}<span
                                                                        class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins>
                                                        @elseif ($product->price == 0)
                                                            <ins><span class="woocommerce-Price-amount amount">Liên
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
                                        </div>
                                        <!-- box -->
                                    </div>


                                    <!-- .col-inner -->
                                </div>
                            @endforeach
                        @else
                            <h3 style="color: red">Không tồn tại sản phẩm </h3>
                        @endif
                        <!-- col -->
                    </div>
                    <!-- row -->
                    {!! $products->links($theme . '.components.my-pagination') !!}
                </div>
            @endif


            <!-- shop container -->
        </div>
    </div>

</main>
@endsection
@push('scripts')
<script>
    @if (isset($slug))
        $('#menu-nav .nav > .nav-links > a[slug="{{ $slug }}"]').toggleClass("active");
    @endif
    @if (isset($categorySelf))
        @if ($categorySelf->getParent())
            $("#menu-category-{{ $categorySelf->getParent()->id }}").toggleClass("active");
        @else
            $("#menu-category-{{ $categorySelf->id }}").toggleClass("active");
        @endif
    @endif
</script>
@endpush
