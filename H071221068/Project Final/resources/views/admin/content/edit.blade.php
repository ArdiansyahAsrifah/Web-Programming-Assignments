
@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Edit Content</h1>
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
                    <label >Judul</label>
                    <input type="text" class="form-control" name="judul" value="{{ $getRecord->judul }}" required placeholder="Judul">
                  </div>
                  <div class="form-group">
                    <label >Isi Materi</label>
                    <input type="text" class="form-control" name="isi_materi" value="{{ $getRecord->isi_materi }}" required placeholder="Isi Materi">
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