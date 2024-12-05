@extends($theme . '.shop_layout')
@push('style')
    <link href="{{ asset('css/guest/cart/list.css') }}" rel="stylesheet" type="text/css" />
@endpush
@section('content')
    <div class="shop-page-title category-page-title page-title ">

        <div class="page-title-inner flex-row  medium-flex-wrap container">
            <div class="flex-col flex-grow medium-text-center">
                <div class="is-small">
                    <nav class="woocommerce-breadcrumb breadcrumbs"><a href="{{ url('/') }}">Trang chủ</a> <span
                            class="divider">&#47;</span>&nbsp;Giỏ hàng</nav>
                </div>
            </div>
            <!-- .flex-left -->
            <!-- .flex-right -->

        </div>
        <!-- flex-row -->
    </div>

    <main id="main" class="">

        <div id="content" class="content-area page-wrapper" role="main">
            <div class="row row-main">
                <div class="large-12 col">
                    <div class="col-inner">

                        <header class="entry-header">
                            <h1 class="entry-title mb uppercase">Giỏ hàng</h1>
                        </header>

                        @if (count($cart) > 0)
                            <div class="woocommerce">
                                <div class="woocommerce-notices-wrapper"></div>
                                <div class="woocommerce row row-large row-divided">
                                    <div class="col large-7 pb-0 ">


                                        <form class="woocommerce-cart-form"
                                            id="cartform" method="post">
                                            <div class="cart-wrapper sm-touch-scroll">


                                                <table
                                                    class="shop_table shop_table_responsive cart woocommerce-cart-form__contents"
                                                    cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th class="product-name" colspan="3">Sản phẩm</th>
                                                            <th class="product-price">Giá</th>
                                                            <th style="text-align:center" class="product-quantity">Số lượng</th>
                                                            <th class="product-subtotal">Tạm tính</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        @if (count(Cart::content()) > 0)
                                                        @foreach (Cart::content() as $cartItem)
                                                            @php
                                                                $n = isset($n) ? $n : 0;
                                                                $n++;
                                                                $product = App\Models\ShopProduct::find($cartItem->id);
                                                            @endphp

                                                        <tr class="woocommerce-cart-form__cart-item cart_item">

                                                            <td class="product-remove">
                                                                <a href="{{ url("removeItem/$cartItem->rowId") }}"
                                                                    onClick="return confirm('Bạn có muốn xóa sản phẩm này?')"
                                                                    href="{{ url('gio-hang/xoa/' . $cartItem->rowId) }}"
                                                                    class="remove" aria-label="Xóa sản phẩm này"
                                                                    data-product_id="1071" data-product_sku="">×</a>
                                                            </td>

                                                            <td class="product-thumbnail">
                                                                <a
                                                                    href="{{ url($product->slug . '.html') }}"><img
                                                                        width="247" height="296"
                                                                        src="{{ asset('documents/website/' . $product->image) }}"
                                                                        data-src="{{ asset('documents/website/' . $product->image) }}"
                                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazy-load-active"
                                                                        alt=""></a>
                                                            </td>

                                                            <td class="product-name" data-title="Sản phẩm">
                                                                <a
                                                                    href="{{ url($product->slug . '.html') }}">{{ $cartItem->name }}</a>
                                                                <div class="show-for-small mobile-product-price">
                                                                    <span class="mobile-product-price__qty">{{ $cartItem->qty }} x </span>
                                                                   
                                                                
                                                                    <span
                                                                        class="woocommerce-Price-amount amount">{{ number_format($product->price) }}<span
                                                                            class="woocommerce-Price-currencySymbol">₫</span></span>
                                                                            @if ($product->unpromotion_price > 0)
                                                                    <del>{{ number_format($product->unpromotion_price) }}₫</del>
                                                                @else
                                                                @endif
                                                                </div>
                                                            </td>

                                                            <td class="product-price" data-title="Giá">
                                                                @if ($product->unpromotion_price > 0)
                                                                    <del>{{ number_format($product->unpromotion_price) }}₫</del>
                                                                @else
                                                                @endif
                                                                <br>
                                                                <span
                                                                    class="woocommerce-Price-amount amount">{{ number_format($product->price) }}<span
                                                                        class="woocommerce-Price-currencySymbol">₫</span></span>
                                                            </td>

                                                            <td style="text-align:center" class="product-quantity" data-title="Số lượng">
                                                                <div class="quantity buttons_added">
                                                                    <button type="button" style="margin-right: 0"
                                                                        class=" button is-form minus-btn">-</button>
                                                                        
                                                                        <label
                                                                        class="screen-reader-text"
                                                                        for="quantity_645234b5dbebe">Số lượng</label>
                                                                    <input type="number" id="quantity_645234b5dbebe" productId="{{ $cartItem->id }}"
                                                                    productRowId="{{ $cartItem->rowId }}" size="4"
                                                                    name="quantity[]" min="1"
                                                                    value="{{ $cartItem->qty }}"
                                                                        class="input-text qty text" step="1"
                                                                        min="0" max=""
            
                                                                         title="SL" size="4"
                                                                        placeholder="" inputmode="numeric">
                                                                        <button type="button" 
                                                                        class=" button is-form plus-btn">+</button>
                                                                    
                                                                </div>
                                                            </td>

                                                            <td class="product-subtotal" data-title="Tạm tính">
                                                                <span
                                                                    class="woocommerce-Price-amount amount">{{ number_format($cartItem->price * $cartItem->qty, 0, 0, '.') }}<span
                                                                        class="woocommerce-Price-currencySymbol">₫</span></span>
                                                            </td>
                                                        </tr>

                                                        @endforeach
                                                        @endif

                                                        <tr>
                                                            <td colspan="6" class="actions clear">


                                                                <div class="continue-shopping pull-left text-left">
                                                                    <a class="button-continue-shopping button primary is-outline"
                                                                        href="{{ url('/') }}">
                                                                        ←&nbsp;Tiếp tục xem sản phẩm </a>
                                                                </div>

                                                                {{-- <button type="submit" class="button primary mt-0 pull-left small" name="update_cart" value="Cập nhật giỏ hàng" disabled="" aria-disabled="true">Cập nhật giỏ hàng</button> --}}

                                                                <input type="hidden" id="woocommerce-cart-nonce"
                                                                    name="woocommerce-cart-nonce" value="474ef37499"><input
                                                                    type="hidden" name="_wp_http_referer"
                                                                    value="/gio-hang/">
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </form>
                                    </div>


                                    <div class="cart-collaterals large-5 col pb-0">

                                        <div class="cart-sidebar col-inner ">
                                            <div class="cart_totals ">

                                                <table cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th class="product-name" colspan="2"
                                                                style="border-width:3px;">Cộng giỏ hàng</th>
                                                        </tr>
                                                    </thead>
                                                </table>

                                                <h2>Cộng giỏ hàng</h2>

                                                <table cellspacing="0" class="shop_table shop_table_responsive">

                                                    <tbody>
                                                        <tr class="cart-subtotal">
                                                            <th>Tạm tính</th>
                                                            <td data-title="Tạm tính"><span
                                                                    class="woocommerce-Price-amount amount">{{ Cart::subtotal(0, 0, ',') }}<span
                                                                        class="woocommerce-Price-currencySymbol">₫</span></span>
                                                            </td>
                                                        </tr>


                                                        <tr class="order-total">
                                                            <th>Tổng</th>
                                                            <td data-title="Tổng"><strong><span
                                                                        class="woocommerce-Price-amount amount">{{ Cart::subtotal(0, 0, ',') }}<span
                                                                            class="woocommerce-Price-currencySymbol">₫</span></span></strong>
                                                            </td>
                                                        </tr>
                                                       

                                                    </tbody>
                                                </table>



                                                <div class="wc-proceed-to-checkout">

                                                    <a href="{{ url('thanh-toan.html') }}"
                                                        class="checkout-button button alt wc-forward">
                                                        Tiến hành thanh toán</a>
                                                </div>


                                            </div>
     
                                            <div class="cart-sidebar-content relative"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="cart-footer-content after-cart-content relative"></div>
                            </div>
                        @else
                        <h3 style="color: red">Giỏ hàng trống</h3>
                        @endif


                    </div>
                </div>
            </div>
        </div>
    </main>

    {{-- <section class="section danh-muc" id="section_2086243040">
    <div class="bg section-bg fill bg-fill  bg-loaded">





    </div>
    <!-- .section-bg -->

    <div class="section-content relative">

        <div class="row" id="row-1894088309">
            <div class="col small-12 large-12">
                <div class="col-inner">
                    <!-- .section-title -->

                    @if (count($cart) > 0)
                            <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">

                                <h1 class="coll-title cart-title">Giỏ hàng</h1>
                                <form method="post" id="cartform">
                                    <div class="clearfix">
                                        <table id="table-cart">
                                            <thead>
                                                <tr>
                                                    <th>Sản phẩm </th>
                                                    <th>Thông tin sản phẩm</th>
                                                    <th>Số lượng</th>
                                                    <th>Đơn giá</th>
                                                    <th rowspan="2" class="hidden-xs">Thành tiền</th>
                                                    <th>&nbsp;</th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                                @if (count(Cart::content()) > 0)
                                                    @foreach (Cart::content() as $cartItem)
                                                        @php
                                                            $n = isset($n) ? $n : 0;
                                                            $n++;
                                                            $product = App\Models\ShopProduct::find($cartItem->id);
                                                        @endphp
                                                        <tr>
                                                            <td>
                                                                <a
                                                                    href="{{ url($product->slug . '.html') }}">
                                                                    <img style="width:80px; height:80px"
                                                                        src="{{ asset('documents/website/' . $product->image) }}"
                                                                        alt="{{ $cartItem->name }}">
                                                                </a>
                                                            </td>
                                                            <td style="text-align:left;max-width:300px;">
                                                                <a
                                                                    href="{{ url($product->slug . '.html') }}">
                                                                    <strong class="title">{{ $cartItem->name }}</strong>


                                                                </a>
                                                                
                                                            </td>

                                                            <td class="qty">
                                                                <div style="display: flex">
                                                                    <button type="button" class="minus-btn">-</button>
                                                                    <input style="width:40px" type="number" productId="{{ $cartItem->id }}"
                                                                        productRowId="{{ $cartItem->rowId }}" size="4"
                                                                        name="quantity[]" min="1"
                                                                        value="{{ $cartItem->qty }}">
                                                                    <button type="button" class="plus-btn">+</button>
                                                                </div>
                                                                
                                                            </td>
                                                            <td class="item-price">
                                                                <strong>{{ number_format($product->price) }}₫</strong>


                                                                <br>
                                                                @if ($product->unpromotion_price > 0)
                                                                    <del>{{ number_format($product->unpromotion_price) }}₫</del>
                                                                @else
                                                                @endif



                                                            </td>
                                                            <td class="item-total">
                                                                <span class="visible-xs">
                                                                </span>{{ number_format($cartItem->price * $cartItem->qty, 0, 0, '.') }}₫
                                                            </td>

                                                            <td>
                                                                <div class="remove">
                                                                    <a href="{{ url("removeItem/$cartItem->rowId") }}"
                                                                        onClick="return confirm('Bạn có muốn xóa sản phẩm này?')"
                                                                        href="{{ url('gio-hang/xoa/' . $cartItem->rowId) }}"
                                                                        alt="Xóa phần tử" class="cart"><i
                                                                            class="fa fa-trash fa-lg"></i> Xóa</a>
                                                                </div>
                                                            </td>

                                                        </tr>
                                                    @endforeach
                                                @endif

                                                <tr class="line-total">
                                                    <td style="text-align:right" colspan="4" class="text-center total_count"><b>Tổng cộng:</b></td>
                                                    <td class="price">
                                                        <span style="color:red; font-size:16px" class="total" id="total-carts">
                                                            <strong>{{ Cart::subtotal(0, 0, ',') }}₫</strong>
                                                        </span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">

                                        </div>
                                        <div class="col-md-8 cart-buttons">
                                            <div class="list-buttons text-right">
                                                <a class="continue-shopping btn-act" title="Mua tiếp"
                                                    href="{{ url('/') }}"><i class="fa fa-reply"></i> Tiếp tục mua
                                                    hàng</a>
                                                <a href="{{ url('thanh-toan.html') }}" class="continue-shopping1 btn-act"
                                                    title="Đặt hàng">Đặt
                                                    hàng <i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        @else
                            <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">

                                <h2 class="coll-title cart-title">Giỏ hàng của bạn đang trống!</h2>

                                <div class=" cart-buttons">
                                    <div class="list-buttons ">
                                        <a class="continue-shopping btn-act" title="Mua tiếp" href="{{ url('/') }}"><i
                                                class="fa fa-reply"></i> Tiếp tục mua hàng</a>
                                    </div>
                                </div>
                            </div>

                        @endif
                   
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
</section> --}}
    {{-- <div id="content">

        <main class="padding-top-mobile">
            <style>
                body {
                    background: #fff;
                }
            </style>
            <div class="header-navigate">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <ol class="breadcrumb breadcrumb-arrow">
                                <li><a href="{{ url('/') }}" target="_self">Trang chủ</a></li>

                                <li><i class="fa fa-angle-right"></i></li>
                                <li class="">Giỏ hàng</li>

                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <section id="content" class="pb-30">
                <div class="container">
                    <div class="row" id="cart">
                        @if (count($cart) > 0)
                            <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">

                                <h1 class="coll-title cart-title">Giỏ hàng</h1>
                                <form method="post" id="cartform">
                                    <div class="clearfix">
                                        <table id="table-cart">
                                            <thead>
                                                <tr>
                                                    <th>Sản phẩm </th>
                                                    <th>Thông tin sản phẩm</th>

                                                    <th>Số lượng</th>
                                                    <th>Đơn giá</th>
                                                    <th rowspan="2" class="hidden-xs">Thành tiền</th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                                @if (count(Cart::content()) > 0)
                                                    @foreach (Cart::content() as $cartItem)
                                                        @php
                                                            $n = isset($n) ? $n : 0;
                                                            $n++;
                                                            $product = App\Models\ShopProduct::find($cartItem->id);
                                                        @endphp
                                                        <tr>
                                                            <td>
                                                                <a
                                                                    href="{{ url($product->slug . '.html') }}">
                                                                    <img style="width:80px; height:80px"
                                                                        src="{{ asset('documents/website/' . $product->image) }}"
                                                                        alt="{{ $cartItem->name }}">
                                                                </a>
                                                            </td>
                                                            <td style="text-align:left;max-width:300px;">
                                                                <a
                                                                    href="{{ url($product->slug . '.html') }}">
                                                                    <strong class="title">{{ $cartItem->name }}</strong>


                                                                </a>
                                                                <div class="remove">
                                                                    <a href="{{ url("removeItem/$cartItem->rowId") }}"
                                                                        onClick="return confirm('Bạn có muốn xóa sản phẩm này?')"
                                                                        href="{{ url('gio-hang/xoa/' . $cartItem->rowId) }}"
                                                                        alt="Xóa phần tử" class="cart"><i
                                                                            class="fa fa-trash fa-lg"></i> Xóa</a>
                                                                </div>
                                                            </td>

                                                            <td class="qty">
                                                                <button type="button" class="minus-btn">-</button>
                                                                <input type="number" productId="{{ $cartItem->id }}"
                                                                    productRowId="{{ $cartItem->rowId }}" size="4"
                                                                    name="quantity[]" min="1"
                                                                    value="{{ $cartItem->qty }}">
                                                                <button type="button" class="plus-btn">+</button>
                                                            </td>
                                                            <td class="item-price">
                                                                <span class="visible-xs dongia">Đơn giá</span>
                                                                <strong>{{ number_format($product->price) }}₫</strong>


                                                                <br>
                                                                @if ($product->unpromotion_price > 0)
                                                                    <del>{{ number_format($product->unpromotion_price) }}₫</del>
                                                                @else
                                                                @endif



                                                            </td>
                                                            <td class="item-total">
                                                                <span class="visible-xs">Tổng tiền:
                                                                </span>{{ number_format($cartItem->price * $cartItem->qty, 0, 0, '.') }}₫
                                                            </td>

                                                        </tr>
                                                    @endforeach
                                                @endif

                                                <tr class="line-total">
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                    <td class="text-center"><b></b></td>
                                                    <td class="text-center total_count"><b>Tổng cộng:</b></td>
                                                    <td class="price">
                                                        <span class="total" id="total-carts">
                                                            <strong>{{ Cart::subtotal(0, 0, ',') }}₫</strong>
                                                        </span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">

                                        </div>
                                        <div class="col-md-8 cart-buttons">
                                            <div class="list-buttons text-right">
                                                <a class="continue-shopping btn-act" title="Mua tiếp"
                                                    href="{{ url('/') }}"><i class="fa fa-reply"></i> Tiếp tục mua
                                                    hàng</a>
                                                <a href="{{ url('thanh-toan.html') }}" class="continue-shopping1 btn-act"
                                                    title="Đặt hàng">Đặt
                                                    hàng <i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        @else
                            <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">

                                <h2 class="coll-title cart-title">Giỏ hàng của bạn đang trống!</h2>

                                <div class=" cart-buttons">
                                    <div class="list-buttons ">
                                        <a class="continue-shopping btn-act" title="Mua tiếp" href="{{ url('/') }}"><i
                                                class="fa fa-reply"></i> Tiếp tục mua hàng</a>
                                    </div>
                                </div>
                            </div>

                        @endif



                        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                            <div class="right-cart">
                                <div class="coll-title cart-title">VNS CẢM ƠN QUÝ KHÁCH!</div>
                                <div class="selling-point-cart">
                                    <ul class="sidebar-policy-content sidebar-policy-cart">






                                        <li class="item">
                                            <span class="icon">
                                                <img src="//theme.hstatic.net/200000292324/1001022916/14/scp_icon_1.jpg?v=12"
                                                    width="40px">
                                            </span>
                                            <div class="info2">
                                                <div class="title">
                                                    Giao hàng nhanh toàn quốc
                                                </div>
                                                <div class="para">
                                                    Nhận hàng nhanh chóng 2-4 ngày
                                                </div>
                                            </div>

                                        </li>







                                        <li class="item">
                                            <span class="icon">
                                                <img src="//theme.hstatic.net/200000292324/1001022916/14/scp_icon_2.jpg?v=12"
                                                    width="40px">
                                            </span>
                                            <div class="info2">
                                                <div class="title">
                                                    Uy tín &amp; Chất lượng
                                                </div>
                                                <div class="para">
                                                    Cam kết 100% sản phẩm chính hãng
                                                </div>
                                            </div>

                                        </li>







                                        <li class="item">
                                            <span class="icon">
                                                <img src="//theme.hstatic.net/200000292324/1001022916/14/scp_icon_3.jpg?v=12"
                                                    width="40px">
                                            </span>
                                            <div class="info2">
                                                <div class="title">
                                                    Vô Vàn Mã Giảm Giá
                                                </div>
                                                <div class="para">
                                                    Nhiều mã giảm giá khuyến mãi, các quà tặng đặc biệt vô cùng hấp dẫn
                                                </div>
                                            </div>

                                        </li>


                                    </ul>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>


                <div class="home-product san-pham-khuyen-mai home-product-_cart" style="background:;padding:">
                    <div class="container">
                        <div class="section-heading style-flex" style="border-color:">
                            <h2 class="section-title">
                                <a href="/collections/san-pham-khuyen-mai"><span style="background:">Sản phẩm
                                        Hot</span></a>
                            </h2>


                        </div>
                        <div class="home-product-wrap">

                            <div class="box-slide owl-slide-cate-1  no_slide ">

                                @if (count($products_hot) > 0)
                                    @foreach ($products_hot as $item)
                                        <div class="product-wrapper product-item" data-id="1035291806">
                                            <div class="product-information">
                                                <div class="product-detail">
                                                    <div class="product-image">
                                                        <a href="{{ url($item->slug . '.html') }}"
                                                            title="{{ $item->name }}">

                                                            <img src="{{ asset('documents/website/' . $item->image) }}"
                                                                alt="{{ $item->name }}">

                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <a href="{{ url($item->slug . '.html') }}"
                                                            title="{{ $item->name }}">

                                                            <h3 class="product-title text2line">{{ $item->name }}</h3>

                                                        </a>
                                                        @if ($item->unpromotion_price > 0)
                                                            <div class="price-info">
                                                                <div class="price-new-old">
                                                                    <span>{{ number_format($item->price) }}₫</span>

                                                                    <del>{{ number_format($item->unpromotion_price) }}₫</del>

                                                                </div>
                                                                @php
                                                                    $present = 100 - intval(($item->price / $item->unpromotion_price) * 100, 0);
                                                                    
                                                                @endphp

                                                                <div class="field-sale">
                                                                    <span>-{{ $present }}%</span>
                                                                </div>

                                                            </div>
                                                        @else
                                                            <div class="price-info">
                                                                <div class="price-new-old">
                                                                    <span>{{ number_format($item->price) }}₫</span>
                                                                </div>


                                                            </div>
                                                        @endif


                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    @endforeach
                                @else
                                @endif



                            </div>
                            <div class="text-center">
                                <a href="{{ url('san-pham-hot.html') }}" class="viewmore btn">Xem tất cả <i
                                        class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </section>


            <style>
                .home-product {
                    margin-top: 30px;
                }
            </style>
        </main>

    </div> --}}
