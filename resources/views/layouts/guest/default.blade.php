<!DOCTYPE html>
<html dir="ltr" lang="vi">
<head>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    

    @if (isset($header))
        <meta name="description"
            content="{{$header['description']}}"/>
        <meta name="keywords"
            content="Nhà thuốc Minh Tâm"/>
        <meta name="author" content="Nhà thuốc Minh Tâm"/>
        <meta name="copyright" content="Nhà nhập khẩu và phân phối thuốc hàng đầu">
        <meta property="og:image" content="{{$header['src']}}">
        <meta property="og:url" content="{{Request::url()}}">
    @else
        <meta name="description"
            content="Nhà nhập khẩu và phân phối thuốc hàng đầu"/>
        <meta name="keywords"
            content="Nhà thuốc Minh Tâm"/>
        <meta name="author" content="Nhà nhập khẩu và phân phối thuốc hàng đầu"/>
        <meta name="copyright" content="Nhà nhập khẩu và phân phối thuốc hàng đầu">
        <meta property="og:image" content="{{ asset('documents/website') }}/{{ $logo->image }}">
        <meta property="og:url" content="{{Request::url()}}">
    @endif

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Page Title -->
    <title>{{$title." | Nhà thuốc Minh Tâm test"}}</title>

    <link rel="shortcut icon" href="{{ asset('documents/website') }}/{{ $logo->image }}"/>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap-grid-only@1.0.0/bootstrap.css')}}" rel="stylesheet" type="text/css"/>
    <!-- <link href="{{asset('css/bootstrap/css/bootstrap-theme.min.css')}}" rel="stylesheet" type="text/css"/> -->
    <link href="{{asset('css/guest/style.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@10.13.0/dist/sweetalert2.min.css" rel="stylesheet" type="text/css"/>
    <!-- <link href="{{asset('css/guest/style.bundle.css')}}" rel="stylesheet" type="text/css"/> -->
    @include('layout.guest.base._top-bar')
    @include('layout.guest.base._menu')
    @stack('style')

<link rel="stylesheet" href="http://mypham13.giaodienwebmau.com/wp-content/cache/min/1/de8d67f99f0eb285320c47b4cb38baeb.css" data-minify="1"><script src="https://connect.facebook.net/vi_VN/sdk.js?hash=8e5d278461e7528f359c0fc575c3d15b&amp;ua=modern_es6" async="" crossorigin="anonymous"></script><script id="facebook-jssdk" src="//connect.facebook.net/vi_VN/sdk.js#xfbml=1&amp;version=v2.9&amp;appId=104537736801666"></script><script src="http://mypham13.giaodienwebmau.com/wp-content/cache/min/1/a7b7ab49517bc08a6f8b0f1720950a33.js" data-minify="1"></script> <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"><link rel="profile" href="http://gmpg.org/xfn/11"><link rel="pingback" href="http://mypham13.giaodienwebmau.com/xmlrpc.php"> <script>document.documentElement.className = document.documentElement.className + ' yes-js js_active js'</script> <script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script> <title>Trang chủ - Mẫu web bán mỹ phẩm</title><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"><meta name="robots" content="noindex,follow"><meta property="og:locale" content="vi_VN"><meta property="og:type" content="website"><meta property="og:title" content="Trang chủ - Mẫu web bán mỹ phẩm"><meta property="og:url" content="http://mypham13.giaodienwebmau.com/"><meta property="og:site_name" content="Mẫu web bán mỹ phẩm"><meta name="twitter:card" content="summary_large_image"><meta name="twitter:title" content="Trang chủ - Mẫu web bán mỹ phẩm"> <script type="application/ld+json" class="yoast-schema-graph yoast-schema-graph--main">{"@context":"https://schema.org","@graph":[{"@type":"Organization","@id":"http://mypham13.giaodienwebmau.com/#organization","name":"","url":"http://mypham13.giaodienwebmau.com/","sameAs":[]},{"@type":"WebSite","@id":"http://mypham13.giaodienwebmau.com/#website","url":"http://mypham13.giaodienwebmau.com/","name":"M\u1eabu web b\u00e1n m\u1ef9 ph\u1ea9m","publisher":{"@id":"http://mypham13.giaodienwebmau.com/#organization"},"potentialAction":{"@type":"SearchAction","target":"http://mypham13.giaodienwebmau.com/?s={search_term_string}","query-input":"required name=search_term_string"}},{"@type":"WebPage","@id":"http://mypham13.giaodienwebmau.com/#webpage","url":"http://mypham13.giaodienwebmau.com/","inLanguage":"vi","name":"Trang ch\u1ee7 - M\u1eabu web b\u00e1n m\u1ef9 ph\u1ea9m","isPartOf":{"@id":"http://mypham13.giaodienwebmau.com/#website"},"about":{"@id":"http://mypham13.giaodienwebmau.com/#organization"},"datePublished":"2020-07-06T05:12:46+07:00","dateModified":"2020-07-08T09:25:00+07:00"}]}</script> <link rel="dns-prefetch" href="//s.w.org"><link rel="alternate" type="application/rss+xml" title="Dòng thông tin Mẫu web bán mỹ phẩm »" href="http://mypham13.giaodienwebmau.com/feed/"><link rel="alternate" type="application/rss+xml" title="Dòng phản hồi Mẫu web bán mỹ phẩm »" href="http://mypham13.giaodienwebmau.com/comments/feed/"><link rel="alternate" type="application/rss+xml" title="Mẫu web bán mỹ phẩm » Trang chủ Dòng phản hồi" href="http://mypham13.giaodienwebmau.com/trang-chu/feed/"><style id="woocommerce-inline-inline-css" type="text/css">.woocommerce form .form-row .required{visibility:visible}</style><style id="woo-variation-swatches-inline-css" type="text/css">.variable-item:not(.radio-variable-item){width:30px;height:30px}.wvs-style-squared .button-variable-item{min-width:30px}.button-variable-item span{font-size:16px}</style>
	

