@extends($theme . '.shop_layout')
@push('style')

@endpush
@section('content')

<style>
    @media only screen and (max-width: 768px) {
        #main {
            padding-top: 105px !important;
        }
    }
  </style>

    <main id="main" class="" style="padding-top:155px">

        <div id="content" class="content-area page-wrapper" role="main">
            <div class="row row-main">
                <div class="large-12 col">
                    <div class="col-inner">

                        <header class="entry-header">
                            <h1 class="entry-title mb uppercase">Thanh toán</h1>
                        </header>


                        <div class="woocommerce">
                            <div class="woocommerce-notices-wrapper"></div>

                            <div class="woocommerce-notices-wrapper"></div>
                            <form name="checkout" method="post" class="checkout woocommerce-checkout "
                                action="{{ url('storecart') }}" enctype="multipart/form-data"
                               >

                                <div class="row pt-0 ">
                                    <div class="large-7 col  ">

                                        <input type="hidden" name="_token" value="<?= csrf_token() ?>">

                                        <div id="customer_details">
                                            <div class="clear">
                                                <div class="woocommerce-billing-fields">

                                                    <h3>Thông tin thanh toán</h3>



                                                    <div class="woocommerce-billing-fields__field-wrapper">
                                                        <p class="form-row form-row-wide validate-required"
                                                            id="billing_last_name_field" data-priority="10"><label
                                                                for="billing_last_name" class="">Họ và tên&nbsp;<abbr
                                                                    class="required" title="bắt buộc">*</abbr></label><span
                                                                class="woocommerce-input-wrapper"><input type="text"
                                                                    class="input-text " name="toname" required
                                                                    id="billing_last_name"
                                                                    placeholder="Nhập đầy đủ họ và tên" value=""
                                                                    style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;"></span>
                                                        </p>
                                                        <p class="form-row form-row-wide validate-required validate-phone"
                                                            id="billing_phone_field" data-priority="20"><label
                                                                for="billing_phone" class="">Số điện thoại&nbsp;<abbr
                                                                    class="required" title="bắt buộc">*</abbr></label><span
                                                                class="woocommerce-input-wrapper"><input required type="number" id="phoneNumberInput1" style="margin-bottom: 0"
                                                                    class="input-text " name="phone"
                                                                    id="billing_phone" placeholder="" value=""
                                                                    autocomplete="tel"></span>
                                                                    <p id="phoneNumberError1" style="color: red; font-style:italic; font-size:12px"></p></p>
                                                                   
                                                        <p class="form-row form-row-wide validate-required validate-email"
                                                            id="billing_email_field" data-priority="21"><input type="hidden"
                                                                    class="input-text " name="email"
                                                                    id="billing_email" placeholder="" value=""
                                                                    autocomplete="email username"></span></p>
                                                       
                                                        <p class="form-row form-row-wide validate-required"
                                                            id="billing_address_1_field" data-priority="60"><label
                                                                for="billing_address_1" class="">Địa chỉ&nbsp;<abbr
                                                                    class="required" 
                                                                    title="bắt buộc">*</abbr></label><span
                                                                class="woocommerce-input-wrapper"><input required type="text"
                                                                    class="input-text " name="address1"
                                                                    id="billing_address_1"
                                                                    placeholder="Ví dụ: Số 20, ngõ 90" value=""
                                                                    autocomplete="address-line1"></span></p>
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="clear">
                                                <div class="woocommerce-shipping-fields">
                                                </div>
                                                <div class="woocommerce-additional-fields">



                                                    <h3>Thông tin bổ sung</h3>


                                                    <div class="woocommerce-additional-fields__field-wrapper">
                                                        <p class="form-row notes" id="order_comments_field"
                                                            data-priority=""><label for="order_comments"
                                                                class="">Ghi chú đơn hàng&nbsp;<span
                                                                    class="optional">(tuỳ chọn)</span></label><span
                                                                class="woocommerce-input-wrapper">
                                                                <textarea name="comment" class="input-text " id="order_comments"
                                                                    placeholder="Ghi chú về đơn hàng, ví dụ: thời gian hay chỉ dẫn địa điểm giao hàng chi tiết hơn." rows="2"
                                                                    cols="5"></textarea>
                                                            </span></p>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>



                                    </div>

                                    <div class="large-5 col">

                                        <div class="col-inner has-border">
                                            <div class="checkout-sidebar sm-touch-scroll">
                                                <h3 id="order_review_heading">Đơn hàng của bạn</h3>


                                                <div id="order_review" class="woocommerce-checkout-review-order">
                                                    <table class="shop_table woocommerce-checkout-review-order-table">

                                                        <thead>
                                                            <tr>
                                                                <th class="product-name">Sản phẩm</th>
                                                                <th class="product-total">Tạm tính</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @if (count(Cart::content()) > 0)
                                            @foreach (Cart::content() as $cartItem)
                                                @php
                                                    $n = isset($n) ? $n : 0;
                                                    $n++;
                                                    $product = App\Models\ShopProduct::find($cartItem->id);
                                                @endphp

                                                <input type="hidden" name="product_code[]"
                                                    value="{{ $cartItem->options->code }}">
                                                <input type="hidden" name="product_quantity[]"
                                                    value="{{ $cartItem->qty }}">
                                                <input type="hidden" name="product_price[]"
                                                    value="{{ $cartItem->price }}">
                                                <input type="hidden" name="product_total[]"
                                                    value="{{ $cartItem->price * $cartItem->qty }}">
                                                            <tr class="cart_item">
                                                                <td class="product-name">
                                                                    {{ $cartItem->name }}<strong
                                                                        class="product-quantity">&nbsp×&nbsp;{{ $cartItem->qty }}</strong> </td>
                                                                <td class="product-total">
                                                                    <span
                                                                        class="woocommerce-Price-amount amount">{{ number_format($cartItem->price * $cartItem->qty, 0, 0, '.') }}<span
                                                                            class="woocommerce-Price-currencySymbol">₫</span></span>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                            @endif
                                                        </tbody>
                                                        <tfoot>

                                                            <tr class="cart-subtotal">
                                                                <th>Tạm tính</th>
                                                                <td><span
                                                                        class="woocommerce-Price-amount amount">{{ Cart::subtotal(0, 0, ',') }}<span
                                                                            class="woocommerce-Price-currencySymbol">₫</span></span>
                                                                </td>
                                                            </tr>






                                                            <tr class="order-total">
                                                                <th>Tổng</th>
                                                                <td><strong><span
                                                                            class="woocommerce-Price-amount amount">{{ Cart::subtotal(0, 0, ',') }}<span
                                                                                class="woocommerce-Price-currencySymbol">₫</span></span></strong>
                                                                </td>
                                                            </tr>


                                                        </tfoot>
                                                    </table>

                                                    <div id="payment" class="woocommerce-checkout-payment">
                                                        <ul class="wc_payment_methods payment_methods methods">
                                                            <li class="wc_payment_method payment_method_bacs">
                                                                <div id="payment" class="woocommerce-checkout-payment">
                                                                    <input type="radio" name="payment-method" checked value="Thanh toán khi nhận hàng">
                                                                    <span style="font-weight:bold; font-size:16px">Thanh toán khi nhận hàng</span>
                                                                    {{-- <br>
                                                                    <input type="radio" name="payment-method" value="Thanh toán qua ngân hàng">
                                                                    <span style="font-weight:bold; font-size:16px" >Thanh toán qua ngân hàng</span> --}}
                                                                    
                                                                </div>
                                                                <input id="payment_method_bacs" type="radio"
                                                                    class="input-radio" name="payment_method"
                                                                    value="bacs" checked="checked"
                                                                    data-order_button_text="" style="display: none;">

                                                               
                                                                {{-- <div class="payment_box payment_method_bacs">
                                                                    <p style="font-size:13px;">Thực hiện thanh toán vào ngay tài khoản ngân hàng của
                                                                        chúng tôi. Vui lòng sử dụng Mã đơn hàng của bạn
                                                                        trong phần Nội dung thanh toán. Đơn hàng sẽ đươc
                                                                        giao sau khi tiền đã chuyển.</p>
                                                                </div> --}}
                                                            </li>
                                                        </ul>
                                                        <div class="form-row place-order">
                                                            <noscript>
                                                                Trình duyệt của bạn không hỗ trợ JavaScript, hoặc nó bị vô
                                                                hiệu hóa, hãy đảm bảo bạn nhấp vào <em>Cập nhật giỏ
                                                                    hàng</em> trước khi bạn thanh toán. Bạn có thể phải trả
                                                                nhiều hơn số tiền đã nói ở trên, nếu bạn không làm như vậy.
                                                                <br /><button type="submit" class="button alt"
                                                                    name="woocommerce_checkout_update_totals"
                                                                    value="Cập nhật tổng">Cập nhật tổng</button>
                                                            </noscript>

                                                            <div class="woocommerce-terms-and-conditions-wrapper">

                                                            </div>


                                                            <button type="submit" class="button alt"
                                                                name="woocommerce_checkout_place_order" id="place_order"
                                                                value="Đặt hàng" data-value="Đặt hàng">Đặt hàng</button>

                                                            <input type="hidden" id="woocommerce-process-checkout-nonce"
                                                                name="woocommerce-process-checkout-nonce"
                                                                value="49b3b7bcc4"><input type="hidden"
                                                                name="_wp_http_referer"
                                                                value="/?wc-ajax=update_order_review">
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="woocommerce-privacy-policy-text">
                                                    <p>Thông tin cá nhân của bạn sẽ được sử dụng để xử lý đơn hàng, tăng
                                                        trải nghiệm sử dụng website, và cho các mục đích cụ thể khác đã được
                                                        mô tả trong <a href="#"
                                                            class="woocommerce-privacy-policy-link" target="_blank">chính
                                                            sách riêng tư</a>.</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </form>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </main>


