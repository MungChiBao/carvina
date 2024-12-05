<!DOCTYPE html>
<html dir="ltr" lang="vi">

<head>
    <!-- Meta Tags -->
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <!-- <title>{{ $title }}</title> -->

    <!-- @if (isset($header))
<meta name="description" content="{{ $header['description'] }}" />
        <meta name="keywords" content="{{ $header['keyword'] }}" />
        <meta name="author" content="{{ $configs['site_title'] }}" />
        <meta name="copyright" content="{{ $configs['site_title'] }}">
        <meta property="og:image" content="{{ $header['og_image'] }}">
        <meta property="og:url" content="{{ Request::url() }}">
@else
<meta name="description" content="{{ $configs['site_title'] }}" />
        <meta name="keywords" content="{{ $configs['site_title'] }}" />
        <meta name="author" content="{{ $configs['site_title'] }}" />
        <meta name="copyright" content="{{ $configs['site_title'] }}">
        <meta property="og:image" content="{{ asset('images/VNS-Logo.png') }}/{{ $logo->image }}">
        <meta property="og:url" content="{{ Request::url() }}">
@endif -->


    {!! SEOMeta::generate() !!}
    @if (isset($header))
        <meta property="og:image" content="{{ $header['og_image'] }}">
    @endif
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}
    {!! JsonLdMulti::generate() !!}

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Page Title -->
    <!-- <title>{{ $title ? $title : $configs['site_title'] }}</title> -->



    <link rel="icon" href="{{ asset('images/logo-icon.jpg') }}" />

    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "http:\/\/oto1.giaodienwebmau.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.22"
            }
        };
        ! function(e, a, t) {
            var n, r, o, i = a.createElement("canvas"),
                p = i.getContext && i.getContext("2d");

            function s(e, t) {
                var a = String.fromCharCode;
                p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0);
                e = i.toDataURL();
                return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
            }

            function c(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }
            for (o = Array("flag", "emoji"), t.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, r = 0; r < o.length; r++) t.supports[o[r]] = function(e) {
                if (!p || !p.fillText) return !1;
                switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                    case "flag":
                        return s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) ? !1 : !s([55356,
                            57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128,
                            56447
                        ], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203,
                            56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447
                        ]);
                    case "emoji":
                        return !s([55358, 56760, 9792, 65039], [55358, 56760, 8203, 9792, 65039])
                }
                return !1
            }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports
                .everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t
                .readyCallback = function() {
                    t.DOMReady = !0
                }, t.supports.everything || (n = function() {
                    t.readyCallback()
                }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !
                    1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
                    "complete" === a.readyState && t.readyCallback()
                })), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n
                    .wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <style type="text/css">
        .image-center {
            text-align: center;
        }

        .image-right {
            float: right;
        }

        .image-right+* {
            clear: right;
        }

        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }

        figure.image-captioned {
            display: inline-block;
            ;
        }

        figcaption {
            text-align: center;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' id='menu-icons-extra-css'
        href='{{ asset('theme/wp-content/plugins/menu-icons/css/extra.min.css?ver=0.11.2') }}' type='text/css'
        media='all'>
    <link rel='stylesheet' id='font-awesome-four-css'
        href='{{ asset('theme/wp-content/plugins/font-awesome-4-menus/css/font-awesome.min.css?ver=4.7.0') }}'
        type='text/css' media='all'>
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='dashicons-css' href='{{ asset('theme/wp-includes/css/dashicons.min.css?ver=4.9.22') }}'
        type='text/css' media='all'>
    <link rel='stylesheet' id='flatsome-ionicons-css'
        href='{{ asset('theme/font-awesome/4.7.0/css/font-awesome.min.css?ver=4.9.22') }}' type='text/css'
        media='all'>
    <link rel='stylesheet' id='flatsome-main-css'
        href='{{ asset('theme/wp-content/themes/flatsome/assets/css/flatsome.css?ver=3.6.0') }}' type='text/css'
        media='all'>
    <link rel='stylesheet' id='flatsome-shop-css'
        href='{{ asset('theme/wp-content/themes/flatsome/assets/css/flatsome-shop.css?ver=3.6.0') }}' type='text/css'
        media='all'>
    <link rel='stylesheet' id='flatsome-style-css'
        href='{{ asset('theme/wp-content/themes/salecar/style.css?ver=3.6.0') }}' type='text/css' media='all'>
    {{-- <script type='text/javascript' src='{{ asset('theme/wp-includes/js/jquery/jquery.js?ver=1.12.4') }}'></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type='text/javascript' src='{{ asset('theme/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1') }}'>
    </script>

    <style>
        .bg {
            opacity: 0;
            transition: opacity 1s;
            -webkit-transition: opacity 1s;
        }

        .bg-loaded {
            opacity: 1;
        }
    </style>
    <!--[if IE]><link rel="stylesheet" type="text/css" href="http://oto1.giaodienwebmau.com/{{ asset('theme/') }}wp-content/themes/flatsome/assets/css/ie-fallback.css"><script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.1/html5shiv.js"></script><script>
        var head = document.getElementsByTagName('head')[0],
            style = document.createElement('style');
        style.type = 'text/css';
        style.styleSheet.cssText = ':before,:after{content:none !important';
        head.appendChild(style);
        setTimeout(function() {
            head.removeChild(style);
        }, 0);
    </script><script
        src="http://oto1.giaodienwebmau.com/{{ asset('theme/') }}wp-content/themes/flatsome/assets/libs/ie-flexibility.js">
    </script><![endif]-->
    <script type="text/javascript">
        WebFontConfig = {
            google: {
                families: ["Roboto:regular,500", "Roboto:regular,regular", "Roboto:regular,regular", "Dancing+Script", ]
            }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>
    <style>
        .product-gallery img.lazy-load,
        .product-small img.lazy-load,
        .product-small img[data-lazy-srcset]:not(.lazyloaded) {
            padding-top: 100%;
        }
    </style> <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>

    <style id="custom-css" type="text/css">
        :root {
            --primary-color: #cb1d1e;
        }

        #top-bar {
            background-image: linear-gradient(to right, #4d408d, #db1e5c);
        }

        /* Site Width */

        .full-width .ubermenu-nav,
        .container,
        .row {
            max-width: 1230px
        }

        .row.row-collapse {
            max-width: 1200px
        }

        .row.row-small {
            max-width: 1222.5px
        }

        .row.row-large {
            max-width: 1260px
        }

        .header-main {
            height: 100px
        }

        #logo img {
            max-height: 100px
        }

        #logo {
            width: 228px;
        }

        #logo img {
            padding: 4px 0;
        }

        .header-bottom {
            min-height: 10px
        }

        .header-top {
            min-height: 35px
        }

        .transparent .header-main {
            height: 30px
        }

        .transparent #logo img {
            max-height: 30px
        }

        .has-transparent+.page-title:first-of-type,
        .has-transparent+#main>.page-title,
        .has-transparent+#main>div>.page-title,
        .has-transparent+#main .page-header-wrapper:first-of-type .page-title {
            padding-top: 60px;
        }

        .header.show-on-scroll,
        .stuck .header-main {
            height: 52px !important
        }

        .stuck #logo img {
            max-height: 52px !important
        }

        .search-form {
            width: 86%;
        }

        .header-bg-color,
        .header-wrapper {
            background-color: rgba(255, 255, 255, 0.9)
        }

        .header-bottom {
            background-color: #f1f1f1
        }

        .header-main .nav>li>a {
            line-height: 16px
        }

        .stuck .header-main .nav>li>a {
            line-height: 10px
        }

        @media (max-width: 549px) {
            .header-main {
                height: 70px
            }

            #logo img {
                max-height: 50px
            }
        }

        .nav-dropdown-has-arrow li.has-dropdown:before {
            border-bottom-color: #cb1d1e;
        }

        .nav .nav-dropdown {
            border-color: #cb1d1e
        }

        .nav-dropdown {
            border-radius: 3px
        }

        .nav-dropdown {
            font-size: 95%
        }

        .nav-dropdown-has-arrow li.has-dropdown:after {
            border-bottom-color: #cb1d1e;
        }

        .nav .nav-dropdown {
            background-color: #cb1d1e
        }

        .header-top {
            background-color: #cb1d1e !important;
        }

        /* Color */

        .accordion-title.active,
        .has-icon-bg .icon .icon-inner,
        .logo a,
        .primary.is-underline,
        .primary.is-link,
        .badge-outline .badge-inner,
        .nav-outline>li.active>a,
        .nav-outline>li.active>a,
        .cart-icon strong,
        [data-color='primary'],
        .is-outline.primary {
            color: #cb1d1e;
        }

        /* Color !important */

        [data-text-color="primary"] {
            color: #cb1d1e !important;
        }

        /* Background */

        .scroll-to-bullets a,
        .featured-title,
        .label-new.menu-item>a:after,
        .nav-pagination>li>.current,
        .nav-pagination>li>span:hover,
        .nav-pagination>li>a:hover,
        .has-hover:hover .badge-outline .badge-inner,
        button[type="submit"],
        .button.wc-forward:not(.checkout):not(.checkout-button),
        .button.submit-button,
        .button.primary:not(.is-outline),
        .featured-table .title,
        .is-outline:hover,
        .has-icon:hover .icon-label,
        .nav-dropdown-bold .nav-column li>a:hover,
        .nav-dropdown.nav-dropdown-bold>li>a:hover,
        .nav-dropdown-bold.dark .nav-column li>a:hover,
        .nav-dropdown.nav-dropdown-bold.dark>li>a:hover,
        .is-outline:hover,
        .tagcloud a:hover,
        .grid-tools a,
        input[type='submit']:not(.is-form),
        .box-badge:hover .box-text,
        input.button.alt,
        .nav-box>li>a:hover,
        .nav-box>li.active>a,
        .nav-pills>li.active>a,
        .current-dropdown .cart-icon strong,
        .cart-icon:hover strong,
        .nav-line-bottom>li>a:before,
        .nav-line-grow>li>a:before,
        .nav-line>li>a:before,
        .banner,
        .header-top,
        .slider-nav-circle .flickity-prev-next-button:hover svg,
        .slider-nav-circle .flickity-prev-next-button:hover .arrow,
        .primary.is-outline:hover,
        .button.primary:not(.is-outline),
        input[type='submit'].primary,
        input[type='submit'].primary,
        input[type='reset'].button,
        input[type='button'].primary,
        .badge-inner {
            background-color: #cb1d1e;
        }

        /* Border */

        .nav-vertical.nav-tabs>li.active>a,
        .scroll-to-bullets a.active,
        .nav-pagination>li>.current,
        .nav-pagination>li>span:hover,
        .nav-pagination>li>a:hover,
        .has-hover:hover .badge-outline .badge-inner,
        .accordion-title.active,
        .featured-table,
        .is-outline:hover,
        .tagcloud a:hover,
        blockquote,
        .has-border,
        .cart-icon strong:after,
        .cart-icon strong,
        .blockUI:before,
        .processing:before,
        .loading-spin,
        .slider-nav-circle .flickity-prev-next-button:hover svg,
        .slider-nav-circle .flickity-prev-next-button:hover .arrow,
        .primary.is-outline:hover {
            border-color: #cb1d1e
        }

        .nav-tabs>li.active>a {
            border-top-color: #cb1d1e
        }

        .widget_shopping_cart_content .blockUI.blockOverlay:before {
            border-left-color: #cb1d1e
        }

        .woocommerce-checkout-review-order .blockUI.blockOverlay:before {
            border-left-color: #cb1d1e
        }

        /* Fill */

        .slider .flickity-prev-next-button:hover svg,
        .slider .flickity-prev-next-button:hover .arrow {
            fill: #cb1d1e;
        }

        /* Background Color */

        [data-icon-label]:after,
        .secondary.is-underline:hover,
        .secondary.is-outline:hover,
        .icon-label,
        .button.secondary:not(.is-outline),
        .button.alt:not(.is-outline),
        .badge-inner.on-sale,
        .button.checkout,
        .single_add_to_cart_button {
            background-color: #cb1d1e;
        }

        /* Color */

        .secondary.is-underline,
        .secondary.is-link,
        .secondary.is-outline,
        .stars a.active,
        .star-rating:before,
        .woocommerce-page .star-rating:before,
        .star-rating span:before,
        .color-secondary {
            color: #cb1d1e
        }

        /* Color !important */

        [data-text-color="secondary"] {
            color: #cb1d1e !important;
        }

        /* Border */

        .secondary.is-outline:hover {
            border-color: #cb1d1e
        }

        body {
            font-size: 95%;
        }

        @media screen and (max-width: 549px) {
            body {
                font-size: 100%;
            }
        }

        body {
            font-family: "Roboto", sans-serif
        }

        body {
            font-weight: 0
        }

        body {
            color: #333333
        }

        .nav>li>a {
            font-family: "Roboto", sans-serif;
        }

        .nav>li>a {
            font-weight: 0;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .heading-font,
        .off-canvas-center .nav-sidebar.nav-vertical>li>a {
            font-family: "Roboto", sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .heading-font,
        .banner h1,
        .banner h2 {
            font-weight: 500;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .heading-font {
            color: #0a0a0a;
        }

        .alt-font {
            font-family: "Dancing Script", sans-serif;
        }

        .header:not(.transparent) .header-nav.nav>li>a {
            color: #0a0a0a;
        }

        .header:not(.transparent) .header-nav.nav>li>a:hover,
        .header:not(.transparent) .header-nav.nav>li.active>a,
        .header:not(.transparent) .header-nav.nav>li.current>a,
        .header:not(.transparent) .header-nav.nav>li>a.active,
        .header:not(.transparent) .header-nav.nav>li>a.current {
            color: #d60404;
        }

        .header-nav.nav-line-bottom>li>a:before,
        .header-nav.nav-line-grow>li>a:before,
        .header-nav.nav-line>li>a:before,
        .header-nav.nav-box>li>a:hover,
        .header-nav.nav-box>li.active>a,
        .header-nav.nav-pills>li>a:hover,
        .header-nav.nav-pills>li.active>a {
            color: #FFF !important;
            background-color: #d60404;
        }

        a {
            color: #cb1d1e;
        }

        .products.has-equal-box-heights .box-image {
            padding-top: 100%;
        }

        @media screen and (min-width: 550px) {
            .products .box-vertical .box-image {
                min-width: 498px !important;
                width: 498px !important;
            }
        }

        .absolute-footer,
        html {
            background-color: #0a0a0a
        }

        /* Custom CSS */

        #header-contact li>a>i+span {
            text-transform: none;
            font-size: 14px
        }

        .header-main .nav>li>a {
            line-height: 18px;
            text-align: center;
            font-weight: 500;
            font-size: 14px;
            padding-left: 3px;
            padding-right: 3px;
        }

        .header-search-form input[type='search'] {
            height: 40px;
            border-top-left-radius: 4px;
            border-bottom-left-radius: 4px;
            border: 1px solid #cb1d1e;
            font-size: 15px;
        }

        .header-search-form .searchform .button.icon {
            margin: 0;
            height: 40px;
            width: 40px;
            background: #cb1d1e;
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
        }

        .nav-dropdown {
            padding: 10px 0 10px
        }

        .nav-dropdown.nav-dropdown-bold>li>a:hover,
        .nav-dropdown.nav-dropdown-bold.dark>li>a:hover {
            color: #cb1d1e !important;
            border-radius: 3px;
            background-color: #ffffff !important;
            border-radius: 0;
            font-weight: 500;
        }

        .slider-nav-light .flickity-prev-next-button {
            border-radius: 3px;
            background: black;
        }

        .slider-nav-circle .flickity-prev-next-button svg,
        .slider-nav-circle .flickity-prev-next-button .arrow {
            border: 0;
        }

        .slider .flickity-prev-next-button:hover svg,
        .slider .flickity-prev-next-button:hover .arrow {
            background: black
        }

        .danh-muc .category-title {
            display: inline-block;
            margin-bottom: 10px;
            width: 100%;
        }

        .danh-muc .category-title h3,
        .danh-muc .category-title h2,
        .danh-muc .category-title h1 {
            display: block;
            width: 25%;
            float: left;
            margin: 0 auto;
            text-align: left;
            padding-left: 20px;
            line-height: 46px;
            font-size: 18px;
            text-transform: uppercase;
            letter-spacing: 0;
            font-weight: 500;
            color: #fff;
            background: #d71f5d;
        }

        @media only screen and (max-width: 768px) {

            .danh-muc .category-title h3,
            .danh-muc .category-title h2,
            .danh-muc .category-title h1 {
                width: 100%;
            }
        }

        /* .danh-muc .category-title h3:after {
            content: '';
            display: inline;
            float: right;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 0 0 46px 25px;
            border-color: #f4f4f4 transparent #f4f4f4 transparent;
        } */

        .danh-muc .sub-menu {
            display: inline-block;
            float: right;
            width: 75%;
            background: #f4f4f4;
        }

        .danh-muc .sub-menu ul {
            text-align: right;
            padding-right: 10px;
            margin: 0;
            list-style: none;
        }

        .danh-muc .sub-menu ul li {
            margin-bottom: 0;
            display: inline-block;
            padding: 0 6px;
        }

        .danh-muc .sub-menu ul li a {
            font-size: 14px;
            font-weight: 500;
            text-transform: none;
            line-height: 46px;
            color: #4a4a4a;
        }

        .danh-muc .sub-menu ul li a:hover {
            color: #cb1d1e
        }

        .row-banner .col {
            padding-bottom: 0
        }

        .product-small .product-title {
            min-height: 60px;
            font-size: 15px;
            font-weight: normal;
            margin-bottom: 8px
        }

        .product-small .product-title a {
            color: black
        }

        .product-small {
            border: 1px solid #eaeaea
        }

        .product-small .price span.amount {
            white-space: nowrap;
            color: #f00;
            font-weight: 500;
            font-size: 15px;
        }

        .badge-container {
            margin-top: 10px;
            margin-left: 10px
        }

        .badge-container .badge-inner {
            border-radius: 99px
        }

        .danh-muc .col {
            padding-bottom: 0
        }

        .product-small {
            margin-bottom: 20px
        }

        .danh-muc {
            padding-bottom: 0 !important
        }

        .footer-block {
            background: url(wp-content/uploads/2018/06/bg.jpg);
            background-repeat: repeat;
            border-top: 3px solid #cb1d1e;
        }

        b,
        strong {
            font-weight: 500
        }

        .single_add_to_cart_button {
            font-weight: 500;
            text-transform: none;
            letter-spacing: 0
        }

        .product-info span.amount {
            color: red;
            font-weight: 500
        }

        .product-info .product-title {
            font-size: 22px
        }

        .product-info .cart {
            margin-bottom: 10px
        }

        .product-info .product_meta {
            font-size: 15px
        }

        .product-info {
            padding-top: 0
        }

        .product-footer .product-tabs {
            background: #ececec
        }

        .product-tabs {
            background: #ececec
        }

        .product-footer .product-tabs li {
            margin: 0
        }

        .product-tabs li {
            margin: 0
        }

        .product-footer .product-tabs li a {
            padding: 10px 15px;
            font-size: 16px;
            font-weight: 500;
            text-transform: none;
            background: #e2e2e2
        }

        .product-tabs li a {
            padding: 10px 15px;
            font-size: 16px;
            font-weight: 500;
            text-transform: none;
            background: #e2e2e2
        }

        .product-footer .product-tabs li.active>a {
            background: red;
            color: white
        }

        .product-tabs li.active>a {
            background: #db1e5c;
            color: white
        }

        .related-products-wrapper .product-section-title {
            letter-spacing: 0;
            color: white;
            padding: 9px 10px;
            background: red;
            margin-bottom: 20px;
        }

        .related-products-wrapper .product-small {
            border: 0;
            margin-bottom: 0
        }

        .related-products-wrapper .product-small .col-inner {
            border: 1px solid #ececec
        }

        .shop-container #product-sidebar .widget_nav_menu ul li,
        #shop-sidebar .widget_nav_menu ul li,
        .post-sidebar .widget_nav_menu ul li {
            padding-left: 25px;
            background: url({{ asset('theme/wp-content/uploads/2018/06/icon-menu.png') }}) no-repeat 2px 8px;
        }

        .widget_nav_menu ul li {
            padding-left: 25px;
            background: url({{ asset('theme/wp-content/uploads/2018/06/icon-menu.png') }}) no-repeat 2px 8px;
        }

        #product-sidebar,
        #shop-sidebar,
        #product-sidebar,
        .post-sidebar {
            padding-right: 15px
        }

        #product-sidebar .widget_nav_menu ul,
        #shop-sidebar .widget_nav_menu ul,
        .post-sidebar .widget_nav_menu ul {
            background: #f7f4f4;
        }

        #product-sidebar .widget_nav_menu ul .menu-cha,
        #shop-sidebar .widget_nav_menu ul .menu-cha,
        .post-sidebar .widget_nav_menu ul .menu-cha {
            background: #4d408d !important;
            color: white;
            padding-left: 15px !important
        }

        #product-sidebar .widget_nav_menu ul .menu-cha a,
        #shop-sidebar .widget_nav_menu ul .menu-cha a,
        .post-sidebar .widget_nav_menu ul .menu-cha a {
            text-transform: uppercase;
            color: white;
        }

        #product-sidebar .widget_nav_menu ul li a,
        #shop-sidebar .widget_nav_menu ul li a,
        .post-sidebar .widget_nav_menu ul li a {
            color: black;
            width: 100%
        }

        #product-sidebar .widget_nav_menu ul li a:hover,
        #shop-sidebar .widget_nav_menu ul li a:hover,
        .post-sidebar .widget_nav_menu ul li a:hover {
            color: red
        }

        #product-sidebar .widget_nav_menu ul li:hover,
        #shop-sidebar .widget_nav_menu ul li:hover,
        .post-sidebar .widget_nav_menu ul li:hover {
            background: white
        }

        #product-sidebar .widget_nav_menu ul .menu-cha:hover,
        #shop-sidebar .widget_nav_menu ul .menu-cha:hover,
        .shop-sidebar .widget_nav_menu ul .menu-cha:hover {
            background: #525252 !important
        }

        #product-sidebar .widget_nav_menu ul .menu-cha:hover a,
        #shop-sidebar .widget_nav_menu ul .menu-cha:hover a,
        .shop-sidebar .widget_nav_menu ul .menu-cha:hover a {
            color: white
        }

        #product-sidebar .is-divider,
        #shop-sidebar .is-divider,
        .shop-sidebar .is-divider {
            height: 1px;
            max-width: 100%;
        }

        #product-sidebar span.widget-title,
        #shop-sidebar span.widget-title,
        .shop-sidebar span.widget-title,
        .shop-sidebar span.widget-title,
        .post-sidebar span.widget-title {
            color: red
        }

        .shop-container .product-small {
            border: 0;
            padding-bottom: 0
        }

        .shop-container .product-small .box {
            border: 1px solid #eaeaea
        }

        .shop-page-title {
            background: #f1f1f1;
            padding-bottom: 15px;
        }

        .blog-single .large-9 {
            padding-left: 0
        }

        .blog-single .is-divider {
            height: 1px;
            max-width: 100%
        }

        .entry-content {
            padding-top: 0
        }

        footer.entry-meta {
            font-size: 15px
        }

        .flatsome_recent_posts li a {
            color: black
        }

        /* Custom CSS Mobile */

        @media (max-width: 549px) {

            .danh-muc .category-title h3,
            .danh-muc .sub-menu {
                width: 100%;
            }

            .danh-muc .sub-menu ul li {
                margin-left: 0
            }

            .danh-muc .sub-menu ul li a {
                line-height: 30px
            }

            .danh-muc .sub-menu ul {
                text-align: left
            }

            .danh-muc .col .post-item {
                flex-basis: 50%;
                max-width: 50%
            }
        }

        .label-new.menu-item>a:after {
            content: "New";
        }

        .label-hot.menu-item>a:after {
            content: "Hot";
        }

        .label-sale.menu-item>a:after {
            content: "Sale";
        }

        .label-popular.menu-item>a:after {
            content: "Popular";
        }

        .sub-sub-menu {
            display: none;
            position: absolute;
            top: -1.5px;
            left: 100%;
            width: 240px;
            background-color: #cb1d1e;
            border-radius: 2px;
            padding: 10px !important;
        }

        .sub-sub-menu>li {
            padding: 6px 20px;
            margin-left: 4px;
        }

        .sub-sub-menu>li:hover {
            background: #fff;
            cursor: pointer;
        }

        .sub-sub-menu>li:hover a {
            color: #cb1d1e;
        }

        .sub-sub-menu>li>a {
            display: block;
        }

        .has-sub-sub:hover .sub-sub-menu {
            display: block;
            top: 0;
            left: 100%;
        }
    </style>

    <style>
        @media only screen and (min-width: 1024px) {
            .category-page-title {
                padding-top: 180px !important;
            }
        }


        @media only screen and (max-width: 768px) {
            .text-center>div {
                min-height: 44px !important;
            }

            #search-input {
                width: 100% !important;
                right: 0 !important;
            }
        }



        .category-page-title {
            padding-top: 115px;
        }
    </style>


    @stack('style')



</head>

<body
    class="home page-template page-template-page-blank page-template-page-blank-php page page-id-2 woocommerce-no-js header-shadow lightbox lazy-icons nav-dropdown-has-arrow">

    <a class="skip-link screen-reader-text" href="#main">Skip to content</a>

    <div id="wrapper">


        <header id="header" class="header" style="position:fixed">
            <div class="header-wrapper">
                <div id="top-bar" class="header-top hide-for-sticky nav-dark">
                    <div class="flex-row container">
                        <div class="flex-col hide-for-medium flex-left">
                            <ul class="nav nav-left medium-nav-center nav-small  nav-divided">
                                <li id="menu-item-14"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item active  menu-item-14">
                                    <a style="font-size: 14px" class="nav-top-link"><i
                                            class="fa-solid fa-location-dot"></i>&nbsp; 499 Lương Thế Vinh, Mễ Trì, Nam
                                        Từ Liêm, Hà Nội</a>
                                </li>

                            </ul>
                        </div>
                        <!-- flex-col left -->

                        <div class="flex-col hide-for-medium flex-center" style="padding: 22px 0; ">
                            <ul class="nav nav-center nav-small  nav-divided">
                                <form action="{{ url('tim-kiem.html') }}" method="get" style="margin: 0">
                                    <input name="keyword" id="search-input" style="width:400px;" type="text"
                                        placeholder="Nhập sản phẩm bạn cần tìm...">
                                    <button type="submit"
                                        style="position: absolute; right:-15px; background:#cb4e92; ">
                                        <i style="color:#fff" class="fa-solid fa-search"
                                            style="font-size: 13px;"></i>
                                    </button>
                                </form>
                            </ul>
                            <ul id="search-suggestions"
                                style="position: absolute; width: 400px;
                            background: #fff;
                            padding: 10px; display: none;">
                                abcasdfafsjk
                            </ul>
                        </div>
                        <!-- center -->

                        <div class="flex-col hide-for-medium flex-right">
                            <ul class="nav top-bar-nav nav-right nav-small  nav-divided">
                                <li class="header-contact-wrapper">
                                    <ul id="header-contact" class="nav nav-divided nav-uppercase header-contact">

                                        <li class="">
                                            <a href="tel:0946611956" class="tooltip" title="0946611956">
                                                <i class="fa-solid fa-phone" style="font-size: 13px;"></i>
                                                <span>0946.611.956</span>
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="tel:0915223009" class="tooltip" title="0915223009">
                                                <i class="fa-solid fa-phone" style="font-size: 13px;"></i>
                                                <span>0915.223.009</span>
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="tel:0988920168" class="tooltip" title="0988920168">
                                                <i class="fa-solid fa-phone" style="font-size: 13px;"></i>
                                                <span>0988.920.168</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- .flex-col right -->

                        <div class="flex-col show-for-medium flex-grow">
                            <ul class="nav nav-center nav-small mobile-nav  nav-divided">
                                <li class="html custom html_topbar_left">TRUNG TÂM TƯ VẤN LÀM ĐẸP NỘI THẤT, NGOẠI THẤT
                                    Ô TÔ
                                </li>
                            </ul>

                        </div>

                    </div>
                    <!-- .flex-row -->
                </div>
                <!-- #header-top -->
                <div id="masthead" class="header-main hide-for-sticky">
                    <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">

                        <!-- Logo -->
                        <div id="logo" class="flex-col logo">
                            <!-- Header logo -->
                            <a href="{{ url('/') }}" title="{{ $configs['site_title'] }}" rel="home">
                                <img width="228" height="100" src="{{ asset('images/logo.png') }}"
                                    class="header_logo header-logo" alt="{{ $configs['site_title'] }}"><img
                                    width="228" height="100" src="{{ asset('images/logo.png') }}"
                                    class="header-logo-dark" alt="{{ $configs['site_title'] }}"></a>
                        </div>

                        <!-- Mobile Left Elements -->
                        <div class="flex-col show-for-medium flex-left">
                            <ul class="mobile-nav nav nav-left ">
                                <li class="nav-icon has-icon">
                                    <a href="#" data-open="#main-menu" data-pos="left"
                                        data-bg="main-menu-overlay" data-color="" class="is-small"
                                        aria-controls="main-menu" aria-expanded="false">

                                        <i class="fa-solid fa-bars"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Left Elements -->
                        {{-- <div class="flex-col hide-for-medium flex-left flex-grow">
                            <ul
                                class="header-nav header-nav-main nav nav-left  nav-size-medium nav-spacing-xlarge nav-uppercase">
                                <li class="header-search-form search-form html relative has-icon">
                                    <div class="header-search-form-wrapper">
                                        <div class="searchform-wrapper ux-search-box relative form- is-normal">
                                            <form role="search" method="get" class="searchform"
                                                action="http://oto1.giaodienwebmau.com/">
                                                <div class="flex-row relative">
                                                    <div class="flex-col flex-grow">
                                                        <input type="search" class="search-field mb-0"
                                                            name="s" value=""
                                                            placeholder="Nhập từ khóa tìm kiếm...">
                                                        <input type="hidden" name="post_type" value="product">
                                                    </div>
                                                    <!-- .flex-col -->
                                                    <div class="flex-col">
                                                        <button type="submit"
                                                            class="ux-search-submit submit-button secondary button icon mb-0">
                                                            <i class="fa-solid fa-magnifying-glass"></i> </button>
                                                    </div>
                                                    <!-- .flex-col -->
                                                </div>
                                                <!-- .flex-row -->
                                                <div class="live-search-results text-left z-top"></div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div> --}}

                        <!-- Right Elements -->
                        <div class="flex-col hide-for-medium ">
                            <ul
                                class="header-nav header-nav-main nav nav-right  nav-size-medium nav-spacing-xlarge nav-uppercase">
                                <li id="menu-item-40"
                                    class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-40"><a
                                        href="{{ url('/') }}" class="nav-top-link">Trang chủ</a>
                                </li>

                                @foreach ($categories as $category)
                                    @if (count($category->getChildrens($category->id)) > 0)
                                        <li id="menu-item-33"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  menu-item-33 has-dropdown">
                                            <a href="{{ url($category->slug . '.html') }}"
                                                class="nav-top-link">{{ $category->name }}<i style="font-size: 14px"
                                                    class="fa-solid fa-chevron-down"></i></a>
                                            <ul class='nav-dropdown nav-dropdown-bold dark'>
                                                @foreach ($category->getChildrens($category->id) as $cateChild)
                                                    @if (count($cateChild->getChildrens($cateChild->id)) > 0)
                                                        <li id="menu-item-62"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-62 has-sub-sub">
                                                            <a
                                                                href="{{ url($cateChild->slug . '.html') }}">{{ $cateChild->name }}</a>
                                                            <ul class="sub-sub-menu">
                                                                @foreach ($cateChild->getChildrens($cateChild->id) as $item)
                                                                    <li> <a
                                                                            href="{{ url($item->slug . '.html') }}">{{ $item->name }}</a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>

                                                        </li>
                                                    @else
                                                        <li id="menu-item-63"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-63">
                                                            <a
                                                                href="{{ url($cateChild->slug . '.html') }}">{{ $cateChild->name }}</a>
                                                        </li>
                                                    @endif
                                                @endforeach

                                            </ul>
                                        </li>
                                    @else
                                        <li id="menu-item-40"
                                            class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-40">
                                            <a href="{{ url($category->slug . '.html') }}"
                                                class="nav-top-link">{{ $category->name }}</a>
                                        </li>
                                    @endif
                                @endforeach
                                @foreach ($newsCategories as $category)
                                    {{-- <li id="menu-item-40"
                                        class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-40">
                                        <a href="{{ url($item->slug . '.html') }}"
                                            class="nav-top-link">{{ $item->title }}</a>
                                    </li> --}}
                                    @if (count($category->getCateChild($category->id)) > 0)
                                        <li id="menu-item-33"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  menu-item-33 has-dropdown">
                                            <a href="{{ url($category->slug . '.html') }}"
                                                class="nav-top-link">{{ $category->title }}<i style="font-size: 14px"
                                                    class="fa-solid fa-chevron-down"></i></a>
                                            <ul class='nav-dropdown nav-dropdown-bold dark'>
                                                @foreach ($category->getCateChild($category->id) as $cateChild)
                                                    <li id="menu-item-62"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-62 has-sub-sub">

                                                        <a
                                                            href="{{ url($cateChild->slug . '.html') }}">{{ $cateChild->title }}</a>

                                                    </li>
                                                @endforeach

                                            </ul>
                                        </li>
                                    @else
                                        <li id="menu-item-40"
                                            class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-40">
                                            <a href="{{ url($category->slug . '.html') }}"
                                                class="nav-top-link">{{ $category->title }}</a>
                                        </li>
                                    @endif
                                @endforeach


                                <li id="menu-item-40"
                                    class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-40"><a
                                        href="{{ url('gioi-thieu.html') }}" class="nav-top-link">Giới thiệu</a>
                                </li>

                                <li id="menu-item-40"
                                    class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-40"><a
                                        href="{{ url('lien-he.html') }}" class="nav-top-link">Liên hệ</a>
                                </li>

                                <li class="menu-item-40">

                                    <a href="{{ url('gio-hang.html') }}"
                                        class="header-cart-link off-canvas-toggle nav-top-link is-small"
                                        data-open="" data-class="off-canvas-cart" title="Giỏ hàng"
                                        data-pos="right">

                                        <span class="cart-icon image-icon">
                                            <strong id="count_cart">{{ $cartCount }}</strong>
                                        </span>
                                    </a>



                                </li>



                            </ul>
                        </div>

                        <!-- Mobile Right Elements -->
                        <div class="flex-col show-for-medium flex-right">
                            <ul class="mobile-nav nav nav-right ">
                                <li class="cart-item has-icon">

                                    <a href="{{ url('gio-hang.html') }}"
                                        class="header-cart-link off-canvas-toggle nav-top-link is-small"
                                        data-open="" data-class="off-canvas-cart" title="Giỏ hàng"
                                        data-pos="right">

                                        <span class="cart-icon image-icon">
                                            <strong id="count_cart">{{ $cartCount }}</strong>
                                        </span>
                                    </a>



                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- .header-inner -->

                </div>
                <!-- .header-main -->
                <div class="header-bg-container fill">
                    <div class="header-bg-image fill"></div>
                    <div class="header-bg-color fill"></div>
                </div>
                <!-- .header-bg-container -->
            </div>
            <!-- header-wrapper-->
        </header>


        @if ($configs['site_status'])
            @yield('notice')
            @yield('breadcrumb')
            @yield('content')
        @else
            <div id="columns" class="container" style="color:red;text-align: center;">
                <img src="{{ asset('theme/images/maintenance.png') }}"><br>
                <h3><i class="fas fa-exclamation"></i>Xin lỗi, website đang bảo trì!</h3>
                <!-- /.col -->
            </div>
        @endif

        <!-- #main -->


        <footer id="footer" class="footer-wrapper" style="background: #000">

            <section class="section footer-block" id="section_2035343158">
                <div class="bg section-bg fill bg-fill  bg-loaded">


                </div>
                <!-- .section-bg -->

                <div class="section-content relative">


                    <div class="row" id="row-1980095039">

                        <div class="col medium-3 small-12 large-3">
                            <div class="col-inner dark">


                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.938887444143!2d105.7858406!3d20.995086699999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad0f1ac561d1%3A0xb6720e8c5f0d3ba8!2zQ2FydmluYSAtIFRydW5nIHTDom0gdMawIHbhuqVuIGzDoG0gxJHhurlwLCBuw6JuZyBj4bqlcCB0aeG7h24gw61jaCB4ZSBoxqFp!5e0!3m2!1svi!2s!4v1685329413825!5m2!1svi!2s"
                                    width="100%" height="200" style="border:0;" allowfullscreen=""
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                <h3>SHOW ROOM</h3>
                                <ul>
                                    <li><span style="font-size: 95%; color: #999999;">Địa chỉ: 499 Lương Thế Vinh, Mễ
                                            Trì, Nam Từ Liêm, Hà Nội</span></li>
                                    <li><span style="font-size: 95%; color: #999999;">Giờ mở cửa: Từ 8:00 - 21:00 hằng
                                            ngày, kể cả ngày lễ và Chủ nhật.</span></li>
                                </ul>

                            </div>
                        </div>
                        <div class="col medium-3 small-12 large-3">
                            <div class="col-inner dark">

                                <h3>HỖ TRỢ VÀ TƯ VẤN</h3>
                                <ul>
                                    <li><span style="font-size: 95%; color: #999999;">Hotline: 0946611956 <br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            0915223009 <br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            0988920168
                                        </span></li>
                                    <li><a href="https://zalo.me/0946611956"><span
                                                style="font-size: 95%; color: #999999;">Zalo</span></a> </li>
                                    <li><a href="https://www.facebook.com/carvina499luongthevinh"><span
                                                style="font-size: 95%; color: #999999;">Facebook</span></a></li>

                                </ul>

                            </div>
                        </div>
                        <div class="col medium-3 small-12 large-3">
                            <div class="col-inner dark">

                                <h3>NHẬN TƯ VẤN</h3>


                                <div class="gap-element" style="display:block; height:auto; padding-top:19px"
                                    class="clearfix"></div>

                                <form method="post" action="{{ url('lien-he.html') }}">
                                    @csrf
                                    <input type="hidden" value="" name="email">
                                    <input type="hidden" value="" name="title">
                                    <input type="text" name="name" placeholder="Họ và tên...">
                                    <input required type="number" name="phone" placeholder="Số điện thoại...">
                                    <input required type="hidden" name="content" placeholder="Bạn muốn tư vấn..."
                                        value="">
                                    <input type="submit" value="Gửi đi">

                                </form>

                            </div>
                        </div>
                        <div class="col medium-3 small-12 large-3">
                            <div class="col-inner dark">

                                <h3>TRUY CẬP NHANH</h3>
                                <ul>
                                    <li><a href="{{ url('tin-tuc.html') }}"
                                            style="font-size: 95%; color: #999999;">Xe và đời sống</a></li>
                                    <li><a href="{{ url('lien-he.html') }}"
                                            style="font-size: 95%; color: #999999;">Liên hệ </a></li>
                                    <li><a href="{{ url('gioi-thieu.html') }}"
                                            style="font-size: 95%; color: #999999;">Giới thiệu</a></li>
                                    @foreach ($categories as $category)
                                        <li><a href="{{ url($category->slug . '.html') }}"
                                                style="font-size: 95%; color: #999999;">{{ $category->name }}</a></li>
                                    @endforeach
                                </ul>


                            </div>
                        </div>


                    </div>

                </div>
                <!-- .section-content -->


                <style scope="scope">
                    #section_2035343158 {
                        padding-top: 30px;
                        padding-bottom: 30px;
                    }
                </style>
            </section>

            <div class="absolute-footer dark medium-text-center text-center">
                <div class="container clearfix">


                    <div class="footer-primary pull-left">
                        <div class="copyright-footer">
                            Copyright 2023 © <strong>Carvina - Trung tâm tư vấn làm đẹp nội thất, ngoại thất ô tô
                            </strong>
                        </div>
                    </div>
                    <!-- .left -->
                </div>
                <!-- .container -->
            </div>
            <!-- .absolute-footer -->
            <a href="#top"
                class="back-to-top button invert plain is-outline hide-for-medium icon circle fixed bottom z-1"
                id="top-link"><i class="fa-solid fa-chevron-up"></i></a>

        </footer>
        <!-- .footer-wrapper -->

    </div>
    <!-- #wrapper -->

    <!-- Mobile Sidebar -->

    <div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">
        <div class="sidebar-menu no-scrollbar ">
            <ul class="nav nav-sidebar  nav-vertical nav-uppercase">

                <li class="header-search-form search-form html relative has-icon">
                    <div class="header-search-form-wrapper">
                        <div class="searchform-wrapper ux-search-box relative form- is-normal">
                            <form role="search" method="get" class="searchform"
                                action="{{ url('tim-kiem.html') }}">
                                <div class="flex-row relative">
                                    <div class="flex-col flex-grow">
                                        <input type="search" class="search-field mb-0" name="keyword"
                                            value="" placeholder="Nhập từ khóa tìm kiếm...">
                                        {{-- <input type="hidden" name="post_type" value="product"> --}}
                                    </div>
                                    <!-- .flex-col -->
                                    <div class="flex-col">
                                        <button type="submit"
                                            class="ux-search-submit submit-button secondary button icon mb-0">
                                            <i style="color:#fff" class="fa-solid fa-search"
                                                style="font-size: 13px;"></i> </button>
                                    </div>
                                    <!-- .flex-col -->
                                </div>
                                <!-- .flex-row -->
                                <div class="live-search-results text-left z-top"></div>
                            </form>
                        </div>
                    </div>
                </li>
                @foreach ($categories as $category)
                    @if (count($category->getChildrens($category->id)) > 0)
                        <li
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-33">
                            <a href="{{ url($category->slug . '.html') }}"
                                class="nav-top-link">{{ $category->name }}</a>
                            <ul class="children">
                                @foreach ($category->getChildrens($category->id) as $cateChild)
                                    @if (count($cateChild->getChildrens($cateChild->id)) > 0)
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-33"
                                            style="display: flex;
                        flex-flow: wrap;
                        align-items: center;
                        margin-bottom: 0 !important">
                                            <a href="{{ url($cateChild->slug . '.html') }}"
                                                class="nav-top-link">{{ $cateChild->name }}</a>
                                            <ul class="children" style="padding-bottom: 0 !important">
                                                @foreach ($cateChild->getChildrens($cateChild->id) as $item)
                                                    <li
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-63">
                                                        <a
                                                            href="{{ url($item->slug . '.html') }}">{{ $item->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>

                                        </li>
                                    @else
                                        <li
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-64">
                                            <a
                                                href="{{ url($cateChild->slug . '.html') }}">{{ $cateChild->name }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                    @else
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-40"><a
                                href="{{ url($category->slug . '.html') }}"
                                class="nav-top-link">{{ $category->name }}</a></li>
                    @endif
                @endforeach
                @foreach ($newsCategories as $item)
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-40"><a
                            href="{{ url($item->slug . '.html') }}" class="nav-top-link">{{ $item->title }}</a>
                    </li>
                @endforeach


                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-40"><a
                        href="{{ url('gioi-thieu.html') }}" class="nav-top-link">Giới thiệu</a></li>

                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-40"><a
                        href="{{ url('lien-he.html') }}" class="nav-top-link">Liên hệ</a></li>
            </ul>
        </div>
        <!-- inner -->
    </div>


    <script type="text/javascript">
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        document.body.className = c;
    </script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wc_add_to_cart_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "Xem gi\u1ecf h\u00e0ng",
            "cart_url": "http:\/\/oto1.giaodienwebmau.com",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
        /* ]]> */
    </script>
    <script type='text/javascript'
        src='{{ asset('theme/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=3.4.8') }}'></script>
    <script type='text/javascript'
        src='{{ asset('theme/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70') }}'>
    </script>
    <script type='text/javascript'
        src='{{ asset('theme/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4') }}'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var woocommerce_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
        };
        /* ]]> */
    </script>
    <script type='text/javascript'
        src='{{ asset('theme/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=3.4.8') }}'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wc_cart_fragments_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "cart_hash_key": "wc_cart_hash_31fec57d7950e7cf75e8fd2df1a93c18",
            "fragment_name": "wc_fragments_31fec57d7950e7cf75e8fd2df1a93c18"
        };
        /* ]]> */
    </script>
    <script type='text/javascript'
        src='{{ asset('theme/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=3.4.8') }}'>
    </script>
    <script type='text/javascript' src='{{ asset('theme/wp-includes/js/hoverIntent.min.js?ver=1.8.1') }}'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var flatsomeVars = {
            "ajaxurl": "http:\/\/oto1.giaodienwebmau.com\/wp-admin\/admin-ajax.php",
            "rtl": "",
            "sticky_height": "52",
            "user": {
                "can_edit_pages": false
            }
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{ asset('theme/wp-content/themes/flatsome/assets/js/flatsome.js?ver=3.6.0') }}'>
    </script>
    <script type='text/javascript'
        src='{{ asset('theme/wp-content/themes/flatsome/inc/extensions/flatsome-lazy-load/flatsome-lazy-load.js?ver=1.0') }}'>
    </script>
    <script type='text/javascript'
        src='{{ asset('theme/wp-content/themes/flatsome/assets/js/woocommerce.js?ver=3.6.0') }}'></script>
    <script type='text/javascript' src='{{ asset('theme/wp-includes/js/wp-embed.min.js?ver=4.9.22') }}'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var _zxcvbnSettings = {
            "src": "http:\/\/oto1.giaodienwebmau.com\/wp-includes\/js\/zxcvbn.min.js"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{ asset('theme/wp-includes/js/zxcvbn-async.min.js?ver=1.0') }}'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var pwsL10n = {
            "unknown": "M\u1eadt kh\u1ea9u m\u1ea1nh kh\u00f4ng x\u00e1c \u0111\u1ecbnh",
            "short": "R\u1ea5t y\u1ebfu",
            "bad": "Y\u1ebfu",
            "good": "Trung b\u00ecnh",
            "strong": "M\u1ea1nh",
            "mismatch": "M\u1eadt kh\u1ea9u kh\u00f4ng kh\u1edbp"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{ asset('theme/wp-admin/js/password-strength-meter.min.js?ver=4.9.22') }}'>
    </script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wc_password_strength_meter_params = {
            "min_password_strength": "3",
            "i18n_password_error": "Vui l\u00f2ng nh\u1eadp m\u1eadt kh\u1ea9u kh\u00f3 h\u01a1n.",
            "i18n_password_hint": "G\u1ee3i \u00fd: M\u1eadt kh\u1ea9u ph\u1ea3i c\u00f3 \u00edt nh\u1ea5t 12 k\u00fd t\u1ef1. \u0110\u1ec3 n\u00e2ng cao \u0111\u1ed9 b\u1ea3o m\u1eadt, s\u1eed d\u1ee5ng ch\u1eef in hoa, in th\u01b0\u1eddng, ch\u1eef s\u1ed1 v\u00e0 c\u00e1c k\u00fd t\u1ef1 \u0111\u1eb7c bi\u1ec7t nh\u01b0 ! \" ? $ % ^ & )."
        };
        /* ]]> */
    </script>
    <script type='text/javascript'
        src='{{ asset('theme/wp-content/plugins/woocommerce/assets/js/frontend/password-strength-meter.min.js?ver=3.4.8') }}'>
    </script>

    @include($theme . '.components._contact-button')





    <script type="text/javascript">
        function formatNumber(num) {
            return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
        }
        $('#shipping').change(function() {
            $('#total').html(formatNumber(parseInt({{ Cart::subtotal() }}) + parseInt($('#shipping').val())));
        });
    </script>


    <script>
        function buyNow(id, instance = null) {

            qty = $('#quantity').val();
            if (instance == null || instance == '') {
                var cart = $('.shopping-cart');
            } else {
                var cart = $('.shopping-' + instance);
            }

            $.ajax({
                url: '{{ action('Shop@addToCart') }}',
                type: 'POST',
                dataType: 'json',
                data: {
                    id: id,
                    instance: instance,
                    qty: qty,
                    _token: '{{ csrf_token() }}'
                },
                success: function(data) {
                    flg = parseInt(data.flg);
                    if (flg === 1) {
                        setTimeout(function() {
                            if (data.instance == 'default') {
                                $('#count_cart').html(data.count_cart);
                                $('#cart-sidebar').html(data.htmlCart);
                                $('.subtotal').html(data.subtotal);
                                $('.top-subtotal').show();
                                $('.actions').show();
                            } else {
                                $('#count_' + data.instance).html(data.count_cart);
                            }

                        }, 1000);
                        window.location.href = '{{ action('Shop@cart') }}';


                    } else {
                        alert(data.error);
                    }

                }
            });

        }
    </script>

    <script>
        function addToCart(id, instance = null) {
            qty = $('#quantity').val();
            if (instance == null || instance == '') {
                var cart = $('.shopping-cart');
            } else {
                var cart = $('.shopping-' + instance);
            }
            // var imgtodrag = $('.product-box-'+id).find("img").eq(0);
            // if (imgtodrag) {
            //     var imgclone = imgtodrag.clone()
            //         .offset({
            //         top: imgtodrag.offset().top,
            //         left: imgtodrag.offset().left
            //     })
            //         .css({
            //         'opacity': '0.5',
            //             'position': 'absolute',
            //             'width': '150px',
            //             'z-index': '99999999'
            //     })
            //         .appendTo($('body'))
            //         .animate({
            //         'top': cart.offset().top,
            //             'left': cart.offset().left,
            //             'width': 75,
            //             'height': 75
            //     }, 1000, 'easeInOutExpo');
            //     // setTimeout(function () {
            //     //     cart.effect("shake", {times: 2}, 200);
            //     // }, 1500);

            //     imgclone.animate({
            //         'width': 0,
            //             'height': 0
            //     }, function () {
            //         $(this).detach()
            //     });
            // }

            $.ajax({
                url: '{{ action('Shop@addToCart') }}',
                type: 'POST',
                dataType: 'json',
                data: {
                    id: id,
                    qty: qty,
                    instance: instance,
                    _token: '{{ csrf_token() }}'
                },
                success: function(data) {

                    flg = parseInt(data.flg);
                    if (flg === 1) {
                        setTimeout(function() {
                            if (data.instance == 'default') {
                                $('#count_cart').html(data.count_cart);
                                $('#cart-sidebar').html(data.htmlCart);
                                $('.subtotal').html(data.subtotal);
                                $('.top-subtotal').show();
                                $('.actions').show();
                            } else {
                                $('#count_' + data.instance).html(data.count_cart);
                            }

                        }, 1000);

                        Swal.fire({
                            icon: 'success',
                            title: 'Thêm vào giỏ hàng thành công!',
                            showConfirmButton: false,
                        })

                    } else {
                        alert(data.error);
                    }

                }
            });

        }
    </script>

    <script>
        let $ = jQuery;
        $(document).ready(function() {
            $(window).on('load', function() {
                $.getScript("https://cdn.jsdelivr.net/npm/sweetalert2@10.13.0/dist/sweetalert2.all.min.js",
                    function() {

                        @if (Session::has('message'))
                            Swal.fire({
                                text: "{{ session('message') }}",
                                icon: "success",
                                // buttonsStyling: false,
                                confirmButtonText: "Đồng ý",
                                customClass: {
                                    confirmButton: "btn font-weight-bold btn-light-primary"
                                }
                            })
                        @endif
                        @if (Session::has('error'))
                            Swal.fire({
                                text: "{{ session('error') }}",
                                icon: "error",
                                // buttonsStyling: false,
                                confirmButtonText: "Đồng ý",
                                customClass: {
                                    confirmButton: "btn font-weight-bold btn-light-primary"
                                }
                            })
                        @endif
                    });
            })
        });
    </script>

    <script>
        function hover_menu_left() {

            // console.log('abc');
            var firstTime = true;
            var top = -1;

            var timer;
            var delay = 100;
            $('.categories-main').hover(function() {
                var that = $(this);
                timer = setTimeout(function() {
                    $(that).addClass('active');
                }, delay);
            }, function() {
                $(this).removeClass('active');
                clearTimeout(timer);
            });

            $('.categories-list-box').hover(function() {
                $('#jsMenuMarkLayer').stop().delay(20).fadeIn(100);
            }, function() {
                $('#jsMenuMarkLayer').stop().delay(20).fadeOut(100);
            });
            $('.nav-main').menuAim({
                rowSelector: "li.menuItem",
                submenuDirection: "right",
                activate: function(a) {
                    if (firstTime) {
                        $(a).addClass('active').children('.sub-cate').css({
                            width: '0',
                            display: 'block'
                        }).animate({
                            width: '720px'
                        }, 100);
                    } else {
                        $(a).addClass('active').children('.sub-cate').show();
                    }
                    var ind = $(a).index();
                    /*
                    for (var i = 0; i <= ind; i++) {
                    $('.nav-main > li').eq(ind).find('div.sub-cate').css({'top': top + 'px'});
                    top = top - 61;
                    }*/
                    firstTime = false;
                    $("img.lazyMenu", $(a)).each(function() {
                        $(this).attr("src", $(this).attr("data-original"));
                        $(this).removeAttr("data-original");
                    });
                },
                deactivate: function(a) {
                    $(a).removeClass('active').children('.sub-cate').hide();
                    //top = -1;
                },
                exitMenu: function() {
                    firstTime = true;
                    $('.sub-cate').hide();
                    $('.nav-main-box > .nav-main > li').removeClass('active');
                    // top = -1;
                    return true;
                }
            });
        }

        function menuAimExit() {
            $('.sub-cate').hide();
            $('.nav-main-box > .nav-main > li').removeClass('active');
        }

        $(document).ready(function($) {
            hover_menu_left();
        })
    </script>

    {{-- <script>
        var suggestions = ["Sản phẩm A", "Sản phẩm B", "Sản phẩm C", "Sản phẩm D", "Sản phẩm E"];

        var searchInput = document.getElementById('search-input');
        var searchSuggestions = document.getElementById('search-suggestions');

        // Bắt sự kiện khi người dùng tập trung vào ô input
        searchInput.addEventListener('focus', function() {
            showSuggestions();
        });

        // Bắt sự kiện khi người dùng không tập trung vào ô input
        searchInput.addEventListener('blur', function() {
            hideSuggestions();
        });

        // Bắt sự kiện khi người dùng gõ vào ô input
        searchInput.addEventListener('input', function() {
            filterSuggestions();
        });

        // Hiển thị gợi ý tìm kiếm
        function showSuggestions() {
            searchSuggestions.style.display = 'block';
        }

        // Ẩn gợi ý tìm kiếm
        function hideSuggestions() {
            searchSuggestions.style.display = 'none';
        }

        // Lọc và hiển thị các gợi ý tìm kiếm phù hợp
        function filterSuggestions() {
            var inputValue = searchInput.value.toLowerCase();
            var filteredSuggestions = suggestions.filter(function(suggestion) {
                return suggestion.toLowerCase().indexOf(inputValue) > -1;
            });

            // Xóa các gợi ý cũ
            searchSuggestions.innerHTML = '';

            // Hiển thị các gợi ý mới
            filteredSuggestions.forEach(function(suggestion) {
                var suggestionElement = document.createElement('div');
                suggestionElement.className = 'suggestion';
                suggestionElement.textContent = suggestion;
                suggestionElement.addEventListener('click', function() {
                    // Xử lý khi người dùng chọn gợi ý
                    searchInput.value = suggestion;
                    hideSuggestions();
                });
                searchSuggestions.appendChild(suggestionElement);
            });
        }
    </script> --}}

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GD0ZE6QL7R"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GD0ZE6QL7R');
</script>

<!-- Messenger Plugin chat Code -->
<div id="fb-root"></div>

<!-- Your Plugin chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "897090677045172");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code --> 
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v17.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>

    @stack('scripts')

</body>

</html>
