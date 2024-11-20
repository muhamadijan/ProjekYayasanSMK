@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
                <h1>Edit VIsi Misi</h1>
            </div>

            <div class="section-body">
              
                </div>

                <div class="card">
                 

                    <div class="card-body">
                        <form action="{{ route('profil.visi-misi.post') }}" method="POST" enctype="multipart/form-data"> 
                            @csrf
                            <input type="hidden" name="id" value="{{$visi->id}}">

                            <div class="form-group">
                                <label for=""> Visi</label>
                                <textarea class="form-control alamat @error('isi') is-invalid @enderror" name="visi" placeholder="Masukkan visi" rows="10">{!! $visi->visi !!}</textarea>
                                @error('isi')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                              


                            <div class="form-group">
                                <label for=""> MISI</label>
                                <textarea class="form-control alamat @error('isi') is-invalid @enderror" name="misi" placeholder="Masukkan Misi" rows="10">{!! $visi->misi !!}</textarea>
                                @error('isi')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for=""> TUJUAN</label>
                                <textarea class="form-control alamat @error('isi') is-invalid @enderror" name="tujuan" placeholder="Masukkan Misi" rows="10">{!! $visi->tujuan !!}</textarea>
                                @error('tujuan')
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