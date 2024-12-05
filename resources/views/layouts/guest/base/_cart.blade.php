
        

        <div class="cart-block">
            <div class="cart-total">
                <span class="text-number cart-total-badge on-menu">
                    {{Cart::count()}}
                </span>
                <span class="text-item">
                    Giỏ khóa học
                </span>
                <span class="price subtotal">
                    {{Cart::subtotal(0,0,',')}} đ
                    <i class="fas fa-chevron-down"></i>
                </span>
            </div>
            <div class="cart-dropdown-block">
                <div class=" single-cart-block " id="cart-sidebar">

                    @if(count(Cart::content()) > 0)
                    @foreach(Cart::content() as $cartItem)
                            @php
                              $product = App\Models\ShopProduct::find($cartItem->id);
                            @endphp
                    <div class="cart-product">
                        <a href="{{ url('san-pham/'.ktc_str_convert($cartItem->name).'_'.$cartItem->id.'.html') }}" class="image">
                            <img src="{{ asset('documents/website/'.$product->image) }}" alt="">
                        </a>
                        <div class="content">
                            <h3 class="title"><a href="{{url('san-pham/'.$cartItem->slug)}}">{{$cartItem->name}}</a>
                            </h3>
                            <p class="price"><span class="qty">{{$cartItem->qty}} ×</span> {{number_format($cartItem->price,0,0,".")}}đ</p>
                            <a href="{{url("removeItem/$cartItem->rowId")}}" class="cross-btn"><i class="fas fa-times"></i></a>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
                <div class=" single-cart-block ">
                    <div class="btn-block">
                        <a href="{{url('/gio-hang.html')}}" class="btn">Xem giỏ<i class="fas fa-chevron-right"></i></a>
                        <a href="{{url('/thanh-toan.html')}}" class="btn btn--primary">Thanh toán <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>