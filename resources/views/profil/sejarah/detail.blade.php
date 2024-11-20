@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Sejarah</h1>
        </div>
        <div class="section-body">
           
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-history"></i> Detail Sejarah</h4>
                </div>
                <div class="card-body">
                        <img src="{{ asset('/image/'.$sejarah->gambar)}}" alt="" class="img img-thumbnail border-0 rounded-lg" width="300">
                    <p>{!! $sejarah->isi !!}</p>
                </div>
            </div>
        </div>
</div>
    </section>
</div>

@stop 