@extends($theme.'.shop_layout',[ "title" => $news_currently->title,  "header" => ["description"=> $news_currently->description,"description"=> $news_currently->description, "keyword"=> $keyword, "og_image"=> asset('documents/website/'.$news_currently->image) ]])
@push('style')
<link href="{{asset('css/guest/news/news-detail.css')}}" rel="stylesheet" type="text/css" />
<style>
ul{
    margin-left: 1rem;
}

</style>
@endpush
@section("content")
<div class="section news-detail-page">
    <div class="container">
        <div class="row row-small">
            <div class="col-md-9 content">
                <div class="breadcrum">
                    <p id="breadcrumbs">
                        <span><span><a href="{{url('/')}}">Trang chủ</a> <i class="fa fa-chevron-right" style=" margin: 0 5px; font-size: 10px; color: #fd669f; "></i> 
                        <a href="{{url('tai-lieu')}}">Tài liệu</a> <i class="fa fa-chevron-right" style=" margin: 0 5px; font-size: 10px; color: #fd669f; "></i><span class="breadcrumb_last" aria-current="page">{{$news_currently->title}}</span></span></span></p>
                </div>
                <div class="title">
                    <h1>
                    {{$news_currently->title}}
                    </h1>
                </div>
                <div class="info">
                    <p>Đăng vào ngày <span>{{$news_currently->created_at}}</span> mục <a href="/">Tin tức</a> 5500 lượt xem</p>
                </div>
                <div style="padding: 2px 0.5rem; border: 1px solid #d11a59; border-radius: 10px; margin-bottom: 0.5rem;">
                    <span>Đường dẫn tài liệu: <a style="color: green; font-style: italic;" href="{{$news_currently->url}}">{{$news_currently->url}}</a></span>
                </div>
                <div class="description">
                    <p><strong>{{$news_currently->description}}</strong></p>
                </div>
                <!-- <div class="realated-news">
                    <ul>
                        @if (isset($relatedNews) && count($relatedNews) > 0)
                            @foreach($relatedNews as $news)
                            <li><a href="{{url('/tin-tuc/'.$news->slug)}}">{{$news->title}}</a></li>
                            @endforeach
                        @else
                        @endif
                    </ul>
                </div> -->

                <div class="entry-content single-page">
                    {!!$news_currently->content!!}
                </div>
                <div class="category-name">
                    <p>Danh mục: <a href="{{url('tai-lieu.html')}}">Tài liệu</a></p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="fanpage">
                    <img style="max-width: 100%;" src="{{ asset('documents/website') }}/{{ $logo->image }}" alt="Luyện thi nội trú" />
                </div>
                @include ($theme.'.components.pages.news._product-side-list', ["sideProductList" => $products_hot])
            </div>
        </div>
        

    </div>
</div>
</div>
@endsection
@push('scripts')
<script>
$(".document-nav_item").toggleClass("active");
</script>
@endpush