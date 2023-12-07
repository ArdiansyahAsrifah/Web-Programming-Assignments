@extends('frontend.app')

@section('judul_halaman', 'Halaman User')

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

    .user-profile {
        border: 1px solid #444; 
        padding: 15px;
        margin-bottom: 15px;
    }

    .profile-info {
        color: #fff; 
    }
</style>
<br>
<div class="card card-default">
    <div class="card-header">
        <h3 class="card-title">User Profile</h3>
    </div>

    <div class="card-body">
        @foreach($getRecord as $value)
            <div class="user-profile">
                <div class="profile-info">
                    <strong>Username:</strong> {{ $value->name }}<br>
                    <strong>Email:</strong> {{ $value->email }}<br>
                    <strong>Joined Date:</strong> {{ $value->created_at->format('d M Y') }}
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
