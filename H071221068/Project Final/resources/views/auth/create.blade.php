<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('public/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ url('public/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('public/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
  <div class="card-header text-center">
      <a href="" class="h1"><b>Create Akun</b></a>
    </div>
    <div class="card-body">
   
      @include('_message')

      <form action="" method="post">
        {{ csrf_field() }}
        <div class="card-body">
                  <div class="form-group">
                    <label >Name</label>
                    <input type="text" class="form-control" name="name" required placeholder="Name">
                  </div>
                  <div class="form-group">
                    <label >Email</label>
                    <input type="email" class="form-control" name="email" required placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label >Password</label>
                    <input type="password" class="form-control" name="password" required placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label>Role <span class="text-danger">*</span></label>
                    <select class="form-control" name="role" />
                    <option value="2" selected>Teacher</option>
                    <option value="3">Student</option>
                
                    </select>
                </div>
                </div>
        
        <div class="row">
          
          <!-- /.col -->
          <div class="col-8">
          </div>  
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    
      <!-- /.social-auth-links -->

     
    
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ url('public/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ url('public/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('public/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