@endsection

@push('scripts')
    <script>
        var hiddenSubmitBtn = document.getElementById('hidden-submit-btn');
        document.getElementById("checkout-button").onclick = function() {
            // debugger
            hiddenSubmitBtn.click();
        }
    </script>
    <script type="text/javascript">
        function updateCart(id) {
            var new_qty = $('#item-' + id).val();
            $.ajax({
                url: '{{ action('Shop@updateToCart') }}',
                type: 'POST',
                dataType: 'json',
                async: true,
                cache: false,
                data: {
                    id: id,
                    new_qty: new_qty,
                    _token: '{{ csrf_token() }}'
                },
                success: function(data) {
                    flg = parseInt(data.flg);
                    if (flg === 1) {
                        window.location.replace(location.href);
                    } else {
                        $('.item-qty-' + id).css('display', 'block').html(data.msg);
                    }

                }
            });
        }

        $('#coupon-button').click(function() {
            var coupon = $('#coupon-value').val();
            if (coupon == '') {
                $('.coupon-msg').html('Bạn chưa nhập mã giảm giá').addClass('text-danger').show();
            } else {
                // $('#coupon-button').button('loading');
                setTimeout(function() {
                    $.ajax({
                            url: '{{ url('/usePromotion') }}',
                            type: 'POST',
                            dataType: 'json',
                            data: {
                                code: coupon,
                                _token: "{{ csrf_token() }}",
                            },
                        })
                        .done(function(result) {
                            $('#coupon-value').val('');
                            $('#cut_price').html(result.value);
                            $('.coupon-msg').removeClass('text-danger');
                            $('.coupon-msg').removeClass('text-success');
                            $('.coupon-msg').hide();
                            if (result.error == 1) {
                                $('.coupon-msg').html(result.msg).addClass('text-danger').show();
                            } else {
                                $('#removeCoupon').show();
                                $('.coupon-msg').html(result.msg).addClass('text-success').show();
                                $('.showTotal').remove();
                                $('#showTotal').prepend(result.html);
                            }
                        })
                        .fail(function() {
                            console.log("error");
                        })
                    // .always(function() {
                    //     console.log("complete");
                    // });

                    $('#coupon-button').button('reset');
                }, 2000);
            }




        });
        $('#removeCoupon').click(function() {
            $.ajax({
                    url: '{{ url('/usePromotion') }}',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        action: "remove",
                        _token: "{{ csrf_token() }}",
                    },
                })
                .done(function(result) {
                    $('#removeCoupon').hide();
                    $('#coupon-value').val('');
                    $('#cut_price').html(0);
                    $('.coupon-msg').removeClass('text-danger');
                    $('.coupon-msg').removeClass('text-success');
                    $('.coupon-msg').hide();
                    $('.showTotal').remove();
                    $('#showTotal').prepend(result.html);
                })
                .fail(function() {
                    console.log("error");
                })
            // .always(function() {
            //     console.log("complete");
            // });
        });
    </script>
    <script type="text/javascript">
        var toggleShowOrderSummary = false;

        $('.order-summary-toggle').click(function(e) {
            e.preventDefault();

            toggleShowOrderSummary = !toggleShowOrderSummary;

            if (toggleShowOrderSummary) {
                $('.order-summary-toggle')
                    .removeClass('order-summary-toggle-hide')
                    .addClass('order-summary-toggle-show');

                $('.sidebar:not(".sidebar-second") .sidebar-content .order-summary')
                    .removeClass('order-summary-is-collapsed')
                    .addClass('order-summary-is-expanded');

                $('.sidebar.sidebar-second .sidebar-content .order-summary')
                    .removeClass('order-summary-is-expanded')
                    .addClass('order-summary-is-collapsed');
            } else {
                $('.order-summary-toggle')
                    .removeClass('order-summary-toggle-show')
                    .addClass('order-summary-toggle-hide');

                $('.sidebar:not(".sidebar-second") .sidebar-content .order-summary')
                    .removeClass('order-summary-is-expanded')
                    .addClass('order-summary-is-collapsed');

                $('.sidebar.sidebar-second .sidebar-content .order-summary')
                    .removeClass('order-summary-is-collapsed')
                    .addClass('order-summary-is-expanded');
            }

        });
    </script>
        <script>
            var phoneNumberInput = document.getElementById('phoneNumberInput1');
            var phoneNumberError = document.getElementById('phoneNumberError1');
    
            phoneNumberInput.addEventListener('input', function() {
                var phoneNumber = phoneNumberInput.value;
                var pattern = /^[0-9]{10}$/; 
    
                if (pattern.test(phoneNumber)) {
                    phoneNumberError.textContent = ''; 
                } else {
                    phoneNumberError.textContent =
                    'Số điện thoại không hợp lệ'; 
                }
            });
        </script>
@endpush
