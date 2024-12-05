@extends($theme.'.shop_layout')
@section('slide')
@endsection
@push('style')
<style>
h3.page-subheading{
    color: #e13475;
}

.login, .register{
    padding: 0 1rem;
}

.has-error .help-block{
    color: red;
    font-style: italic;
}

input{
    
    margin-bottom: 2px;
}

</style>
@endpush

@section('content')
  <div class="main-container col1-layout">
    <div class="container">
<div class="row">

        <div class="login col-xs-12 col-sm-6">
            <form action="{{ route('login') }}" method="post"  class="box">
                <h3 class="page-subheading"><i class="fa fa-user" aria-hidden="true"></i> {{__("guest.login")}}</h3>
                {!! csrf_field() !!}
                <div class="form_content">
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="control-label">{{__("guest.email")}}</label>
                            <input class="is_required validate account_input form-control {{ ($errors->has('email'))?"input-error":"" }}"   type="text" " name="email" value="{{ old('email') }}" >
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        {{ $errors->first('email') }}
                                    </span>
                                @endif

                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="control-label">{{__("guest.password")}}</label>
                            <input class="is_required validate account_input form-control {{ ($errors->has('password'))?"input-error":"" }}"   type="password" " name="password" value="" >
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        {{ $errors->first('password') }}
                                    </span>
                                @endif

                    </div>

                    <p class="lost_password form-group">
                        <a style="padding-left: 0;" class="btn btn-link" href="{{ url('forgot.html') }}">
                        {{__("guest.forgot_password")}}
                        </a>
                        <br>
                    </p>
                    <p class="submit">
                    <button type="submit" style="background: #ff007d;color: antiquewhite;" name="SubmitLogin" class="btn btn-default btn-md">
                    <span>
                        <i class="fa fa-lock left"></i>
                        {{__("guest.login")}}
                    </span>
                        </button>
                    </p>
                </div>
            </form>
        </div>


        <div class="register col-xs-12 col-sm-6">
            <form action="{{url('register')}}" method="post"  class="box">
                <h3 class="page-subheading" data-toggle="collapse" data-target="#collapseExample" 
                aria-expanded="false" aria-controls="collapseExample" style="cursor: pointer;">
                <i class="fa fa-plus-circle" aria-hidden="true"></i> {{__("guest.create_new_account")}}</h3>
                {!! csrf_field() !!}
                <div class="form_content collapse {{ (old('check_red'))?'in':'' }}" id="collapseExample">
                    <div class="form-group{{ $errors->has('reg_name') ? ' has-error' : '' }}">
                        <label for="reg_name" class="control-label">{{__("guest.name")}}</label>
                        <input  type="text" class="is_required validate account_input form-control {{ ($errors->has('reg_name'))?"input-error":"" }}"   name="reg_name" placeholder="Tên bạn" value="{{ old('reg_name') }}">
                        @if ($errors->has('reg_name'))
                        <span class="help-block">
                            {{ $errors->first('reg_name') }}
                        </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('reg_email') ? ' has-error' : '' }}">
                        <label for="reg_email" class="control-label">{{__("guest.email")}}</label>
                        <input  type="text" class="is_required validate account_input form-control {{ ($errors->has('reg_email'))?"input-error":"" }}"   name="reg_email" placeholder="Email của bạn" value="{{ old('reg_email') }}">
                        @if ($errors->has('reg_email'))
                        <span class="help-block">
                            {{ $errors->first('reg_email') }}
                        </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('reg_phone') ? ' has-error' : '' }}">
                        <label for="reg_phone" class="control-label">{{__("guest.phone")}}</label>
                        <input  type="text" class="is_required validate account_input form-control {{ ($errors->has('reg_phone'))?"input-error":"" }}"   name="reg_phone" placeholder="Số điện thoại" value="{{ old('reg_phone') }}">
                        @if ($errors->has('reg_phone'))
                        <span class="help-block">
                            {{ $errors->first('reg_phone') }}
                        </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('reg_address1') ? ' has-error' : '' }}">
                        <label for="reg_address1" class="control-label">{{__("guest.address")}}</label>
                        <input  type="text" class="is_required validate account_input form-control {{ ($errors->has('reg_address1'))?"input-error":"" }}"   name="reg_address1" placeholder="Quận/Huyện" value="{{ old('reg_address1') }}">
                        @if ($errors->has('reg_address1'))
                        <span class="help-block">
                            {{ $errors->first('reg_address1') }}
                        </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('reg_address2') ? ' has-error' : '' }}">
                        <label for="reg_address2" class="control-label">{{__("guest.address")}}</label>
                        <input  type="text" class="is_required validate account_input form-control {{ ($errors->has('reg_address2'))?"input-error":"" }}"   name="reg_address2" placeholder="Tên đường, số nhà..." value="{{ old('reg_address2') }}">
                        @if ($errors->has('reg_address2'))
                        <span class="help-block">
                            {{ $errors->first('reg_address2') }}
                        </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('reg_password') ? ' has-error' : '' }}">
                        <label for="reg_password" class="control-label">{{__("guest.password")}}</label>
                        <input  type="password" class="is_required validate account_input form-control {{ ($errors->has('reg_password'))?"input-error":"" }}"   name="reg_password" placeholder="Mật khẩu" value="">
                        @if ($errors->has('reg_password'))
                        <span class="help-block">
                            {{ $errors->first('reg_password') }}
                        </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('reg_password_confirmation') ? ' has-error' : '' }}">
                        <label for="reg_password" class="control-label">{{__("guest.retype_password")}}</label>
                        <input type="password" class="is_required validate account_input form-control {{ ($errors->has('reg_password_confirmation'))?"input-error":"" }}"  placeholder="Xác nhận mật khẩu" name="reg_password_confirmation" value="">
                        @if ($errors->has('reg_password_confirmation'))
                        <span class="help-block">
                            {{ $errors->first('reg_password_confirmation') }}
                        </span>
                        @endif
                    </div>
                    <input type="hidden" name="check_red" value="1">
                    <div class="submit">
                        <button style="background: #ff007d;color: antiquewhite; margin-top: 1rem;" class="btn btn-default btn-md" type="submit" id="SubmitCreate" name="SubmitCreate">
                            <span>
                                <i class="fa fa-user left"></i>
                                {{__("guest.create_account")}}
                            </span>
                        </button>
                    </div>
                </div>
            </form>
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
                <li class="">Trang đăng nhập</li>

              </ul>
            </div>
          </div>
        </div>
      </div>
@endsection
