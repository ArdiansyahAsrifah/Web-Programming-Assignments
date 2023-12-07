@extends('frontend.app')
 
@section('judul_halaman', 'Halaman Home')

@section('konten')
<br>
<center>
<h1 style="justify-content: center">5 POPULAR COURSE</h1>

<div class="row mt-4" style="max-width: 80%, max-height:60%">
    @foreach($getRecord->take(5) as $index => $value)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow bg-dark text-white">
                <img src="{{ asset($value->image_path) }}" class="card-img-top" alt="{{ $value->course_name }} Image" style="max-height: 300px; width: 100%; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">{{ $value->course_name }}</h5>
                </div>
            </div>
        </div>
    @endforeach
</div>

<br>
</center>



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

    <div class="row mt-4">
        @foreach($getRecord as $value)
            <div class="col-md-3 mb-5" style="margin-left: 100px">
                <div class="card h-100 shadow-sm" style="max-width: 80%">
                    <img src="{{ asset($value->image_path) }}" class="card-img-top" alt="{{ $value->course_name }} Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $value->course_name }}</h5>
                        <p class="card-text"><strong>Range Course:</strong> {{ $value->range_course }}</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated {{ $value->updated_at->diffForHumans() }}</small>
                    </div>
                </div>
            </div>
       
        @endforeach
    </div>
</div>
</div>
@endsection
