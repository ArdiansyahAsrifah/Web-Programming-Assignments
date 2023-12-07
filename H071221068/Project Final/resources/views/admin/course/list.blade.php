
@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Course</h1>
          </div>
          <div class="col-sm-6" style="text-align: right;">
          @if(Auth::user()->role == 1)
            <a href="{{ url('admin/course/add')}}" class="btn btn-primary">Tambah Course</a>
          @elseif(Auth::user()->role == 2)
            <a href="{{ url('teacher/course/add')}}" class="btn btn-primary">Tambah Course</a>
            @endif
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
       
          <!-- /.col -->
          <div class="col-md-12">
            @include('_message')
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tambah Course</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th >#</th>
                      <th>Course Name</th>
                      <th>Deskripsi</th>
                      <th>Range Course</th>
                      <th>Pengajar</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($getRecord as $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->course_name }}</td>
                            <td>{{ $value->deskripsi }}</td>
                            <td>{{ $value->range_course }}</td>
                            <td>{{ $value->pengajar }}</td>
                            <td>
                              @if(Auth::user()->role == 1)
                                <a href="{{ url('admin/course/edit/'.$value->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{ url('admin/course/delete/'.$value->id)}}" class="btn btn-danger" onclick="return confirm('yakin?');">Delete</a>
                              @elseif(Auth::user()->role == 2)
                                <a href="{{ url('teacher/course/edit/'.$value->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{ url('teacher/course/delete/'.$value->id)}}" class="btn btn-danger" onclick="return confirm('yakin?');">Delete</a>
                              @endif
                                
                            </td>
                         </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection