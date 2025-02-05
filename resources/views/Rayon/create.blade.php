@extends('layouts.template')

@section('content')
<form action="{{ route('Rayon.store') }}" method="POST" class="card p-5">
    @csrf
    
    <div class="mb-3">
        <label for="Rayon" class="col-sm-2 col-form-label">Nama Rayon: </label>
        <div>
            <input type="text"   class="form-control @error('Rayon') is-invalid @enderror" name="Rayon" id="Rayon" value="{{ old('Rayon') }}" required>
            @error('Rayon')
            <div class="invalid-feedback">Rayon Sudah Ada.</div>
            @enderror
        </div>
    </div>
    <div>
        <button type="submit" class="btn btn-primary mt-3">Tambah Rayon</button>
    </div>
</form>
@endsection