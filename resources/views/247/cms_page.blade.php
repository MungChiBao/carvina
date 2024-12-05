@extends($theme.'.shop_layout')
@section('slide')
@endsection

@section('content')
<style>
  @media only screen and (max-width: 768px) {
      #main {
          padding-top: 105px !important;
      }
  }
</style>

<main id="main" class="" style="padding-top: 155px;">
        <div class="page-wrapper page-right-sidebar">
          <div class="row">
            <div id="content" class="large-12 left col col-divided" role="main">
              <div class="page-inner">
                <header class="entry-header">
                  <p id="breadcrumbs">
                    <span
                      ><span
                        ><a href="{{url('/')}}">Trang chủ</a> »
                        <span class="breadcrumb_last" aria-current="page"
                          >Giới thiệu</span
                        ></span
                      ></span
                    >
                  </p>
                  <h1 class="entry-title mb uppercase">Giới thiệu</h1>
                </header>

              
{!! $page->content !!}
              </div>
            </div>

      
          </div>
        </div>
      </main>
  <!-- Main Container -->

@endsection


@section('breadcrumb')
    {{-- <div class="breadcrumbs">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <ul>
                <li class="home"> <a title="Go to Home Page" href="{{ url('/') }}">Trang chủ</a><span><i class="fa fa-chevron-right" style=" margin: 0 5px; font-size: 10px; color: #fd669f; "></i></span></li>
                <li class="">{{ $title }}</li>

              </ul>
            </div>
          </div>
        </div>
      </div> --}}
@endsection
