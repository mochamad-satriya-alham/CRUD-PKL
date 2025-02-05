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
            <input type="number" class="form-control @error('nisn') is-invalid @enderror" name="nisn" id="nisn" value="{{ old('nisn') }}" min="0" required>
            @error('nisn')
            <div class="invalid-feedback">Nisn ini sudah di pakai.</div>
            @enderror
        </div>
    </div>

    <div class="mb-3">
        <label for="rayon" class="col-sm-2 col-form-label">Rayon: </label>
        <select name="rayon_id" class="form-control" required>
            @foreach ($rayons as $rayon)
                <option value="{{ $rayon->id }}">{{ $rayon->Rayon }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <button type="submit" class="btn btn-primary mt-3">Tambah Siswa</button>
    </div>
</form>
@endsection