@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Kontak yayasan</h1>
        </div>
        <div class="section-body">
          
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-chalkboard-teacher"></i> Detail Kontak yayasan</h4>
                </div>
                <div class="card-body">
                    <center>
                    <iframe src="{{$kontak->maps}}" width="250" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </center>
                    <p>{!! $kontak->telp !!}</p>
                    <p>{!! $kontak->fax !!}</p>
                    <p>{!! $kontak->email !!}</p>
                </div>
            </div>
        </div>
</div>
    </section>
</div>

@stop 