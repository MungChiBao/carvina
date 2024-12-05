<?php 

if(!isset($relatedNews)){
    $relatedNews = [];
} else {
    $relatedNews = $relatedNews;
}
?>
<div class="related-news">
    <div class="title">
        <h3>Có thể bạn quan tâm</h3>
    </div>

    <div class="related-news-list row row-small">
    
        @if (isset($relatedNews) && count($relatedNews) > 0)
            @foreach($relatedNews as $news)
            <div class="col-md-4 col-sm-4 related-news-list-item">
                <div class="related-news-list-item-thumb">
                    <img src="{{asset('/storage/data/store/'.$news->thumb)}}" alt="{{$news->title}}"/>

                </div>
                <div class="related-news-list-item-content">
                    <a href="{{url('/tin-tuc/'.$news->slug)}}">{{$news->title}}</a>
                </div>
            </div>
            @endforeach
        @else
        @endif
    </div>

</div>