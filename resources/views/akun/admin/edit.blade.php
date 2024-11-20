@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
                <h1>Edit Akun</h1>
            </div>

            <div class="section-body">
                <div class="mb-3">
                    <ol class="breadcrumb bg-primary">
                        <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('akun.admin.index')}}" class="text-white text-decoration-none">Kelola Akun admin</a></li>
                        <li class="breadcrumb-item"><a href="" class="text-white text-decoration-none">Edit Akun admin</a></li>
                    </ol>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-tags"></i> Edit Akun admin</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('akun.admin.post') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$akun->id}}">
                            <div class="form-group">
                                <label>NAMA</label>
                                <input type="text" name="name" value="{{$akun->name}}" placeholder="Masukkan Nama Akun" class="form-control @error('name') is-invalid @enderror">

                                @error('name')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                           
                            <div class="form-group">
                                <label>EMAIL</label>
                                <input type="email" name="email" value="{{$akun->email}}" placeholder="Masukkan Email" class="form-control @error('email') is-invalid @enderror">

                                @error('email')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>PASSWORD</label>
                                <input type="password" name="password" placeholder="Masukkan Password Baru" class="form-control @error('password') is-invalid @enderror">

                                @error('password')
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
</div>
@stop