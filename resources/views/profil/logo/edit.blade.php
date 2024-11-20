@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
                <h1>Edit Galeri</h1>
            </div>

            <div class="section-body">
               

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-image"></i> Edit Logo</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('profil.logo.post') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$logo->id}}">
                            
                            <div class="form-group">
                                <label>LOGO</label>
                                <input type="file" name="logo"  value="{{ $logo->logo }}" placeholder="Masukkan Logo"  class="form-control @error('logo') is-invalid @enderror">

                                @error('logo')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            
                            <div class="form-group">
                                <label>ICON</label>
                                <input type="file" name="icon"  value="{{ $logo->icon }}" placeholder="Masukkan Nama Icon"  class="form-control @error('foto') is-invalid @enderror">

                                @error('icon')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            
                            <div class="form-group">
                                <label>NAMA</label>
                                <input type="text" name="nama"  value="{{ $logo->nama }}" placeholder="Masukkan Nama"  placeholder="Masukkan Nama Sekolah" class="form-control @error('nama') is-invalid @enderror">

                                @error('nama')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label>ISI</label>
                                <input type="text" name="isi"  value="{{ $logo->isi }}" placeholder="Masukkan Nama isi " class="form-control @error('nama') is-invalid @enderror">

                                @error('isi')
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