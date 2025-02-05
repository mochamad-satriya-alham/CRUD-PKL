@extends('layouts.template')

@section('content')
<a class="btn btn-primary mb-3" href="{{route('Rayon.create')}}">Tambah Pengguna</a>
@if (Session::get('sukses'))
        <div class="alert alert-success">{{ Session::get('sukses') }}</div>
    @endif
<table class="table table-striped table-bordered table-hover">
    <thead>
        <th>No</th> 
        <th>Rayon</th>
    </thead>
    <tbody>
        @php $no = 1; @endphp
        @foreach ($rayons as $item)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $item['Rayon'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection