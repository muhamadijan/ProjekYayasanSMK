@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Tentang</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-info-circle"></i> Detail Tentang</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Judul</th>
                            <td>{{ $tentang->judul }}</td>
                        </tr>
                        <tr>
                            <th>Isi</th>
                            <td>{!! $tentang->isi !!}</td>
                        </tr>
                        <tr>
                            <th>Jumlah Siswa</th>
                            <td>{{ $tentang->siswa }}</td>
                        </tr>
                        <tr>
                            <th>Tahun Berdiri</th>
                            <td>{{ $tentang->tahun_berdiri }}</td>
                        </tr>
                        <tr>
                            <th>Jumlah Guru dan Karyawan</th>
                            <td>{{ $tentang->guru_karyawan }}</td>
                        </tr>
                        <tr>
                            <th>Jumlah Lembaga</th>
                            <td>{{ $tentang->lembaga }}</td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="{{ route('profil.tentang.index') }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Kembali</a>
                </div>
            </div>
        </div>
    </section>
</div>
@stop
