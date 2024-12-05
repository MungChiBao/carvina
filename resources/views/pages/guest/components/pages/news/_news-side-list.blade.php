
<?php 

if(!isset($newsSideList)){
    $newsSideList = [];
} else {
    $newsSideList = $newsSideList;
}
?>


<div class="news-side-list">
    <div class="news-side-title">
        <span>Bài viết mới</span>
    </div>
    <div class="news-side-data">
    
    @if (isset($newsSideList) && count($newsSideList) > 0)
        @foreach($newsSideList as $news)
        <div class="news-side-data-item">
            <div class="news-side-data-item-thumb">
                <img src="{{asset('/storage/data/store/'.$news->thumb)}}" alt=""/>
            </div>
            <div class="news-side-data-item-title">
                <a href="{{url('/tin-tuc/'.$news->slug)}}">{{$news->title}}</a>
            </div>
        </div>
        @endforeach
    @else
    @endif
    </div>
</div>