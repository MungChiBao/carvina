<div class="menu-nav" id="menu-nav">





    <div class="menu">
        <div class="nav flex-row container">
            <!-- <div class="nav-header">
                <div class="nav-title">
                JoGeek
                </div>
            </div> -->
            <input type="checkbox" id="nav-check">
            <ul class="nav-links">
                <li id="home-menu-item"><a href="{{url('/')}}">{{__("guest.home")}}</a></li>

                <!-- <li id="introduction-menu-item"><a href="{{url('/gioi-thieu.html')}}">{{__("guest.introduction")}}</a></li> -->
                <li id="promtion-menu-item"><a href="{{url('/san-pham-khuyen-mai.html')}}">{{__("guest.promotion")}}</a></li>
                @foreach ($categories as $category)
                @if (count($category->getChildrens($category->id))>0)

                <li id="menu-category-{{$category->id}}" class="has-dropdown-item">
                    <a class="menu-item has-dropdown" 
                    href="{{ url('shop/'.ktc_str_convert($category->name).'_'.$category->id.'.html') }}">
                    @if(app()->getLocale()=="vi")
                                {{ $category->name }}
                                @elseif(app()->getLocale()=="en")
                                {{ $category->name_en }}
                                @endif
                        <i class="fa fa-angle-down dropdown-icon"></i>
                    </a>
                    <ul class="sub-menu nav-dropdown nav-dropdown-default" style="">
                        @foreach ($category->getChildrens($category->id) as $cateChild)
                        <li id="menu-item-36" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-36">
                            <a href="{{ url('shop/'.ktc_str_convert($cateChild->name).'_'.$cateChild->id.'.html') }}">

                                @if(app()->getLocale()=="vi")
                                {{ $cateChild->name }}
                                @elseif(app()->getLocale()=="en")
                                {{ $cateChild->name_en }}
                                @endif</a></li>
                        @endforeach
                    </ul>
                </li>
                @else
                <li id="menu-category-{{$category->id}}">
                    <a href="{{ url('shop/'.ktc_str_convert($category->name).'_'.$category->id.'.html') }}">

                        @if(app()->getLocale()=="vi")
                        {{ $category->name }}
                        @elseif(app()->getLocale()=="en")
                        {{ $category->name_en }}
                        @endif
                        </i>
                    </a>
                </li>
                @endif
                @endforeach
                @foreach ($newsCategories as $category)
                @if (count($category->getCategories($category->id))>0)

                <li id="menu-article-{{$category->id}}" class="has-dropdown-item">
                    <a class="menu-item has-dropdown" 
                    href="{{ url('danh-muc-bai-viet/'.ktc_str_convert($category->title).'_'.$category->id.'.html') }}">
                    @if(app()->getLocale()=="vi")
                                {{ $category->title }}
                                @elseif(app()->getLocale()=="en")
                                {{ $category->title_en }}
                                @endif
                    <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="sub-menu nav-dropdown nav-dropdown-default" style="">
                        @foreach ($category->getCategories($category->id) as $cateChild)
                        <li id="menu-item-36" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-36">
                            <a href="{{ url('danh-muc-bai-viet/'.ktc_str_convert($cateChild->title).'_'.$cateChild->id.'.html') }}">

                                @if(app()->getLocale()=="vi")
                                {{ $cateChild->title }}
                                @elseif(app()->getLocale()=="en")
                                {{ $cateChild->title_en }}
                                @endif</a></li>
                        @endforeach
                    </ul>
                </li>
                @else
                <li id="menu-article-{{$category->id}}">
                    <a href="{{ url('danh-muc-bai-viet/'.ktc_str_convert($category->title).'_'.$category->id.'.html') }}">

                        @if(app()->getLocale()=="vi")
                        {{ $category->title }}
                        @elseif(app()->getLocale()=="en")
                        {{ $category->title_en }}
                        @endif
                        </i>
                    </a>
                </li>
                @endif
                @endforeach
                <!-- /.div -->
                <li id="news-menu-item"><a href="{{url('/tin-tuc.html')}}">{{__("guest.news")}}</a></li>
                <li id="contact-menu-item"><a href="{{url('/lien-he.html')}}">{{__("guest.contact")}}</a></li>
            </ul>
            @include ("layouts.guest.base._cart")
        </div>
    </div>
</div>