</head>


@yield("content")
@include('layout.guest.base._footer')

<div class="fb-livechat">
    <div class="ctrlq fb-overlay"></div>
    <div class="fb-widget">
        <div class="ctrlq fb-close"></div>
        <div class="fb-page" data-href="https://www.facebook.com/C%C3%B4ng-Ty-C%E1%BB%95-Ph%E1%BA%A7n-Th%C6%B0%C6%A1ng-M%E1%BA%A1i-V%C3%A0-D%C6%B0%E1%BB%A3c-Ph%E1%BA%A9m-Kim-Long-2246009528996660" data-tabs="messages"
             data-width="360" data-height="400" data-small-header="true" data-hide-cover="true"
             data-show-facepile="false">
            <blockquote cite="https://www.facebook.com/C%C3%B4ng-Ty-C%E1%BB%95-Ph%E1%BA%A7n-Th%C6%B0%C6%A1ng-M%E1%BA%A1i-V%C3%A0-D%C6%B0%E1%BB%A3c-Ph%E1%BA%A9m-Kim-Long-2246009528996660"
                        class="fb-xfbml-parse-ignore"></blockquote>
        </div>
        <div class="fb-credit">
            <a href="https://www.facebook.com/C%C3%B4ng-Ty-C%E1%BB%95-Ph%E1%BA%A7n-Th%C6%B0%C6%A1ng-M%E1%BA%A1i-V%C3%A0-D%C6%B0%E1%BB%A3c-Ph%E1%BA%A9m-Kim-Long-2246009528996660" target="_blank">
                Thuốc sức khỏe Kim Long Pharma
            </a>
        </div>
        <div id="fb-root"></div>
    </div>
    <a href="https://m.me/digital.inspiration" title="Gửi tin nhắn cho chúng tôi qua facebook" class="ctrlq fb-button">
        <div class="bubble">1</div>
    </a>
</div>
<button class="chat-zalo">
<a href="http://zalo.me/0965637541" target="_blank"><img src="https://cdn.freebiesupply.com/logos/thumbs/2x/zalo-1-logo.png"/></a>
</button>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js" type="text/javascript"></script>

<!-- <script src="{{asset('css/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script> -->

<!-- <script src="{{asset('css/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script> -->
<script src="{{asset('js/guest/scripts.bundle.js')}}" type="text/javascript"></script>


<script>
$(document).ready(function() {
$("img.lazy").lazyload({
    threshold : 200,
    effect : "fadeIn"
});
    $(window).on('load', function (){
        $.getScript("https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9", function(){
            var t = {delay: 125, overlay: $(".fb-overlay"), widget: $(".fb-widget"), button: $(".fb-button")};
            setTimeout(function () {
                $("div.fb-livechat").fadeIn()
            }, 8 * t.delay), $(".ctrlq").on("click", function (e) {
                e.preventDefault(), t.overlay.is(":visible") ? (t.overlay.fadeOut(t.delay), t.widget.stop().animate({
                        bottom: 0,
                        opacity: 0
                    }, 2 * t.delay, function () {
                        $(this).hide("slow"), t.button.show();
                    })) : t.button.fadeOut("medium", function () {
                        t.widget.stop().show().animate({bottom: "30px", opacity: 1}, 2 * t.delay), t.overlay.fadeIn(t.delay)
                    })
            })
        });
        $.getScript("https://cdn.jsdelivr.net/npm/sweetalert2@10.13.0/dist/sweetalert2.all.min.js", function(){
        
            @if(Session::has('success'))
                    Swal.fire({
                        text: "{{ session('success') }}",
                        icon: "success",
                        // buttonsStyling: false,
                        confirmButtonText: "Đồng ý",
                        customClass: {
                            confirmButton: "btn font-weight-bold btn-light-primary"
                        }
                    })
            @endif
            @if(Session::has('error'))
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


@stack('scripts')
</body>
</html>
