@extends('layout.login')

@section('extra-css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ URL('public/iCheck/square/blue.css') }}">
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endsection

@section('content')
<div class="hold-transition login-page-wrapper">
  <div class="login-box">
    <div class="login-logo">
      <a href="#" title="Kementerian Pertahanan"><img class="img-responsive" src="{{ URL('public/images/') }}/logo.png"/>
          </a>
    </div>
    <div class="login-label text-center">
      <span class="a-mon">Sistem Monitoring Administrasi Pelaksanaan Anggaran</span><br>
      <span class="k-per">Kementerian Pertahanan Republik Indonesia</span>
    </div>

    <!-- /.login-logo -->
    <div class="login-box-body-page">
      <p class="login-box-msg">Login</p>

      <form action='{{URL("/cms/user/signin")}}' method="POST">
        {{ csrf_field() }}
        <div class="form-group has-feedback">
          <input type="text" name="username" class="form-control" placeholder="Username">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="g-recaptcha pull-right" data-sitekey="6LfvpasUAAAAAAbyoYWXm3k2VRWvl_BuI4VrNw3Q"></div>
          </div>
        </div>
        <div class="row margin-top-10">
          <div class="col-xs-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox"> Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <a href="#">I forgot my password</a><br>

    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->
</div>
@endsection

@section('extra-js')
<!-- iCheck -->
<script src="{{ URL('public/iCheck/icheck.min.js') }}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
@endsection