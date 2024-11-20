@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Struktur Organisasi</h1>
        </div>
        <div class="section-body">
           
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-history"></i> Detail Struktur Organisasi</h4>
                </div>
                <div class="card-body">
                    <h5 class="text-center">{{$struktur->judul}}</h5>
                    <center>
                        <img src="{{ asset('/image/'.$struktur->gambar)}}" alt="" class="img img-thumbnail border-0 rounded-lg" width="300">
                    </center>
                    <p>{!! $sejarah->isi !!}</p>
                </div>
            </div>
        </div>
</div>
    </section>
</div>

@stop 