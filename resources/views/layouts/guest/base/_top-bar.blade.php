<div class="top-bar">
    <div class="row flex-row container" style="padding: 1rem 0;">
        <div class="flex-col mobile-nav flex-left">
            <div class="nav-btn">
                <label for="nav-check">
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
            </div>
        </div>
        <div class="search-container col-md-4 ">
            <div class="row">
                <div class="search-box">
                    <form method="GET" action="{{ url('tim-kiem.html') }}">
                        <input name="keyword"  placeholder="{{__('guest.search_placeholder')}}" 
                        class="search-box__input" type="text" 

                        oninput="this.setAttribute('value',this.value)" />
                        <button type="submit" class="button search-btn">
                            <i class="fa fa-search" style="color: #e13475; font-size: 19px;"></i>			</button>
                        <!-- <i></i> -->
                    </form>
                </div>
                <!-- <div class="search-help col-md-3">
                    <div class="icon-box featured-box icon-box-left text-left">
                        <div class="icon-box-img" style="width: 45px">
                            <div class="icon">
                                <div class="icon-inner">
                                    <img width="42" height="40" src="{{asset('media/guest/icon/help-support.png')}}" class="attachment-medium size-medium" alt=""> </div>
                            </div>
                        </div>
                        <div class="icon-box-text last-reset">
                            Hỗ trợ <br>
                            khách hàng

                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="logo col-md-4" style="text-align: center;"><a title="{{$configs['site_title']}}" href="{{ url('/') }}">
        <img alt="{{$configs['site_title']}}" title="{{$configs['site_title']}}" src="{{ asset('documents/website') }}/{{ $logo->image }}" style="max-height: 90px;"></a>
        </div>
        <div class="col-md-4 contact-info hide-for-medium">
            <ul class="header-nav header-nav-main nav nav-right ">
                <li class="header-contact-wrapper">
                    <ul id="header-contact" class="nav nav-divided nav-uppercase header-contact">
                        <li class="">
               @guest
                          <a class="login" href="{{ url('login.html') }}" rel="nofollow" 
                          title="Đăng nhập tài khoản">
                            <i class="fa fa-sign-in"></i>
                            <br/>
                          {{__("guest.login")}}
                      </a>
               @else
                      <!-- <a class="login" href="{{ route('logout') }}" rel="nofollow" onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                          {{__("guest.logout")}}
                      </a> -->
                      <a href="{{ url('profile.html') }}" title="Trang quản lý" rel="nofollow"><i class="fa fa-user left"></i> 
                      
                      {{__("guest.hi_text")}} {{ Auth::user()->name }}</a>
                  
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
                </form>
               @endguest
                        </li>
                        <li class="">
                            <a href="{{ url('gio-hang.html') }}" class="">
                            <i class="fa fa-shopping-cart"></i>
                            <br/>
                                <span>
                          {{__("guest.cart")}} </span> <span class="cart-total-badge" >{{ Cart::instance('default')->count() }}</span>
                            </a>
                        </li>


                        <li class="">
                            <a   href="{{ url('wishlist.html') }}" class="">
                            <i class="fa fa-star-o"></i>
                            <br/>
                                <i class="icon-phone" style="font-size:16px;"></i> <span>{{__("guest.wishlist")}}</span>
                                <span class="wishlist-total-badge shopping-wishlist" >{{ Cart::instance('wishlist')->count() }}</span>
                            </a>
                        </li>
                        <li>
            @include ("layouts.guest.base._language")
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="flex-col flex-right search-icon mobile-left-top">
                            <a href="{{ url('gio-hang.html') }}" class="">
                            <i class="fa fa-shopping-cart"></i><span class="cart-total-badge" >{{ Cart::instance('default')->count() }}</span>

        </a>
            @include ("layouts.guest.base._language")
        </div>
    </div>
        <div class="search-container search-container-mobile  col-md-4 ">
            <div class="row">
                <div class="search-box">
                    <form method="GET" action="{{ url('tim-kiem.html') }}">
                        <input name="keyword"  placeholder="{{__('guest.search_placeholder')}}" 
                        class="search-box__input" type="text" 

                        oninput="this.setAttribute('value',this.value)" />
                        <button type="submit" class="button search-btn">
                            <i class="fa fa-search" style="color: #e13475; font-size: 19px;"></i>			</button>
                        <!-- <i></i> -->
                    </form>
                </div>
                <!-- <div class="search-help col-md-3">
                    <div class="icon-box featured-box icon-box-left text-left">
                        <div class="icon-box-img" style="width: 45px">
                            <div class="icon">
                                <div class="icon-inner">
                                    <img width="42" height="40" src="{{asset('media/guest/icon/help-support.png')}}" class="attachment-medium size-medium" alt=""> </div>
                            </div>
                        </div>
                        <div class="icon-box-text last-reset">
                            Hỗ trợ <br>
                            khách hàng

                        </div>
                    </div>
                </div> -->
            </div>
        </div>
</div>