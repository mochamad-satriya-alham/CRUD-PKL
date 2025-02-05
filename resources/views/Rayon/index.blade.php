@extends('layouts.template')

@section('content')
    <a class="btn btn-primary mb-3" href="{{ route('Rayon.create') }}">Tambah Pengguna</a>
    @if (Session::get('sukses'))
        <div class="alert alert-success">{{ Session::get('sukses') }}</div>
    @endif
    @if (Session::get('sukkses'))
        <div class="alert alert-success">{{ Session::get('sukkses') }}</div>
    @endif
    @if (Session::get('hapus'))
        <div class="alert alert-warning">{{ Session::get('hapus') }}</div>
    @endif
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <th>No</th>
            <th>Rayon</th>
            <th class="text-center">Aksi</th>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach ($rayons as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item['Rayon'] }}</td>
                    <td class="d-flex justify-content-center">
                        <a href="{{ route('Rayon.edit', $item->id) }}" class="btn btn-primary me-3">Edit</a>
                        <form action="{{ route('Rayon.delete', $item['id']) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
