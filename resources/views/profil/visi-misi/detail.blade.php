@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Visi Misi</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-universal-access"></i> Detail Visi Misi</h4>
                </div>
                <div class="card-body">
                    <p>Visi</p>
                    <p>{!! $visi->visi !!}</p>
                    Misi
                    <p>{!! $visi->misi !!}</p>
                    TUJUAN
                    <p>{!! $visi->tujuan !!}</p>
                </div>
            </div>
        </div>
</div>
    </section>
</div>

@stop 