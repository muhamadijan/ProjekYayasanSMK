@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
                <h1>Tambah Kontak yayasan</h1>
            </div>

            <div class="section-body">
             
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-tags"></i> Tambah Kontak yayasan</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('kontak.kontak-yayasan.post') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label>Maps</label>
                                <input type="text" name="maps" value="{{ old('maps') }}" placeholder="Masukkan Maps" class="form-control @error('maps') is-invalid @enderror">

                                @error('maps')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Telp</label>
                                <input type="text" name="telp" value="{{ old('telp') }}" placeholder="Masukkan Telp" class="form-control @error('telp') is-invalid @enderror">

                                @error('telp')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Fax</label>
                                <input type="text" name="fax" value="{{ old('fax') }}" placeholder="Masukkan  Fax" class="form-control @error('fax') is-invalid @enderror">

                                @error('fax')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" value="{{ old('email') }}" placeholder="Masukkan  Email" class="form-control @error('email') is-invalid @enderror">

                                @error('email')
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