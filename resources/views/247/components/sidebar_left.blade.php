<style>
    .widget_nav_menu ul li.active a{
        color: red !important;
        font-weight: bold;
    }

</style>

<div id="product-sidebar" class="col large-3 hide-for-medium shop-sidebar ">
    <aside id="nav_menu-3" class="widget widget_nav_menu">
        <div class="menu-danh-muc-san-pham-sidebar-container">
            <ul id="menu-danh-muc-san-pham-sidebar" class="menu">
                @foreach ($categories as $category)
                    @if (count($category->getChildrens($category->id)) > 0)
                        <li id="menu-item-271"
                            class="menu-cha menu-item menu-item-type-custom menu-item-object-custom menu-item-271
                            {{isset($categorySelf) && $categorySelf->id== $category->id ? 'active' : ''}}">
                            <a href="{{ url($category->slug . '.html') }}">{{ $category->name }}</a>
                        </li>
                        @foreach ($category->getChildrens($category->id) as $cateChild)
                            @if (count($cateChild->getChildrens($cateChild->id)) > 0)
                                <li id="menu-item-271"
                                    class="menu-cha menu-item menu-item-type-custom menu-item-object-custom menu-item-271
                                    {{isset($categorySelf) && $categorySelf->id== $cateChild->id ? 'active' : ''}}">
                                    <a href="{{ url($cateChild->slug . '.html') }}">{{ $cateChild->name }}</a>
                                </li>
                                @foreach ($cateChild->getChildrens($cateChild->id) as $item)
                                    <li id="menu-item-278"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-278
                                        {{isset($categorySelf) && $categorySelf->id== $item->id ? 'active' : ''}}">
                                        <a href="{{ url($item->slug . '.html') }}">{{ $item->name }}</a>
                                    </li>
                                @endforeach
                            @else
                            <li id="menu-item-271"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-278
                            {{isset($categorySelf) && $categorySelf->id== $cateChild->id ? 'active' : ''}}">
                            <a href="{{ url($cateChild->slug . '.html') }}">{{ $cateChild->name }}</a>
                        </li>

                            @endif
                        @endforeach
                    @else
                    <li id="menu-item-271"
                            class="menu-cha menu-item menu-item-type-custom menu-item-object-custom menu-item-271">
                            <a href="{{ url($category->slug . '.html') }}">{{ $category->name }}</a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </aside>

    <aside id="flatsome_recent_posts-2" class="widget flatsome_recent_posts"> <span class="widget-title "><span>Bài viết &#8211; tin tức mới</span></span>
        <div class="is-divider small"></div>
        <ul>
            @if (count($news_lm4) > 0)
                @foreach ($news_lm4 as $item)
                <li class="recent-blog-posts-li">
                    <div class="flex-row recent-blog-posts align-top pt-half pb-half">
                        <div class="flex-col mr-half">
                            <div class="badge post-date  badge-square">
                                <div class="badge-inner bg-fill" style="background: url('{{ asset('documents/website/' .$item->image) }}'); border:0;">
                                </div>
                            </div>
                        </div>
                        <!-- .flex-col -->
                        <div class="flex-col flex-grow">
                            <a href="{{ url($item->slug . '.html') }}" title="{{ $item->title }}">{{ $item->title }}</a>
                            <span class="post_comments op-7 block is-xsmall"><a href="{{ url($item->slug . '.html') }}"></a></span>
                        </div>
                    </div>
                    <!-- .flex-row -->
                </li>
                @endforeach
            @else
                
            @endif          

        </ul>
    </aside>

    <aside id="text-2" class="widget widget_text"><span class="widget-title shop-sidebar">HỖ
            TRỢ TRỰC TUYẾN</span>
        <div class="is-divider small"></div>
        <div class="textwidget">
            <p><strong>Hotline: {{ $configs['site_phone'] }}<br>
                </strong><strong>Email: {{ $configs['site_email'] }}</strong></p>
        </div>
    </aside>
</div>
