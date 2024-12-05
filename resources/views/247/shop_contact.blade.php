@extends($theme . '.shop_layout', ['title' => 'Liên hệ'])
@section('slide')
@endsection


@push('style')
    <style>
        .contact-page .links-title,
        .collapsed-block strong {
            font-size: 22px;
            font-weight: 700;
            color: #e13475;
        }

        .contact-page .login,
        .contact-page .register {
            padding: 0 1rem;
        }

        .contact-page .has-error .help-block {
            color: red;
            font-style: italic;
        }

        .contact-page .form-group {

            padding-right: 5px;
        }

        .contact-page input {

            margin-bottom: 2px;
            margin-right: 3px;
        }

        .contact-form .row,
        .contact-form .row .col-sm-12 {
            margin-bottom: 0.5rem;
        }
    </style>
@endpush

@section('content')
    <style>
        @media only screen and (max-width: 768px) {
            #main {
                padding-top: 105px !important;
            }
        }
    </style>

    <main id="main" class="" style="padding-top:185px">
        <div id="content" role="main" class="content-area">
            <p>
                <iframe style="border: 0" tabindex="0"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.938887444143!2d105.7858406!3d20.995086699999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad0f1ac561d1%3A0xb6720e8c5f0d3ba8!2zQ2FydmluYSAtIFRydW5nIHTDom0gdMawIHbhuqVuIGzDoG0gxJHhurlwLCBuw6JuZyBj4bqlcCB0aeG7h24gw61jaCB4ZSBoxqFp!5e0!3m2!1svi!2s!4v1685329413825!5m2!1svi!2s"
                    width="100%" height="250" frameborder="0" allowfullscreen="allowfullscreen"
                    aria-hidden="false"></iframe>
            </p>
            <section class="section" id="section_1116470636">
                <div class="bg section-bg fill bg-fill bg-loaded"></div>

                <div class="section-content relative">
                    <div class="row" id="row-1927485323">
                        <div class="col medium-9 small-12 large-9">
                            <div class="col-inner">
                                <h3>Carvina - Trung tâm tư vấn làm đẹp nội thất, ngoại thất ô tô</h3>
                                <ul>
                                    <li>
                                        Địa chỉ: {{ $configs['site_address'] }}
                                    </li>
                                    <li>Hotline: 0988920168 - 0915223009 - 0946611956</li>
                                    <!-- <li>
                            Fanpage: <a
                              href="https://www.facebook.com/dodacphumy"
                              >Carvina - Trung tâm tư vấn làm đẹp nội thất, ngoại thất ô tô</a
                            >
                          </li> -->
                                </ul>
                                <h3>LIÊN HỆ VỚI CHÚNG TÔI</h3>
                                <div role="form" class="wpcf7" id="wpcf7-f422-p57-o1" lang="vi" dir="ltr">
                                    <div class="screen-reader-response"></div>
                                    <form method="post" class="wpcf7-form" action="{{ url('lien-he.html') }}">
                                        {{ csrf_field() }}
                                        <div style="display: none">
                                            <input type="hidden" name="_wpcf7" value="422" />
                                            <input type="hidden" name="email" value="" />
                                        </div>
                                        <p>
                                            <label>Tên của bạn</label><br />
                                            <span class="wpcf7-form-control-wrap text-12"><input required type="text"
                                                    name="name" value="" size="40"
                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="Tên của bạn..." /></span><br />
                                            <label>Số điện thoại</label><br />
                                            <span class="wpcf7-form-control-wrap tel-855"><input required
                                                    id="phoneNumberInput" style="margin-bottom:0" type="number"
                                                    name="phone" value="" size="40"
                                                    class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="Số điện thoại..." /></span>

                                        <p id="phoneNumberError" style="color: red; font-style:italic; font-size:12px"></p>
                                        <br />
                                        <label>Tiêu đề</label><br />
                                        <span class="wpcf7-form-control-wrap text-14"><input required type="text"
                                                name="title" value="" size="40"
                                                class="wpcf7-form-control wpcf7-text" aria-invalid="false"
                                                placeholder="Địa chỉ..." /></span><br />
                                        <label>Nội dung</label><br />
                                        <span class="wpcf7-form-control-wrap textarea-687">
                                            <textarea required name="content" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea"
                                                aria-invalid="false" placeholder="Nội dung..."></textarea>
                                        </span><br />
                                        <input type="submit" value="Gửi thông tin"
                                            class="wpcf7-form-control wpcf7-submit" />
                                        </p>
                                        <div class="wpcf7-response-output wpcf7-display-none"></div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col medium-3 small-12 large-3">
                            <div class="col-inner">
                            </div>
                        </div>
                    </div>
                </div>

                <style scope="scope">
                    #section_1116470636 {
                        padding-top: 17px;
                        padding-bottom: 17px;
                    }
                </style>
            </section>
        </div>
    </main>
@endsection

@section('breadcrumb')
    {{-- <div class="breadcrumbs">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <ul>
                <li class="home"> <a title="Go to Home Page" href="{{ url('/') }}">{{__("guest.home")}}</a><span><i class="fa fa-chevron-right" style=" margin: 0 5px; font-size: 10px; color: #fd669f; "></i></span></li>
                <li class="">{{ $title }}</li>

              </ul>
            </div>
          </div>
        </div>
      </div> --}}
@endsection

@push('scripts')
    <script>
        var phoneNumberInput = document.getElementById('phoneNumberInput');
        var phoneNumberError = document.getElementById('phoneNumberError');

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
    <script>
        $("#contact-nav_item").toggleClass("active");
    </script>
@endpush
