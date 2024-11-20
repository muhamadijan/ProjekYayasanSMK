@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
                <h1>Tambah weblink</h1>
            </div>

            <div class="section-body">
            
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-tags"></i> Tambah weblink</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('kontak.weblink.post') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label>fecebook</label>
                                <input type="text" name="fb" value="{{ old('maps') }}" placeholder="Masukkan link fecebook" class="form-control @error('fb') is-invalid @enderror">

                                @error('fb')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>instagram</label>
                                <input type="text" name="ig" value="{{ old('ig') }}" placeholder="Masukkan link instagram" class="form-control @error('ig') is-invalid @enderror">

                                @error('ig')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>youtube</label>
                                <input type="text" name="yt" value="{{ old('fax') }}" placeholder="Masukkan  link youtube" class="form-control @error('yt') is-invalid @enderror">

                                @error('yt')
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
        </section>
    </div>
@stop