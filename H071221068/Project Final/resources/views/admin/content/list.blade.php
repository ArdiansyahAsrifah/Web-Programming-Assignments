
@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Content</h1>
          </div>
          <div class="col-sm-6" style="text-align: right;">
          @if(Auth::user()->role == 1)
            <a href="{{ url('admin/content/add')}}" class="btn btn-primary">Tambah Content</a>
          @elseif(Auth::user()->role == 2)
            <a href="{{ url('teacher/content/add')}}" class="btn btn-primary">Tambah Content</a>
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
                <h3 class="card-title">Tambah Content</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th >#</th>
                      <th>Judul</th>
                      <th>Isi Materi</th>
                      <th>Created By</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($getRecord as $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->judul }}</td>
                            <td>{{ $value->isi_materi }}</td>
                            <td>{{ $value->created_by_name }}</td>
                            <td>
                            @if(Auth::user()->role == 1)
                                <a href="{{ url('admin/content/edit/'.$value->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{ url('admin/content/delete/'.$value->id)}}" class="btn btn-danger" onclick="return confirm('yakin?');">Delete</a>
                              @elseif(Auth::user()->role == 2)
                                <a href="{{ url('teacher/content/edit/'.$value->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{ url('teacher/content/delete/'.$value->id)}}" class="btn btn-danger" onclick="return confirm('yakin?');">Delete</a>
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