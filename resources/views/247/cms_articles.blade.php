@extends($theme . '.shop_layout')

@push('style')
    <link href="{{ asset('css/guest/news/news.css') }}" rel="stylesheet" type="text/css" />
    {{-- <style>
        .search-input{
            width:400px;  
        }
    </style> --}}
@endpush
@section('content')
<style>

    @media only screen and (max-width: 768px) {

    .search-input{
        width: 100% !important;
    }

    .nav-search-form{
        padding-right: 50px;
    }
}

@media only screen and (min-width: 768px) {

.search-input{
    width: 400px;
}
.btn-search-input{
    right:-15px;
}
}
</style>
<div class="shop-page-title category-page-title page-title ">

    <div class="page-title-inner flex-row  medium-flex-wrap container">
        <div class="flex-col flex-grow medium-text-center">
            <div class="is-small">
                <nav class="woocommerce-breadcrumb breadcrumbs"><a href="{{ url('/') }}">Trang chủ</a> <span class="divider">&#47;</span>
                    @if (isset($categorySelf))
                    {{ $categorySelf->title }} 
                    @else
                        Kết quả tìm kiếm từ khóa : {{ $search_keyword }}
                    @endif
                    
                    
                   </nav>
            </div>
        </div>
        <!-- .flex-left -->

        <div class="flex-col medium-text-center">
            <ul class="nav nav-center nav-small  nav-divided nav-search-form">
                <form action="{{ url('tim-kiem-bai-viet.html') }}" method="get" style="margin: 0">
                    <input name="keyword" id="search-input" style="width:400px"  type="text"
                    placeholder="Nhập bài viết bạn cần tìm..." class="search-input">
                <button class="btn-search-input" type="submit" style="position: absolute;  background:#33abc1; ">
                    <i style="color:#fff" class="fa-solid fa-search" style="font-size: 13px;"></i>
                </button>
                </form>                              
            </ul>
           
        </div>        <!-- .flex-right -->

    </div>
    <!-- flex-row -->
</div>

<section class="section danh-muc" id="section_2086243040">
    <div class="bg section-bg fill bg-fill  bg-loaded">





    </div>
    <!-- .section-bg -->

    <div class="section-content relative">

        <div class="row" id="row-1894088309">
            <div class="col small-12 large-12">
                <div class="col-inner">
                    <!-- .section-title -->

                    <div class="row large-columns-4 medium-columns-2 small-columns-1">
                        @if (count($news) > 0)
                            @foreach ($news as $item)
                                <div class="col post-item">
                                    <div class="col-inner">
                                        <a href="{{ url($item->slug . '.html') }}"
                                            class="plain">
                                            <div
                                                class="box box-normal box-text-bottom box-blog-post has-hover">
                                                <div class="box-image">
                                                    <div class="image-overlay-add image-cover"
                                                        style="padding-top:65%;">
                                                        <img width="434" height="286"
                                                            src="{{ asset('documents/website/' . $item->image) }}"
                                                            data-src="{{ asset('documents/website/' . $item->image) }}"
                                                            class="lazy-load attachment-original size-original wp-post-image"
                                                            alt="" srcset=""
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
                   {!! $news->links($theme.'.components.my-pagination') !!}
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
@endsection
@push('scripts')
    <script>
        @if (isset($slug))
            $('#menu-nav .nav > .nav-links > a[slug="{{ $slug }}"]').toggleClass("active");
        @endif
        @if (isset($categorySelf))
            @if ($categorySelf->getParent())
                $("#menu-article-{{ $categorySelf->getParent()->id }}").toggleClass("active");
            @else
                $("#menu-article-{{ $categorySelf->id }}").toggleClass("active");
            @endif
        @endif
    </script>
@endpush
