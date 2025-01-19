@extends('layouts.template')

@section('content')
<form action="{{ route('Siswa.proses') }}" method="POST" class="card p-5">
    @csrf
    
    @if (Session::get('sukses'))
        <div class="alert alert-success">{{ Session::get('sukses') }}</div>
    @endif

    <div class="mb-3">
        <label for="nama" class="col-sm-2 col-form-label">Nama: </label>
        <div>
            <input type="text"   class="form-control"   name="nama" id="nama"  value="{{ old('nama')}}"  required>
        </div>
    </div>

    <div class="mb-3">
        <label for="name" class="col-sm-2 col-form-label">Rombel: </label>
        <div>
            <input type="text" class="form-control" name="rombel" id="rombel"  value="{{ old('rombel')}}" required >
        </div>
    </div>

    <div class="mb-3">
        <label for="name" class="col-sm-2 col-form-label">Nisn: </label>
        <div>
            <input type="number" class="form-control @error('nisn') is-invalid @enderror" name="nisn" id="nisn" value="{{ old('nisn') }}" required>
            @error('nisn')
            <div class="invalid-feedback">Nisn ini sudah di pakai.</div>
            @enderror
        </div>
    </div>

    <div class="mb-3">
        <label for="name" class="col-sm-2 col-form-label">Rayon: </label>
        <div>
            <input type="text" class="form-control" name="rayon" id="rayon"  value="{{ old('rayon') }}" required>
        </div>
    </div>
    <div>
        <button type="submit" class="btn btn-primary mt-3">Tambah Siswa</button>
    </div>
</form>
@endsection