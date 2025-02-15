<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Đăng nhập</title>

    <!-- Google Font: Source Sans Pro -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
    />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}" />
    <!-- icheck bootstrap -->
    <link
      rel="stylesheet"
      href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}"
    />
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}" />
  </head>
  <body class="hold-transition login-page">
      <form action="{{ asset('/dang-nhap') }}" method="post" enctype="multipart/form-data">
        @csrf
        
        <div class="login-box">
            <div class="login-logo">
              <a href="#"><b>Đăng nhập</b></a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
              <div class="card-body login-card-body">
                <p class="login-box-msg"></p>
      
                <div>
                  <div class="input-group mb-3">
                    <input
                      type="text"
                      name="username"
                      
                      class="form-control"
                      placeholder="Tên đăng nhập"
                    />
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                      </div>
                    </div>
                  </div>
                  <div class="input-group mb-3">
                    <input
                      type="password"
                      name="password"
                   
                      class="form-control"
                      placeholder="Mật khẩu"
                    />
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-7">
                      <div class="icheck-primary">
                        <input type="checkbox" id="remember" />
                        <label for="remember"> Ghi nhớ </label>
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-5">
                      <button
                        type="submit"
                        class="btn btn-primary btn-block"
                      >
                        Đăng nhập
                      </button>
                    </div>
                    <!-- /.col -->
                  </div>
                </div>
      
                {{-- <div class="social-auth-links text-center mb-3">
                  <p>- OR -</p>
                  <!-- <a href="#" class="btn btn-block btn-primary">
                <i class="fab fa-facebook mr-2"></i> Facebook
              </a> -->
                  <a href="#" class="btn btn-block btn-danger">
                    <i class="fab fa-google-plus mr-2"></i> Google
                  </a>
                </div>
                <!-- /.social-auth-links --> --}}
      
                <p class="mb-1">
                  <a href="#">Quên mật khẩu</a>
                </p>
                <p class="mb-0">
                  <a href="#" class="text-center">Đăng kí thành viên</a>
                </p>
              </div>
              <!-- /.login-card-body -->
            </div>
          </div>
      </form>
    
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    
  </body>
</html>
