@extends('layouts.template')

@section('content')
    @if (Session::get('sukses'))
        <div class="alert alert-success">{{ Session::get('sukses') }}</div>
    @endif
    @if (Session::get('hapus'))
        <div class="alert alert alert-warning">{{ Session::get('hapus') }}</div>
    @endif
    <table class="table table-striped table-bordered table-hover">

        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>Rombel</th>
            <th>Nisn</th>
            <th>Rayon</th>
            <th class="text-center">Aksi</th>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach ($students as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item['nama'] }}</td>
                    <td>{{ $item['rombel'] }}</td>
                    <td>{{ $item['nisn'] }}</td>
                    <td>{{ $item->rayon->Rayon }}</td>
                    <td class="d-flex justify-content-center">
                        <a href="{{ route('Siswa.edit', $item->id) }}" class="btn btn-primary me-3">Edit</a>
                        <form action="{{ route('Siswa.hapus', $item['id']) }}" method="POST">
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
