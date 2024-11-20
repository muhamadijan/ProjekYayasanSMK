@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Tentang</h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('profil.tentang.post', $tentang->id) }}" method="POST" enctype="multipart/form-data"> 
                        @csrf
                    
                        
                        <input type="hidden" name="id" value="{{ $tentang->id }}">
                        
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" placeholder="Masukkan Judul" value="{{ old('judul', $tentang->judul) }}">
                            @error('judul')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="isi">Isi</label>
                            <textarea class="form-control alamat @error('isi') is-invalid @enderror" name="isi" placeholder="Masukkan Isi tentang" rows="10">{{ old('isi', $tentang->isi) }}</textarea>
                            @error('isi')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="siswa">Jumlah Siswa</label>
                            <input type="number" class="form-control @error('siswa') is-invalid @enderror" name="siswa" placeholder="Masukkan Jumlah Siswa" value="{{ old('siswa', $tentang->siswa) }}">
                            @error('siswa')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="tahun_berdiri">Tahun Berdiri</label>
                            <input type="text" class="form-control @error('tahun_berdiri') is-invalid @enderror" name="tahun_berdiri" placeholder="Masukkan Tahun Berdiri" value="{{ old('tahun_berdiri', $tentang->tahun_berdiri) }}">
                            @error('tahun_berdiri')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="guru_karyawan">Jumlah Guru dan Karyawan</label>
                            <input type="number" class="form-control @error('guru_karyawan') is-invalid @enderror" name="guru_karyawan" placeholder="Masukkan Jumlah Guru dan Karyawan" value="{{ old('guru_karyawan', $tentang->guru_karyawan) }}">
                            @error('guru_karyawan')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="lembaga">Jumlah Lembaga</label>
                            <input type="number" class="form-control @error('lembaga') is-invalid @enderror" name="lembaga" placeholder="Masukkan Jumlah Lembaga" value="{{ old('lembaga', $tentang->lembaga) }}">
                            @error('lembaga')
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
        selector: 'textarea.alamat',
        height: 300
    });
</script>
@stop
