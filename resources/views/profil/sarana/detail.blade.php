@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Sarana dan Perasarana</h1>
        </div>
        <div class="section-body">
        
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-history"></i> Detail Sarana dan Perasarana</h4>
                </div>
                <body>
            <table>
        <tr>
              <th scope="col" style="text-align: center;width: 6%">NO.</th>
            <th>URAIAN</th>
            <th>JUMLAH YANG ADA</th>
            <th>KONDISI</th>
            <th>JUMLAH YANG DI PERLUKAN</th>
            <th>KETERANGAN</th>
            </tr>
        <?php $nomor = 1; ?>
        <tr>
            
        <td scope="row" style="text-align: center">{{$nomor++}}</td>   
        <td>{{$sarana->uraian}}</td>
        <td>{{$sarana->jumlah_ada}}</td>
        <td>{{$sarana->kondisi}}</td>
        <td>{{$sarana->jumlah_yg_diperlukan}}</td>
        <td>{!! $sarana->keterangan !!}</td>
        </tr>
        
    </table>
            </div>
        </div>
</div>
    </section>
</div>
<style>
        table {
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
        }
        th {
            background-color: #32a5fc;
            color: white;
        }
    </style>

@stop 