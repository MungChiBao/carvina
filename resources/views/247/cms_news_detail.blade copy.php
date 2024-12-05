@extends($theme.'.shop_layout')

@section('content')
  <!-- Main Container -->
  <div class="main-container col1-layout">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
{!! $news_currently->content !!}
        </div>
    </div>
    </div>
</div>

@endsection

@section('breadcrumb')
    <div class="breadcrumbs">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <ul>
                <li class="home"> <a title="Go to Home Page" href="{{ url('/') }}">Trang chủ</a><span><i class="fa fa-chevron-right" style=" margin: 0 5px; font-size: 10px; color: #fd669f; "></i></span></li>
                <li class=""><a href="{{ url('blogs.html') }}">Blog</a><span><i class="fa fa-chevron-right" style=" margin: 0 5px; font-size: 10px; color: #fd669f; "></i></span></li>
                <li class="">{{ $title }}</li>

              </ul>
            </div>
          </div>
        </div>
      </div>
@endsection
