
@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Change Password</h1>
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
            @include('_message')
            <div class="card card-primary">
             
              <form method="post" action="">
              {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label >Old Password</label>
                    <input type="password" class="form-control" name="old_password" required placeholder="Old Password">
                  </div>
                  <div class="form-group">
                    <label >New Password</label>
                    <input type="password" class="form-control" name="new_password" required placeholder="New Password">
                  </div>
                                                     
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          

          </div>
        </div>

      </div>
    </section>

  </div>


@endsection