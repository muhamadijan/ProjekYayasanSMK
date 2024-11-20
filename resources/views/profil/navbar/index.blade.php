@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Kelola Gambar Depan Sekolah</h1>
        </div>
        <div class="section-body">
        
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-image"></i>  Gambar Depan Sekolah</h4>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <a href="{{route('profil/navbar/create')}}" class="btn btn-primary mb-4"><i class="fas fa-plus-circle"></i> Tambah  Gambar Depan Sekolah</a>&nbsp;
                        </div>
                    </div>
                    @if(session('sukses'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('sukses')}}
                    </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-bordered" id="guru">
                            <thead>
                            <tr>
                                <th scope="col" style="text-align: center;width: 6%">NO.</th>
                                <th scope="col">GAMBAR-1</th>
                                <th scope="col">GAMBAR-2</th>
                                <th scope="col">GAMBAR-3</th>
                                <th scope="col">GAMBAR-4</th>
                                <th scope="col">GAMBAR-5</th>
                                <th scope="col" style="width: 25%;text-align: center">AKSI&nbsp;LAINNYA</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $nomor = 1; ?>
                          @foreach ($navbar as $no => $navbar)
                                <tr>
                                    <td scope="row" style="text-align: center">{{$nomor++}}</td>
                                    <td><img src="{{ asset('/image/'.$navbar->gambar1)}}" width="70px"></td>
                                    <td><img src="{{ asset('/image/'.$navbar->gambar2)}}" width="70px"></td>
                                    <td><img src="{{ asset('/image/'.$navbar->gambar3)}}" width="70px"></td>
                                    <td><img src="{{ asset('/image/'.$navbar->gambar4)}}" width="70px"></td>
                                    <td><img src="{{ asset('/image/'.$navbar->gambar5)}}" width="70px"></td>
                                    <td class="text-center">
                                        <a href="{{ route('profil.navbar.edit', $navbar->id) }}" class="btn btn-sm btn-primary">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <a href="/profil/navbar/index/delete/{{ $navbar->id }}" class="btn btn-sm btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</div>
    </section>
</div>

<script>
    // datatable
    $(document).ready(function() {
        $('#guru').DataTable();
    });

    //ajax delete
    function Delete(id)
        {
            var id = id;
            var token = $("meta[name='csrf-token']").attr("content");

            swal({
                title: "APAKAH KAMU YAKIN ?",
                text: "INGIN MENGHAPUS DATA INI!",
                icon: "warning",
                buttons: [
                    'TIDAK',
                    'YA'
                ],
                dangerMode: true,
            }).then(function(isConfirm) {
                if (isConfirm) {

                    //ajax delete
                    jQuery.ajax({
                        url: "/profil/navbar/index/delete/"+id,
                        data:     {
                            "id": id,
                            "_token": token
                        },
                        type: 'DELETE',
                        success: function (response) {
                            if (response.status == "success") {
                                swal({
                                    title: 'BERHASIL!',
                                    text: 'DATA BERHASIL DIHAPUS!',
                                    icon: 'success',
                                    timer: 1000,
                                    showConfirmButton: false,
                                    showCancelButton: false,
                                    buttons: false,
                                }).then(function() {
                                    location.reload();
                                });
                            }else{
                                swal({
                                    title: 'GAGAL!',
                                    text: 'DATA GAGAL DIHAPUS!',
                                    icon: 'error',
                                    timer: 1000,
                                    showConfirmButton: false,
                                    showCancelButton: false,
                                    buttons: false,
                                }).then(function() {
                                    location.reload();
                                });
                            }
                        }
                    });

                } else {
                    return true;
                }
            })
        }
</script>
@stop 