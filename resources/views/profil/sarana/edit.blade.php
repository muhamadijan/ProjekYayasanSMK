@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
                <h1>Edit Sarana dan Perasarana</h1>
            </div>

            <div class="section-body">
            

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-tags"></i> Edit Sarana dan Perasarana</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('profil.sarana.post') }}" method="POST" enctype="multipart/form-data"> 
                            @csrf
                            <input type="hidden" name="id" value="{{$sarana->id}}">
                            <div class="form-group">
                                <label> URAIAN</label>
                                <input type="text" name="uraian" value="{{$sarana->uraian}}" placeholder="Masukkan uraian" class="form-control @error('uraian') is-invalid @enderror">

                                @error('uraian')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label> JUMLAH YANG ADA</label>
                                <input type="text" name="jumlah_ada" value="{{$sarana->jumlah_ada}}" placeholder="Masukkan jumlah yang ada" class="form-control @error('jumlah_ada') is-invalid @enderror">

                                @error('jumlah_ada')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label> KONDISI</label>
                                <input type="text" name="kondisi" value="{{$sarana->kondisi}}" placeholder="Masukkan kondisi" class="form-control @error('kondisi') is-invalid @enderror">

                                @error('kondisi')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label> JUMLAH YANG DI PERLUKAN</label>
                                <input type="text" name="jumlah_yg_diperlukan" value="{{$sarana->jumlah_yg_diperlukan}}" placeholder="Masukkan jumlah yang di perlukan" class="form-control @error('jumlah_yg_diperlukan') is-invalid @enderror">

                                @error('jumlah_yg_diperlukan')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                       

                            <div class="form-group">
                                <label for="">KETERANGAN </label>
                                <textarea class="form-control alamat @error('isi') is-invalid @enderror" name="keterangan" placeholder="Masukkan Isi keterangan" rows="10">{!! $sarana->keterangan !!}</textarea>
                                @error('isi')
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
</div>
        </section>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.12/tinymce.min.js"></script>
    <script>
        var editor_config = {
            selector: "textarea.alamat",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
        };

        tinymce.init({
            selector: 'textarea',
            height: 300
        });
    </script>
@stop