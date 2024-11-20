@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail weblink</h1>
        </div>
        <div class="section-body">
            <div class="mb-3">
                <ol class="breadcrumb bg-primary">
                    <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-white text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('kontak.weblink.index')}}" class="text-white text-decoration-none">Kelola Weblink</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Detail Kontak Sekolah</a></li>
                </ol>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-chalkboard-teacher"></i> Detail Kontak Sekolah</h4>
                </div>
                <div class="card-body">
                    <center>
                        
                    <iframe src="{{$weblink->yt}}" width="300" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </center>  <br>     
                    <a href="{!! $weblink->fb !!}">kelik link Fecebook</a>
                  <br>
                  <a href="{!! $weblink->ig !!}">kelik link Instagram</a>
                 
                   
                    
                </div>
            </div>
        </div>
</div>
    </section>
</div>

@stop 