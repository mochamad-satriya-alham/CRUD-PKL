@extends('layouts.template')

@section('content')
<form action="{{ route('Student.store') }}" method="POST" class="card p-5">
    @csrf
    
    @if (Session::get('sukses'))
        <div class="alert alert-success">{{ Session::get('sukses') }}</div>
    @endif

    <div class="mb-3">
        <label for="nama" class="col-sm-2 col-form-label">Nama: </label>
        <div>
            <input type="text"   class="form-control"   name="nama" id="nama" required>
        </div>
    </div>

    <div class="mb-3">
        <label for="name" class="col-sm-2 col-form-label">Rombel: </label>
        <div>
            <input type="text" class="form-control" name="rombel" id="rombel" required>
        </div>
    </div>

    <div class="mb-3">
        <label for="name" class="col-sm-2 col-form-label">Nisn: </label>
        <div>
            <input type="number" class="form-control" name="nisn" id="nisn" required>
        </div>
    </div>

    <div class="mb-3">
        <label for="name" class="col-sm-2 col-form-label">Rayon: </label>
        <div>
            <input type="text" class="form-control" name="rayon" id="rayon" required>
        </div>
    </div>
    <div>
        <button type="submit" class="btn btn-primary mt-3">Tambah Siswa</button>
    </div>
</form>
@endsection