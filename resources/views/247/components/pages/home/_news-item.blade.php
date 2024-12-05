<?php 

if(!isset($item)){
    $item = (object)[
        "thumb" => "http://mypham7.giaodienwebmau.com/wp-content/uploads/2019/07/Kem-ch%E1%BB%91ng-n%E1%BA%AFng-Neutrogena-Beach-Defense-SPF-70-198ml.jpg",
        "name" => "Kem chống nắng Neutrogena Beach Defense SPF 70 198ml",
        "slug" => "san-pham-moi-00979973",
        "price" => "280.000"
    ];
}
?>

<div class="news-container has-hover">
    <div class="news-box">
        <div class="news-thumb image-cover shine">
            <a href="{{ url('blog/'.ktc_str_convert($item->title).'_'.$item->id.'.html') }}">
                <img class="lazy" width="500" data-original="{{ asset('documents/website/thumb/'.$item->image) }}"  alt="{{ $item->title }}"/>
            </a>
        </div>

        <div class="news-content">
            <div class="news-content__label">
                <a href="{{ url('blog/'.ktc_str_convert($item->title).'_'.$item->id.'.html') }}">{{$item->title}}</a>
            </div>
            <div class="news-content__date is-small op-8">
                <span>{{ date('Y M D',strtotime($item->created_at)) }}</span>
            </div>
            <div class="news-content__description">
                <span>{{$item->description}}</span>
            </div>
        </div>
    </div>
</div>