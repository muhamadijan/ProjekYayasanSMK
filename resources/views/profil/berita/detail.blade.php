@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Berita</h1>
        </div>
        <div class="section-body">
           
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-chalkboard-teacher"></i> Detail Berita</h4>
                </div>
                <div class="card-body">
                    <h5 class="text-center">{{$berita->judul}}</h5>
                    <center>
                        <img src="{{ asset('/image/'.$berita->gambar)}}" alt="" class="img img-thumbnail border-0 rounded-lg" width="300">
                    </center>
                    <p>{!! $berita->isi !!}</p>
                </div>
            </div>
        </div>
</div>
    </section>
</div>
@stop 