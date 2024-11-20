@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Sambutan Kepala yayasan</h1>
        </div>
        <div class="section-body">
          
            <div class="card">
                <div class="card-header">
                    <h4><i class="far fa-address-card"></i> Detail Sambutan Kepala yayasan</h4>
                </div>
                <div class="card-body">
                    <h5 class="text-center">{{$sambutan->judul}}</h5>
                    <center>
                        <img src="{{ asset('/image/'.$sambutan->gambar)}}" alt="" class="img img-thumbnail border-0 rounded-lg" width="300">
                    </center>
                    <p>{!! $sambutan->isi !!}</p>
                </div>
            </div>
        </div>
</div>
    </section>
</div>

@stop 