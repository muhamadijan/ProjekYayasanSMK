@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
                <h1>Edit Galeri</h1>
            </div>

            <div class="section-body">
               

                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('multimedia.galeri.post') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$galeri->id}}">
                            <div class="form-group">
                                <label>NAMA</label>
                                <input type="text" name="judul" value="{{ $galeri->judul }}" placeholder="Masukkan Nama Galeri" class="form-control @error('judul') is-invalid @enderror">

                                @error('judul')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>GAMBAR</label>
                                <input type="file" name="gamar" value="{{ old('gamar') }}" class="form-control @error('gamar') is-invalid @enderror">

                                @error('gamar')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i> SIMPAN</button>
                            <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>

                        </form>
                    </div>
                </div>
            </div>
</div>
        </section>
    </div>

@stop