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
                    <td>{{ $item->Rayon->Rayon }}</td>
                    <td class="d-flex justify-content-center">
                        <a href="{{ route('Siswa.edit', $item->id) }}" class="btn btn-primary me-3">Edit</a>
                        <button type="submit" class="btn btn-danger"
                            onclick="showModalDelete('{{ $item->id }}','{{ $item->nama }}')">Hapus</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


<!-- Notifikasi Delete -->
<div class="modal fade" id="ModalDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form class="modal-content" method="POST" action="">
            @csrf
            @method('DELETE')
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"> Siswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                apakah anda yakin ingin menghapus data <b id="name-siswa"></b>?
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-danger">Hapus</button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('script')
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    function showModalDelete(id, nama) {
        $("#name-siswa").text(nama);
        $("#ModalDelete").modal('show');   
        let url="{{route('Siswa.hapus', ':id')}}";
        url = url.replace(':id', id);
        $("form").attr('action', url);
        }
</script>