
@extends ('layouts.template')

@section('content')
    <form action="{{ route('Rayon.update',  $rayon['id']) }}" method="POST" class="card p-5">
        @csrf
        @method('PATCH')

        <div class="mb-3">
            <label for="Rayon" class="col-sm-2 col-form-label"> Rayon: </label>
            <div>
                <input type="text"   class="form-control" name="Rayon" id="Rayon" value="{{ $rayon['Rayon'] }}" required>
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Ubah Data</button>
    </form>
@endsection
