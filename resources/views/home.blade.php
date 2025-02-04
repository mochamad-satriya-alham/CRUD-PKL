@extends('layouts.template')

@section('content')
    <div class="container" style="display: flex; align-items: center;">
        <div class="img" style="flex: 1;">
            <img src="{{ asset('image/image.png') }}" alt="" style="width: 35rem; height: 35rem;">
        </div>
        <div class="text" style="flex: 1; padding-left: 20px; border-bottom: 2px solid grey;">
            <h2>Selamat Datang! <br> di Website Data Siswa Online</h2>
        </div>
    </div>
@endsection
