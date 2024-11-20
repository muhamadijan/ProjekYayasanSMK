@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Kelola Tentang</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <div class="container">
                        @if(count($tentang) == 0)
                            <div class="row">
                                <a href="{{ route('profil.tentang.create') }}" class="btn btn-primary mb-4">
                                    <i class="fas fa-plus-circle"></i> Upload Tentang
                                </a>
                            </div>
                        @endif
                    </div>
                    
                    @if(session('sukses'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('sukses') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-bordered" id="guru">
                            <thead>
                                <tr>
                                    <th scope="col" style="text-align: center; width: 6%">NO.</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Isi</th>
                                    <th scope="col">Jumlah Siswa</th>
                                    <th scope="col">Tahun Berdiri</th>
                                    <th scope="col">Jumlah Guru dan Karyawan</th>
                                    <th scope="col">Jumlah Lembaga</th>
                                    <th scope="col" style="width: 25%; text-align: center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $nomor = 1; @endphp
                                @foreach ($tentang as $item)
                                    <tr>
                                        <td style="text-align: center">{{ $nomor++ }}</td>
                                        <td>{!! $item->judul !!}</td>
                                        <td>{!! $item->isi !!}</td>
                                        <td>{!! $item->siswa !!}</td>
                                        <td>{!! $item->tahun_berdiri !!}</td>
                                        <td>{!! $item->guru_karyawan !!}</td>
                                        <td>{!! $item->lembaga !!}</td>
                                        <td class="text-center">
                                            <a href="{{ route('profil.tentang.edit', $item->id) }}" class="btn btn-sm btn-primary">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>
                                            <a href="{{ route('profil.tentang.detail', $item->id) }}" class="btn btn-sm btn-success">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <button onClick="Delete(this.id)" class="btn btn-sm btn-danger" id="{{ $item->id }}">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    $(document).ready(function() {
        $('#guru').DataTable();
    });

    function Delete(id) {
        var token = $("meta[name='csrf-token']").attr("content");

        swal({
            title: "APAKAH KAMU YAKIN?",
            text: "INGIN MENGHAPUS DATA INI!",
            icon: "warning",
            buttons: ['TIDAK', 'YA'],
            dangerMode: true,
        }).then(function(isConfirm) {
            if (isConfirm) {
                $.ajax({
                    url: "/profil/tentang/index/delete/" + id,
                    data: { "id": id, "_token": token },
                    type: 'DELETE',
                    success: function(response) {
                        if (response.status == "success") {
                            swal({
                                title: 'BERHASIL!',
                                text: 'DATA BERHASIL DIHAPUS!',
                                icon: 'success',
                                timer: 1000,
                                buttons: false,
                            }).then(function() {
                                location.reload();
                            });
                        } else {
                            swal({
                                title: 'GAGAL!',
                                text: 'DATA GAGAL DIHAPUS!',
                                icon: 'error',
                                timer: 1000,
                                buttons: false,
                            }).then(function() {
                                location.reload();
                            });
                        }
                    }
                });
            }
        });
    }
</script>
@stop
