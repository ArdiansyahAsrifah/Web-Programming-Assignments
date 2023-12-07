@extends('frontend.app')

@section('judul_halaman', 'Halaman Lesson')

@section('konten')

<style>
    .card {
        background-color: #333;
        color: #fff; 
    }

    .card-header {
        background-color: #222; 
        color: #fff; 
    }

    .form-control {
        background-color: #444; 
        color: #fff; 
    }

    .btn-success {
        background-color: #28a745; 
        color: #fff; 
    }

    .table {
        background-color: #444; 
        color: #fff; 
    }

    .table th, .table td {
        border-color: #555; 
    }
</style>

<br>

<div class="card">
    <div class="card-header">
        <form class="form-inline">
            <div class="form-group mr-1">
                <input class="form-control" type="text" name="q" placeholder="Pencarian..." />
            </div>
            <div class="form-group mr-1">
                <button class="btn btn-success">Refresh</button>
            </div>
        </form>
    </div>

    <div class="card-body p-0">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Judul</th>
                <th>Isi Materi</th>
            </tr>
            </thead>
            <tbody>
            @foreach($getRecord as $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->judul }}</td>
                    <td>{{ $value->isi_materi }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
