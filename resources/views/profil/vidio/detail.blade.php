@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Vidio</h1>
        </div>
        <div class="section-body">
            
            <div class="card">
                <div class="card-header">
                    <h4><i class="far fa-address-card"></i> Detail Vidio</h4>
                </div>
                <div class="card-body">
                    <h5 class="text-center">{{$vidio->judul}}</h5>
                    <center>
                        <video width="320" height="240" controls>
                            <source src="{{ asset('/image/'.$vidio->video)}}" type="video/mp4">
                        </video>
                    </center>
                    <p>{!! $vidio->isi !!}</p>
                </div>
            </div>
        </div>
</div>
    </section>
</div>

@stop 