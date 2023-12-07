@extends('frontend.app')

@section('judul_halaman', 'Halaman Course')

@section('konten')

<br>

<div class="card">

 
    <div class="card-body p-0">
        <div id="accordion" class="accordion-dark"> 
            @foreach($getRecord as $index => $value)
                <div class="card mb-2">
                    <div class="card-header" id="heading{{ $index }}" style="background-color: #343a40; color: #fff;"> 
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed text-white" data-toggle="collapse" data-target="#collapse{{ $index }}" aria-expanded="false" aria-controls="collapse{{ $index }}" style="text-decoration: none;">
                                {{ $value->course_name }}
                            </button>
                        </h5>
                    </div>

                    <div id="collapse{{ $index }}" class="collapse {{ $index == 0 ? 'show' : '' }}" aria-labelledby="heading{{ $index }}" data-parent="#accordion" style="background-color: #343a40; color: #fff;">
                        <div class="card-body">
                            <strong class="text-white">Deskripsi:</strong> {{ $value->deskripsi }}<br>
                            <strong class="text-white">Range Course:</strong> {{ $value->range_course }}<br>
                            <strong class="text-white">Pengajar:</strong> {{ $value->pengajar }}<br>
                            <br>
     
                            <a href="https://wa.me/+6285173235611" class="btn btn-success" target="_blank">Hubungi via WhatsApp</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
