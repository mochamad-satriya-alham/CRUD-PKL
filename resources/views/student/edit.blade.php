
@extends ('layouts.template')

@section('content')
    <form action="{{ route('Siswa.update',  $student['id']) }}" method="POST" class="card p-5">
        @csrf
        @method('PATCH')

        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama" value="{{  $student['nama'] }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="rombel" class="col-sm-2 col-form-label">Rombel : </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="rombel" name="rombel" value="{{  $student['rombel'] }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="nisn" class="col-sm-2 col-form-label">Nisn : </label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="nisn" name="nisn" value="{{  $student['nisn'] }}">
            </div>
        </div>

        <div class="mb-3 row" >
            <label for="rayon" class="col-sm-2 col-form-label">Rayon:</label>
            <div class="col-sm-10">
            <select name="rayon_id" class="form-control" required>
                @foreach ($rayons as $rayon)
                    <option value="{{ $rayon->id }}" {{ $student->rayon_id == $rayon->id ? 'selected' : '' }}>{{ $rayon->Rayon }}</option>
                @endforeach
            </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Ubah Data</button>
    </form>
@endsection
