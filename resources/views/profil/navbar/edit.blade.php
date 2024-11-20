@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
                <h1>Edit Gambar Depan Sekolah</h1>
            </div>

            <div class="section-body">
               
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-image"></i> Edit tampilan depan sekolah</h4><br>
                        <i class="alert alert-secondary" role="alert">
                            Edit Harus Satu Satu !!!
                        </i>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('profil.navbar.post') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$navbar->id}}">
                            
                            <div class="form-group">
                                <label>GAMBAR-1</label>
                                <input type="file" name="gambar1"  value="{{ $navbar->gambar1 }}" placeholder="Masukkan gambar1"  class="form-control @error('gambar1') is-invalid @enderror">

                                @error('gambar1')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            
                            <div class="form-group">
                                <label>GAMBAR-2</label>
                                <input type="file" name="gambar2"  value="{{ $navbar->gambar2 }}" placeholder="Masukkan gambar2"  class="form-control @error('gambar2') is-invalid @enderror">

                                @error('gambar2')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>GAMBAR-3</label>
                                <input type="file" name="gambar3"  value="{{ $navbar->gambar3 }}" placeholder="Masukkan gambar3"  class="form-control @error('gambar3') is-invalid @enderror">

                                @error('gambar3')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            
                            <div class="form-group">
                                <label>GAMBAR-4</label>
                                <input type="file" name="gambar4"  value="{{ $navbar->gambar4 }}" placeholder="Masukkan gambar4"  class="form-control @error('gambar4') is-invalid @enderror">

                                @error('gambar4')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                             
                            <div class="form-group">
                                <label>GAMBAR-5</label>
                                <input type="file" name="gambar5"  value="{{ $navbar->gambar5 }}" placeholder="Masukkan gambar5"  class="form-control @error('gambar5') is-invalid @enderror">

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