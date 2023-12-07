
@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Edit Course</h1>
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
                    <label >Course Name</label>
                    <input type="text" class="form-control" name="course_name" value="{{ $getRecord->course_name }}" required placeholder="Course Name">
                  </div>
                  <div class="form-group">
                    <label >Deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi" value="{{ $getRecord->deskripsi }}" required placeholder="Deskripsi">
                  </div>
                  <div class="form-group">
                  <label>Range Course:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control float-right" id="daterange" name="daterange" value="{{ $getRecord->range_course }}">
                  </div>
                  <!-- /.input group -->
                </div>
                                    
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="hidden" class="form-control float-right" id="created_by" name="created_by" value="{{ $getRecord->created_by }}">
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

