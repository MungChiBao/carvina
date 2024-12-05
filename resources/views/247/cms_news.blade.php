@extends($theme.'.shop_layout', ["title" => "Tin tức"])

@push('style')
<link href="{{asset('css/guest/news/news.css')}}" rel="stylesheet" type="text/css"/>
@endpush
@section("content")
{{-- <div class="section news-page">
    <div class="container">
        <div class="breadcrum">
        <p id="breadcrumbs"><span><span><a href="{{url('/')}}">{{__("guest.home")}}</a> <i class="fa fa-chevron-right" style=" margin: 0 5px; font-size: 10px; color: #fd669f; "></i> <span class="breadcrumb_last" aria-current="page">{{__("guest.news")}}</span></span></span></p>
        </div>
        <div class="title">
            <h1>{{__("guest.news")}}</h1>
        </div>
        <div class="description">
            <p>Cập nhật kinh nghiệm ôn thi, bài giảng hay cho các bạn sinh viên y.</p>
            <!-- <p>{{__("news.news_des_2")}}.</p> -->
        </div>
        <div class="row">
            <div class="col-md-9">
                <div class="news-list">
                    @if (isset($news) && count($news) > 0)
                        @foreach($news as $item)
                    <div class="news-item row row-small">
                        <div class="thumb col-md-4 col-sm-4">
                            <img src="{{ asset('documents/website/'.$item->image) }}" alt={{$item->title}} />
                        </div>
                        <div class="content col-md-8 col-sm-8 box-text-right">
                            <div class="title">
                                    <h3>
                                        <a href="{{ url('blog/'.ktc_str_convert($item->title).'_'.$item->id.'.html') }}" >
                        @if(app()->getLocale()=="vi")
                            {{$item->title}}
                        @elseif(app()->getLocale()=="en")
                            {{$item->title_en}}
                        @endif
                                            
                                        </a>
                                </h3>
                            </div>
                            <!-- <div class="description">
                                <p>
                        @if(app()->getLocale()=="vi")
                            {{$item->description}}
                        @elseif(app()->getLocale()=="en")
                            {{$item->description_en}}
                        @endif
                                </p>
                            </div> -->
                        </div>
                    </div>
                        @endforeach 
                    @else

                    @endif
                </div>
                    {{ $news->links() }}
            </div>
            <div class="col-md-3">
                <div class="fanpage">
                    <img style="max-width: 100%;" src="{{ asset('documents/website') }}/{{ $logo->image }}" alt="Luyện thi nội trú " />
                </div>
                @include ($theme.'.components.pages.news._product-side-list', ["sideProductList" => $products_hot])
            </div>
        </div>
    </div>
</div> --}}

<div class="shop-page-title category-page-title page-title ">

    <div class="page-title-inner flex-row  medium-flex-wrap container">
        <div class="flex-col flex-grow medium-text-center">
            <div class="is-small">
                <nav class="woocommerce-breadcrumb breadcrumbs"><a href="{{ url('/') }}">Trang chủ</a> <span class="divider">&#47;</span>&nbsp;Xe và đời sống</nav>
            </div>
        </div>
        <!-- .flex-left -->
        <!-- .flex-right -->

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
                                                        <p class="from_the_blog_excerpt ">
                                                            {{ $item->description }}
                                                        </p>



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
$(".news-nav_item").toggleClass("active");
</script>
@endpush