@endsection
@push('scripts')
    <script>
        $('.like-btn').on('click', function() {
            $(this).toggleClass('is-active');
        });

        $('.minus-btn').on('click', function(e) {
            e.preventDefault();
            var $this = $(this);
            var $input = $this.closest('td').find('input');
            var value = parseInt($input.val());

            if (value >= 1) {
                value = value - 1;
            } else {
                value = 1;
            }

            $input.val(value);
            let id = $input.attr("productId");
            let rowId = $input.attr("productRowId");
            updateCart(id, rowId, value);

        });

        $('.plus-btn').on('click', function(e) {
            e.preventDefault();
            var $this = $(this);
            var $input = $this.closest('td').find('input');
            // debugger
            var value = parseInt($input.val());

            if (value < 100) {
                value = value + 1;
            } else {
                value = 100;
            }

            $input.val(value);
            let id = $input.attr("productId");
            let rowId = $input.attr("productRowId");
            updateCart(id, rowId, value);
        });
        document.getElementById("update-btn").onclick = function() {
            document.getElementById("cart-form").submit();
        }
    </script>
    <script type="text/javascript">
        function updateCart(id, rowId, new_qty) {
            // var new_qty = $('#item-' + id).val();
            $.ajax({
                url: '{{ action('Shop@updateToCart') }}',
                type: 'POST',
                dataType: 'json',
                async: true,
                cache: false,
                data: {
                    id: id,
                    new_qty: new_qty,
                    rowId: rowId,
                    _token: '{{ csrf_token() }}'
                },
                success: function(data) {
                    flg = parseInt(data.flg);
                    if (flg === 1) {
                        window.location.replace(location.href);
                    } else {
                        // $('.item-qty-' + id).css('display', 'block').html(data.msg);
                    }

                }
            });
        }

        $('input.product-amount').on('change', function(e) {
            e.preventDefault();
            debugger
            var $this = $(this);
            var $input = $this.closest('td').find('input');
            var value = parseInt($input.val());

            if (value < 100) {
                value = value + 1;
            } else {
                value = 100;
            }

            $input.val(value);
        });

        $('#coupon-button').click(function() {
            var coupon = $('#coupon-value').val();
            if (coupon == '') {
                $('.coupon-msg').html('Bạn chưa nhập mã giảm giá').addClass('text-danger').show();
            } else {
                // $('#coupon-button').button('loading');
                setTimeout(function() {
                    $.ajax({
                            url: '{{ url('/usePromotion') }}',
                            type: 'POST',
                            dataType: 'json',
                            data: {
                                code: coupon,
                                _token: "{{ csrf_token() }}",
                            },
                        })
                        .done(function(result) {
                            $('#coupon-value').val('');
                            $('.coupon-msg').removeClass('text-danger');
                            $('.coupon-msg').removeClass('text-success');
                            $('.coupon-msg').hide();
                            if (result.error == 1) {
                                $('.coupon-msg').html(result.msg).addClass('text-danger').show();
                            } else {
                                $('#removeCoupon').show();
                                $('.coupon-msg').html(result.msg).addClass('text-success').show();
                                $('.showTotal').remove();
                                $('#showTotal').prepend(result.html);
                            }
                        })
                        .fail(function() {
                            console.log("error");
                        })
                    // .always(function() {
                    //     console.log("complete");
                    // });

                    $('#coupon-button').button('reset');
                }, 2000);
            }




        });
        $('#removeCoupon').click(function() {
            $.ajax({
                    url: '{{ url('/usePromotion') }}',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        action: "remove",
                        _token: "{{ csrf_token() }}",
                    },
                })
                .done(function(result) {
                    $('#removeCoupon').hide();
                    $('#coupon-value').val('');
                    $('.coupon-msg').removeClass('text-danger');
                    $('.coupon-msg').removeClass('text-success');
                    $('.coupon-msg').hide();
                    $('.showTotal').remove();
                    $('#showTotal').prepend(result.html);
                })
                .fail(function() {
                    console.log("error");
                })
            // .always(function() {
            //     console.log("complete");
            // });
        });
    </script>
@endpush
