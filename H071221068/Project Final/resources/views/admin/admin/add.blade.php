
@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Tambah Pengguna</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
             
              <form method="post" action="">
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
                    @foreach($role as $key => $val)
                    @if($key==old('role'))
                    <option value="{{ $key }}" selected>{{ $val }}</option>
                    @else
                    <option value="{{ $key }}">{{ $val }}</option>
                    @endif
                    @endforeach
                    </select>
                </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          

          </div>
          <!--/.col (left) -->
          <!-- right column -->
         
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection