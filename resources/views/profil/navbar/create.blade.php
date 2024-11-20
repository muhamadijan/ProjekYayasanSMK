@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
                <h1>Tambah  Gambar Depan Sekolah</h1>
            </div>

            <div class="section-body">
               

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-image"></i> Tambah  Gambar Depan Sekolah</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('profil.navbar.post') }}" method="POST" enctype="multipart/form-data">
                            @csrf


                            <div class="form-group">
                                <label>GAMBAR-1</label>
                                <input type="file" name="gambar1" value="{{ old('gambar1') }}" class="form-control @error('gambar1') is-invalid @enderror">

                                @error('gambar1')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            
                            <div class="form-group">
                                <label>GAMBAR-2</label>
                                <input type="file" name="gambar2" value="{{ old('gambar2') }}" class="form-control @error('gambar2') is-invalid @enderror">

                                @error('gambar2')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            
                            <div class="form-group">
                                <label>GAMBAR-3</label>
                                <input type="file" name="gambar3" value="{{ old('gambar3') }}" class="form-control @error('gambar3') is-invalid @enderror">

                                @error('gambar3')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            
                            <div class="form-group">
                                <label>GAMBAR-4</label>
                                <input type="file" name="gambar4" value="{{ old('gambar4') }}" class="form-control @error('gambar4') is-invalid @enderror">

                                @error('gambar4')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>GAMBAR-5</label>
                                <input type="file" name="gambar5" value="{{ old('gambar5') }}" class="form-control @error('gambar5') is-invalid @enderror">

                                @error('gambar5')
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