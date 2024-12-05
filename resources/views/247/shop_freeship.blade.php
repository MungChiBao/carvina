@extends($theme . '.shop_layout')
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
    <!-- Main Container -->
    <div id="content">

        <main class="padding-top-mobile">
            <div class="header-navigate">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <ol class="breadcrumb breadcrumb-arrow">
                                <li><a href="{{ url('/') }}" target="_self">Trang chủ</a></li>

                                <li><i class="fa fa-angle-right"></i></li>
                                <li class="active"><span>{{ $title }}</span></li>

                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="container">
                    <div class="row">
                        <img src="{{ asset('images/freeship.png') }}" alt="">
                    </div>
                </div>
            </div>

        </main>

    </div>
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
        $("#contact-nav_item").toggleClass("active");
    </script>
@endpush
