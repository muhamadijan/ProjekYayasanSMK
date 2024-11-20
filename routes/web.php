<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
  $sejarah = App\Models\Sejarah::paginate(2);
  $sarana = App\Models\Sarana::paginate(2);
  $sambutan = App\Models\Sambutan::paginate(2);
  $visi = App\Models\Visi::paginate(2);
  $strukturOrganisasi = App\Models\StrukturOrganisasi::paginate(2);
  $pesantren = App\Models\Pesantren::paginate(2);
  $smk = App\Models\Smk::paginate(2);
  $ma = App\Models\Ma::paginate(2);
  $mts = App\Models\Mts::paginate(2);
  $vidio = App\Models\Vidio::paginate(3);
  $galeri = App\Models\Galeri::paginate(3);
  $berita = App\Models\Berita::paginate(3);
  $kontak = App\Models\Kontak::all();
  $weblink = App\Models\Weblink::all();
  $tentang = App\Models\tentang::all();
  $logo = App\Models\Logo::all();
  $navbar = App\Models\Navbar::all();
  
  return view('welcome', [
      'galeri' => $galeri,
      'sambutan' => $sambutan,
      'tentang' => $tentang,
      'smk' => $smk,
      'ma' => $ma,
      'sarana' => $sarana,
      'visi' => $visi,
      'strukturOrganisasi' => $strukturOrganisasi,
      'mts' => $mts,
      'pesantren' => $pesantren,
      'vidio' => $vidio,
      'sejarah' => $sejarah,
      'navbar' => $navbar,
      'logo' => $logo,
      'kontak' => $kontak,
      'weblink' => $weblink,
      'berita' => $berita
  ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/templet', [ProfileController::class, 'templet'])->name('/templet');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//halaman welcome .
Route::get('/sambutan-kepala-yayasan',  [App\Http\Controllers\PageController::class, 'sambutan'])->name('sambutan-kepala-yayasan');
Route::get('/berita',  [App\Http\Controllers\PageController::class,'berita'])->name('berita');
Route::get('/sejarah-yayasan', [App\Http\Controllers\PageController::class,'sejarah'])->name('sejarah');
Route::get('/sarana-prasarana', [App\Http\Controllers\PageController::class,'sarana'])->name('sarana-prasarana');
Route::get('/video',  [App\Http\Controllers\PageController::class,'video'])->name('video');
Route::get('/kontak',  [App\Http\Controllers\PageController::class,'kontak'])->name('kontak');
Route::get('/weblink',  [App\Http\Controllers\PageController::class,'weblink'])->name('welcome');
Route::get('/visi-misi',  [App\Http\Controllers\PageController::class,'visiMisi'])->name('visi-misi');
Route::get('/struktur-organisasi',  [App\Http\Controllers\PageController::class,'strukturOrganisasi'])->name('struktur-organisasi');
Route::get('/photo',  [App\Http\Controllers\PageController::class,'galeri'])->name('/photo');




// Akun profil
Route::get('/akun/admin',[App\Http\Controllers\AdminController::class,'akunadmin'])->name('akun.admin.index');
Route::get('/akun/admin/create',  [App\Http\Controllers\AdminController::class,'akunadminAdd'])->name('akun/admin/create');    
Route::get('/akun/admin/edit/{id}',  [App\Http\Controllers\AdminController::class,'akunadminEdit'])->name('akun.admin.edit');
Route::post('/akun/admin/post',  [App\Http\Controllers\AdminController::class,'akunadminPost'])->name('akun.admin.post');
Route::delete('/akun/admin/index/delete/{id}',  [App\Http\Controllers\AdminController::class,'akunadminDelete'])->name('akun.admin.delete');

//nampilkan data siswa
Route::get('/siswa/latihan',[App\Http\Controllers\profilController::class,'siswa'])->name('siswa.latihan.index');

//visi misi
Route::get('/profil/visi-misi',[App\Http\Controllers\profilController::class,'visi'])->name('profil.visi-misi.index');
Route::get('/profil/visi-misi/create', [App\Http\Controllers\profilController::class,'visiCreate'])->name('profil/visi-misi/create');
Route::post('/profil/visi-misi/post',[App\Http\Controllers\profilController::class,'visiPost'])->name('profil.visi-misi.post');
Route::get('/profil/visi-misi/edit/{id}',[App\Http\Controllers\profilController::class,'visiEdit'])->name('profil.visi-misi.edit');
Route::delete('/profil/visi-misi/index/delete/{id}', [App\Http\Controllers\profilController::class,'visiDel'])->name('profil.visi-misi.delete');
Route::get('/profil/visi-misi/detail/{id}', [App\Http\Controllers\profilController::class,'visiDetail'])->name('profil.visi-misi.detail');


// sejarah yayasan
Route::get('/profil/sejarah',[App\Http\Controllers\profilController::class,'sejarah'])->name('profil.sejarah.index');
Route::get('/profil/sejarah/create', [App\Http\Controllers\profilController::class,'sejarahCreate'])->name('profil/sejarah/create');
Route::post('/profil/sejarah/post',[App\Http\Controllers\profilController::class,'sejarahPost'])->name('profil.sejarah.post');
Route::get('/profil/sejarah/edit/{id}',[App\Http\Controllers\profilController::class,'sejarahEdit'])->name('profil.sejarah.edit');
Route::delete('/profil/sejarah/index/delete/{id}', [App\Http\Controllers\profilController::class,'sejarahDel'])->name('profil.sejarah.delete');
Route::get('/profil/sejarah/detail/{id}', [App\Http\Controllers\profilController::class,'sejarahDetail'])->name('profil.sejarah.detail');

// tentang yayasan
Route::get('/profil/tentang',[App\Http\Controllers\profilController::class,'tentang'])->name('profil.tentang.index');
Route::get('/profil/tentang/create', [App\Http\Controllers\profilController::class,'tentangCreate'])->name('profil.tentang.create');
Route::post('/profil/sejara/post',[App\Http\Controllers\profilController::class,'tentangPost'])->name('profil.tentang.post');
Route::get('/profil/tentang/edit/{id}',[App\Http\Controllers\profilController::class,'tentangEdit'])->name('profil.tentang.edit');
Route::delete('/profil/tentang/index/delete/{id}', [App\Http\Controllers\profilController::class,'tentangDel'])->name('profil.tentang.delete');
Route::get('/profil/tentang/detail/{id}', [App\Http\Controllers\profilController::class,'tentangDetail'])->name('profil.tentang.detail');

//foto
Route::get('/multimedia/galeri', [App\Http\Controllers\AdminController::class,'galeriGet'])->name('multimedia.galeri.index');
Route::get('/multimedia/galeri/create', [App\Http\Controllers\AdminController::class,'galeriCreate'])->name('multimedia/galeri/create');
Route::get('/multimedia/galeri/edit/{id}', [App\Http\Controllers\AdminController::class,'galeriEdit'])->name('multimedia.galeri.edit');
Route::post('/multimedia/galeri-post',[App\Http\Controllers\AdminController::class,'galeriPost'])->name('multimedia.galeri.post');
Route::delete('/multimedia/galeri/index/delete/{id}',[App\Http\Controllers\AdminController::class,'galeriDel'])->name('multimedia/galeri.delete');


  // sarana yayasan
  Route::get('/profil/sarana',[App\Http\Controllers\profilController::class,'sarana'])->name('profil.sarana.index');
  Route::get('/profil/sarana/create', [App\Http\Controllers\profilController::class,'saranaCreate'])->name('profil/sarana/create');
  Route::post('/profil/sarana/post',[App\Http\Controllers\profilController::class,'saranaPost'])->name('profil.sarana.post');
  Route::get('/profil/sarana/edit/{id}',[App\Http\Controllers\profilController::class,'saranaEdit'])->name('profil.sarana.edit');
  Route::delete('/profil/sarana/index/delete/{id}', [App\Http\Controllers\profilController::class,'saranaDel'])->name('profil.sarana.delete');
  Route::get('/profil/sarana/detail/{id}', [App\Http\Controllers\profilController::class,'saranaDetail'])->name('profil.sarana.detail');
  
  //Kontak yayasan
  Route::get('/kontak/kontak-yayasan', [App\Http\Controllers\AdminController::class,'kontak'])->name('kontak.kontak-yayasan.index');
  Route::get('/kontak/kontak-yayasan/create', [App\Http\Controllers\AdminController::class,'kontakCreate'])->name('kontak/kontak-yayasan/create');
  Route::get('/kontak/kontak-yayasan/edit/{id}',[App\Http\Controllers\AdminController::class,'kontakEdit'])->name('kontak.kontak-yayasan.edit');
  Route::post('/kontak/kontak-yayasan-post', [App\Http\Controllers\AdminController::class,'kontakPost'])->name('kontak.kontak-yayasan.post');
  Route::delete('/kontak/kontak-yayasan/index/delete/{id}',[App\Http\Controllers\AdminController::class,'kontakDel'])->name('kontak.kontak-yayasan.delete');
  Route::get('/kontak/kontak-yayasan/detail/{id}', [App\Http\Controllers\AdminController::class,'kontakDetail'])->name('kontak.kontak-yayasan.detail');
 
 // Struktur Organisasi
 Route::get('/profil/struktur-organisasi',[App\Http\Controllers\profilController::class,'strukturOrganisasi'])->name('profil.struktur-organisasi.index');
 Route::get('/profil/struktur-organisasi/create',[App\Http\Controllers\profilController::class,'strukturCreate'])->name('profil/struktur-organisasi/create');
 Route::get('/profil/struktur-organisasi/edit/{struktur}',[App\Http\Controllers\profilController::class,'strukturEdit'])->name('profil.struktur-organisasi.edit');
 Route::post('/profil/struktur-organisasi/post',[App\Http\Controllers\profilController::class,'strukturPost'])->name('profil.struktur-organisasi.post');
 Route::delete('/profil/struktur-organisasi/index/delete/{id}',[App\Http\Controllers\profilController::class,'strukturDelete'])->name('/profil/struktur-organisasi/delete');

  
  //weblink
  Route::get('/kontak/weblink', [App\Http\Controllers\profilController::class,'weblink'])->name('kontak.weblink.index');
  Route::get('/kontak/weblink/create', [App\Http\Controllers\profilController::class,'weblinkCreate'])->name('kontak/weblink/create');
  Route::get('/kontak/weblink/edit/{id}',[App\Http\Controllers\profilController::class,'weblinkEdit'])->name('kontak.weblink.edit');
  Route::post('/kontak/weblink-post', [App\Http\Controllers\profilController::class,'weblinkPost'])->name('kontak.weblink.post');
  Route::delete('/kontak/weblink/index/delete/{id}',[App\Http\Controllers\profilController::class,'weblinkDel'])->name('kontak.weblink.delete');
  Route::get('/kontak/weblink/detail/{id}', [App\Http\Controllers\profilController::class,'weblinkDetail'])->name('kontak.weblink.detail');

 //berita
 Route::get('/profil/berita',[App\Http\Controllers\AdminController::class,'beritaGet'])->name('profil.berita.index');
 Route::get('/profil/berita/create', [App\Http\Controllers\AdminController::class,'beritaCreate'])->name('profil/berita/create');
 Route::post('/profil/berita-post',[App\Http\Controllers\AdminController::class,'beritaPost'])->name('profil.berita.post');
 Route::get('/profil/berita/edit/{id}',[App\Http\Controllers\AdminController::class,'beritaEdit'])->name('profil.berita.edit');
 Route::delete('/profil/berita/index/delete/{id}', [App\Http\Controllers\AdminController::class,'beritaDel'])->name('profil.berita.delete');
 Route::get('/profil/berita/detail/{id}',  [App\Http\Controllers\AdminController::class,'beritaDetail'])->name('profil.berita.detail');

 // vidio
Route::get('/profil/vidio',[App\Http\Controllers\profilController::class,'vidio'])->name('profil.vidio.index');
Route::get('/profil/vidio/create',[App\Http\Controllers\profilController::class,'vidioCreate'])->name('profil/vidio/create');
Route::get('/profil/vidio/edit/{iden}',[App\Http\Controllers\profilController::class,'vidioEdit'])->name('profil.vidio.edit');
Route::post('/profil/vidio/post',[App\Http\Controllers\profilController::class,'vidioPost'])->name('profil.vidio.post');
Route::delete('/profil/vidio/index/delete/{id}', [App\Http\Controllers\profilController::class,'vidioDel'])->name('profil.vidio.delete');
Route::get('/profil/vidio/detail/{id}', [App\Http\Controllers\profilController::class,'vidioDetail'])->name('profil.vidio.detail');

//ma
Route::get('/lembaga-pendidikan/ma',[App\Http\Controllers\AdminController::class,'maGet'])->name('lembaga-pendidikan.ma.index');
Route::get('/lembaga-pendidikan/ma/create', [App\Http\Controllers\AdminController::class,'maCreate'])->name('lembaga-pendidikan/ma/create');
Route::post('/lembaga-pendidikan/ma-post',[App\Http\Controllers\AdminController::class,'maPost'])->name('lembaga-pendidikan.ma.post');
Route::get('/lembaga-pendidikan/ma/edit/{id}',[App\Http\Controllers\AdminController::class,'maEdit'])->name('lembaga-pendidikan.ma.edit');
Route::delete('/lembaga-pendidikan/ma/index/delete/{id}', [App\Http\Controllers\AdminController::class,'maDel'])->name('lembaga-pendidikan.ma.delete');
Route::get('/lembaga-pendidikan/ma/detail/{id}',  [App\Http\Controllers\AdminController::class,'maDetail'])->name('lembaga-pendidikan.ma.detail');

//mts
Route::get('/lembaga-pendidikan/mts',[App\Http\Controllers\AdminController::class,'mtsGet'])->name('lembaga-pendidikan.mts.index');
Route::get('/lembaga-pendidikan/mts/create', [App\Http\Controllers\AdminController::class,'mtsCreate'])->name('lembaga-pendidikan/mts/create');
Route::post('/lembaga-pendidikan/mts-post',[App\Http\Controllers\AdminController::class,'mtsPost'])->name('lembaga-pendidikan.mts.post');
Route::get('/lembaga-pendidikan/mts/edit/{id}',[App\Http\Controllers\AdminController::class,'mtsEdit'])->name('lembaga-pendidikan.mts.edit');
Route::delete('/lembaga-pendidikan/mts/index/delete/{id}', [App\Http\Controllers\AdminController::class,'mtsDel'])->name('lembaga-pendidikan.mts.delete');
Route::get('/lembaga-pendidikan/mts/detail/{id}',  [App\Http\Controllers\AdminController::class,'mtsDetail'])->name('lembaga-pendidikan.mts.detail');

//smk
Route::get('/lembaga-pendidikan/smk',[App\Http\Controllers\AdminController::class,'smkGet'])->name('lembaga-pendidikan.smk.index');
Route::get('/lembaga-pendidikan/smk/create', [App\Http\Controllers\AdminController::class,'smkCreate'])->name('lembaga-pendidikan/smk/create');
Route::post('/lembaga-pendidikan/smk-post',[App\Http\Controllers\AdminController::class,'smkPost'])->name('lembaga-pendidikan.smk.post');
Route::get('/lembaga-pendidikan/smk/edit/{id}',[App\Http\Controllers\AdminController::class,'smkEdit'])->name('lembaga-pendidikan.smk.edit');
Route::delete('/lembaga-pendidikan/smk/index/delete/{id}', [App\Http\Controllers\AdminController::class,'smkDel'])->name('lembaga-pendidikan.smk.delete');
Route::get('/lembaga-pendidikan/smk/detail/{id}',  [App\Http\Controllers\AdminController::class,'smkDetail'])->name('lembaga-pendidikan.smk.detail');

//pesantren
Route::get('/lembaga-pendidikan/pesantren',[App\Http\Controllers\AdminController::class,'pesantrenGet'])->name('lembaga-pendidikan.pesantren.index');
Route::get('/lembaga-pendidikan/pesantren/create', [App\Http\Controllers\AdminController::class,'pesantrenCreate'])->name('lembaga-pendidikan/pesantren/create');
Route::post('/lembaga-pendidikan/pesantren-post',[App\Http\Controllers\AdminController::class,'pesantrenPost'])->name('lembaga-pendidikan.pesantren.post');
Route::get('/lembaga-pendidikan/pesantren/edit/{id}',[App\Http\Controllers\AdminController::class,'pesantrenEdit'])->name('lembaga-pendidikan.pesantren.edit');
Route::delete('/lembaga-pendidikan/pesantren/index/delete/{id}', [App\Http\Controllers\AdminController::class,'pesantrenDel'])->name('lembaga-pendidikan.pesantren.delete');
Route::get('/lembaga-pendidikan/pesantren/detail/{id}',  [App\Http\Controllers\AdminController::class,'pesantrenDetail'])->name('lembaga-pendidikan.pesantren.detail');

//Data logo yayasan
Route::get('/profil/logo',[App\Http\Controllers\AdminController::class,'logo'])->name('profil.logo.index');
Route::get('/profil/logo/create',[App\Http\Controllers\AdminController::class,'logoCreate'])->name('profil/logo/create');
Route::get('/profil/logo/edit/{logo}',[App\Http\Controllers\AdminController::class,'logoEdit'])->name('profil.logo.edit');
Route::post('/profil/logo/post',[App\Http\Controllers\AdminController::class,'logoPost'])->name('profil.logo.post');
Route::delete('/profil/logo/index/delete/{id}', [App\Http\Controllers\AdminController::class,'logoDel'])->name('profil.logo.delete');


//Data Gambar depan yayasan
Route::get('/profil/navbar',[App\Http\Controllers\AdminController::class,'navbar'])->name('profil.navbar.index');
Route::get('/profil/navbar/create',[App\Http\Controllers\AdminController::class,'navbarCreate'])->name('profil/navbar/create');
Route::get('/profil/navbar/edit/{logo}',[App\Http\Controllers\AdminController::class,'navbarEdit'])->name('profil.navbar.edit');
Route::post('/profil/navbar/post',[App\Http\Controllers\AdminController::class,'navbarPost'])->name('profil.navbar.post');
Route::delete('/profil/navbar/index/delete/{id}', [App\Http\Controllers\AdminController::class,'navbarDel'])->name('/profil.navbar.delete');

 // sambutan Kepala yayasan
 Route::get('/profil/kepala-yayasan',[App\Http\Controllers\profilController::class,'sambutan'])->name('profil.kepala-yayasan.index');
 Route::get('/profil/kepala-yayasan/create',[App\Http\Controllers\profilController::class,'sambutanCreate'])->name('profil/kepala-yayasan/create');
 Route::get('/profil/kepala-yayasan/edit/{sarana}',[App\Http\Controllers\profilController::class,'sambutanEdit'])->name('profil.kepala-yayasan.edit');
 Route::post('/profil/kepala-yayasan/post',[App\Http\Controllers\profilController::class,'sambutanPost'])->name('profil.kepala-yayasan.post');
 Route::delete('/profil/kepala-yayasan/index/delete/{id}', [App\Http\Controllers\profilController::class,'sambutanDel'])->name('profil.kepala-yayasan');
 Route::get('/profil/kepala-yayasan/detail/{id}', [App\Http\Controllers\profilController::class,'sambutanDetail'])->name('profil.kepala-yayasan.detail');




require __DIR__.'/auth.php';

