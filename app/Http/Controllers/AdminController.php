<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\kontak;
use App\Models\ma;
use App\Models\mts;
use App\Models\pesantren;
use App\Models\smk;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Berita;
use App\Models\logo;
use App\Models\navbar;
class AdminController extends Controller
{
  //nampilkan data siswa
  public function siswa()
  {
    return view('siswa.latihan.index');
  }
  // Akun
public function akunadmin()
{
  $akuns = User::all();
  return view('akun.admin.index', compact('akuns'));
}

public function akunadminAdd()
{
  return view('akun/admin/create');
}

public function akunadminEdit($id)
{
  $akun = User::find($id);
  return view('akun.admin.edit', compact('akun'))->with(['success' => 'Data Berhasil Di Edit']);
}


public function akunadminPost(Request $req)
{
  $id = $req->get('id');
  if($id){
    $akun = User::find($id);
  }else{
    $akun = new User;
  }
  $akun->name = $req->name;
  $akun->email = $req->email;
  $akun->password = bcrypt($req->password);
  $akun->save();


  return redirect()->route('akun.admin.index')->with(['success' => 'Data Berhasil Disimpan!']);
}

public function akunadminDelete($id)
{
  $akun = User::findOrFail($id);
  $akun->delete();

    if($akun){
        return response()->json([
            'status' => 'success'
        ]);
    }else{
        return response()->json([
            'status' => 'error'
        ]);
    }
}

//gelar
public function galeriGet()
{
    $galeris = Galeri::all();
    return view('multimedia.galeri.index', compact('galeris'));
}
public function galeriCreate()
{
  return view('multimedia/galeri/create');
}

public function galeriEdit($id)
{
  $galeri = Galeri::find($id);
  return view('multimedia.galeri.edit', compact('galeri'));
}

public function galeriPost(Request $req)
{
    $id = $req->get('id');
    if($id){
        $galeri = Galeri::find($id);
    }else{
        $galeri = new Galeri;
    }

    if($req->gamar){
      if($req->hasFile('gamar')){
        $foto = $req->file('gamar');
        $filename = time() . '.' . $foto->getClientOriginalExtension();
        $destinationPath = 'image/';                
        $foto->move($destinationPath, $filename);
        }
        $galeri->gamar = $filename;
    }

    $galeri->judul = $req->judul;
    $galeri->save();
    return redirect()->route('multimedia.galeri.index')->with(['success' => 'Data Berhasil Di Simpan']);
}

public function galeriDel($id)
{
  $galeri = Galeri::find($id);
  $galeri->delete();

    if($galeri){
        return response()->json([
            'status' => 'success'
        ]);
    }else{
        return response()->json([
            'status' => 'error'
        ]);
    }
}


//kontak yayasan
public function kontak()
{
    $kontak = kontak::all();
    return view('kontak.kontak-yayasan.index', compact('kontak'));
}
public function kontakCreate()
{
  return view('kontak/kontak-yayasan/create');
}
public function kontakDetail($id)
{
  $kontak = kontak::find($id);
  return view('kontak/kontak-yayasan/detail', compact('kontak'));
}

public function kontakEdit($id)
{
  $kontak = kontak::find($id);
  return view('kontak.kontak-yayasan.edit', compact('kontak'));
}

public function kontakPost(Request $req)
{
    $id = $req->get('id');
    if($id)
    {
        $kontak = kontak::find($id);
    }else
    {
        $kontak = new kontak;
    }
    $kontak->maps = $req->maps;
    $kontak->telp = $req->telp;
    $kontak->fax = $req->fax;
    $kontak->email = $req->email;
    $kontak->save();
    return redirect()->route('kontak.kontak-yayasan.index')->with(['success' => 'Data Berhasil Di Simpan']);
}
public function kontakDel($id)
{
$kontak = kontak::find($id);
$kontak->delete();

  if($kontak){
      return response()->json([
          'status' => 'success'
      ]);
  }else{
      return response()->json([
          'status' => 'error'
      ]);
  }
}



//berita
public function beritaGet()
{
    $beritas = Berita::all();
    return view('profil.berita.index', ['beritas' => $beritas]);
}

public function beritaCreate()
{
  return view('profil/berita/create');
}

public function beritaDetail($id)
{
  $berita = Berita::find($id);
  return view('profil.berita.detail', compact('berita'));
}

public function beritaEdit($id)
{
  $berita = Berita::find($id);
  return view('profil.berita.edit', compact('berita'));
}

public function beritaPost(Request $req)
{
    $id = $req->get('id');
    if($id){
        $berita = Berita::find($id);
    }else{
        $berita = new Berita;
    }
    if($req->gambar){
      if($req->hasFile('gambar')){
        $foto = $req->file('gambar');
        $filename = time() . '.' . $foto->getClientOriginalExtension();
        $destinationPath = 'image/';              
         $foto->move($destinationPath, $filename);
        }
        $berita->gambar = $filename;
    }

    $berita->judul = $req->judul;
    $berita->isi = $req->isi;
    $berita->save();
    return redirect()->route('profil.berita.index')->with(['success' => 'Data Berhasil Di Simpan']);
}

public function beritaDel($id) {
  $berita = Berita::find($id);
  $berita->delete();

  if($berita){
    return response()->json([
        'status' => 'success'
    ]);
}else{
    return response()->json([
        'status' => 'error'
    ]);
}
}

//pesantren
public function pesantrenGet()
{
    $pesantrens = pesantren::all();
    return view('lembaga-pendidikan.pesantren.index', ['pesantrens' => $pesantrens]);
}

public function pesantrenCreate()
{
  return view('lembaga-pendidikan/pesantren/create');
}

public function pesantrenDetail($id)
{
  $pesantren = pesantren::find($id);
  return view('lembaga-pendidikan.pesantren.detail', compact('pesantren'));
}

public function pesantrenEdit($id)
{
  $pesantren = pesantren::find($id);
  return view('lembaga-pendidikan.pesantren.edit', compact('pesantren'));
}

public function pesantrenPost(Request $req)
{
    $id = $req->get('id');
    if($id){
        $pesantren = pesantren::find($id);
    }else{
        $pesantren = new pesantren;
    }
    if($req->gambar){
      if($req->hasFile('gambar')){
        $foto = $req->file('gambar');
        $filename = time() . '.' . $foto->getClientOriginalExtension();
        $destinationPath = 'image/';              
         $foto->move($destinationPath, $filename);
        }
        $pesantren->gambar = $filename;
    }

    $pesantren->judul = $req->judul;
    $pesantren->isi = $req->isi;
    $pesantren->link_web = $req->link_web;
    $pesantren->save();
    return redirect()->route('lembaga-pendidikan.pesantren.index')->with(['success' => 'Data Berhasil Di Simpan']);
}

public function pesantrenDel($id) {
  $pesantren = pesantren::find($id);
  $pesantren->delete();

  if($pesantren){
    return response()->json([
        'status' => 'success'
    ]);
}else{
    return response()->json([
        'status' => 'error'
    ]);
}
}

//smk
public function smkGet()
{
    $smk = smk::all();
    return view('lembaga-pendidikan.smk.index', ['smk' => $smk]);
}

public function smkCreate()
{
  return view('lembaga-pendidikan/smk/create');
}

public function smkDetail($id)
{
  $smk = smk::find($id);
  return view('lembaga-pendidikan.smk.detail', compact('smk'));
}

public function smkEdit($id)
{
  $smk = smk::find($id);
  return view('lembaga-pendidikan.smk.edit', compact('smk'));
}

public function smkPost(Request $req)
{
    $id = $req->get('id');
    if($id){
        $smk = smk::find($id);
    }else{
        $smk = new smk;
    }
    if($req->gambar){
      if($req->hasFile('gambar')){
        $foto = $req->file('gambar');
        $filename = time() . '.' . $foto->getClientOriginalExtension();
        $destinationPath = 'image/';              
         $foto->move($destinationPath, $filename);
        }
        $smk->gambar = $filename;
    }

    $smk->judul = $req->judul;
    $smk->isi = $req->isi;
    $smk->link_web = $req->link_web;
    $smk->save();
    return redirect()->route('lembaga-pendidikan.smk.index')->with(['success' => 'Data Berhasil Di Simpan']);
}

public function smkDel($id) {
  $smk = smk::find($id);
  $smk->delete();

  if($smk){
    return response()->json([
        'status' => 'success'
    ]);
}else{
    return response()->json([
        'status' => 'error'
    ]);
}
}

//ma
public function maGet()
{
    $mas = ma::all();
    return view('lembaga-pendidikan.ma.index', ['mas' => $mas]);
}

public function maCreate()
{
  return view('lembaga-pendidikan/ma/create');
}

public function maDetail($id)
{
  $ma = ma::find($id);
  return view('lembaga-pendidikan.ma.detail', compact('ma'));
}

public function maEdit($id)
{
  $ma = ma::find($id);
  return view('lembaga-pendidikan.ma.edit', compact('ma'));
}

public function maPost(Request $req)
{
    $id = $req->get('id');
    if($id){
        $ma = ma::find($id);
    }else{
        $ma = new ma;
    }
    if($req->gambar){
      if($req->hasFile('gambar')){
        $foto = $req->file('gambar');
        $filename = time() . '.' . $foto->getClientOriginalExtension();
        $destinationPath = 'image/';              
         $foto->move($destinationPath, $filename);
        }
        $ma->gambar = $filename;
    }

    $ma->judul = $req->judul;
    $ma->isi = $req->isi;
    $ma->link_web = $req->link_web;
    $ma->save();
    return redirect()->route('lembaga-pendidikan.ma.index')->with(['success' => 'Data Berhasil Di Simpan']);
}

public function maDel($id) {
  $ma = ma::find($id);
  $ma->delete();

  if($ma){
    return response()->json([
        'status' => 'success'
    ]);
}else{
    return response()->json([
        'status' => 'error'
    ]);
}
}

//mts
public function mtsGet()
{
    $mts = mts::all();
    return view('lembaga-pendidikan.mts.index', ['mts' => $mts]);
}

public function mtsCreate()
{
  return view('lembaga-pendidikan/mts/create');
}

public function mtsDetail($id)
{
  $mts = mts::find($id);
  return view('lembaga-pendidikan.mts.detail', compact('mts'));
}

public function mtsEdit($id)
{
  $mts = mts::find($id);
  return view('lembaga-pendidikan.mts.edit', compact('mts'));
}

public function mtsPost(Request $req)
{
    $id = $req->get('id');
    if($id){
        $mts = mts::find($id);
    }else{
        $mts = new mts;
    }
    if($req->gambar){
      if($req->hasFile('gambar')){
        $foto = $req->file('gambar');
        $filename = time() . '.' . $foto->getClientOriginalExtension();
        $destinationPath = 'image/';              
         $foto->move($destinationPath, $filename);
        }
        $mts->gambar = $filename;
    }

    $mts->judul = $req->judul;
    $mts->isi = $req->isi;
    $mts->link_web = $req->link_web;
    $mts->save();
    return redirect()->route('lembaga-pendidikan.mts.index')->with(['success' => 'Data Berhasil Di Simpan']);
}

public function mtsDel($id) {
  $mts = mts::find($id);
  $mts->delete();

  if($mts){
    return response()->json([
        'status' => 'success'
    ]);
}else{
    return response()->json([
        'status' => 'error'
    ]);
}
}



               // logo sekolah

               public function logo()
               {
                   $logo = logo::all();
                   return view('profil.logo.index', ['logo' => $logo]);
               }
           
               public function logoCreate()
               {
                 return view('profil/logo/create');
               }
             
               public function logoEdit($id)
               {
                 $logo = logo::find($id);
                 return view('profil.logo.edit', compact('logo'));
               }
           
               public function logoPost(Request $req)
                 {
                     $id = $req->get('id');
                     if($id){
                         $logo = logo::find($id);
                     }else{
                         $logo = new logo;
                     }
                     if($req->logo){
                     if($req->hasFile('logo')){
                       $foto = $req->file('logo');
                       $filename = 'satu-'.time() . '.' . $foto->getClientOriginalExtension();
                       $destinationPath = 'image/';              
                         $foto->move($destinationPath, $filename);
                       }
                       $logo->logo = $filename;
                   }

                  if($req->icon){
                  if($req->hasFile('icon')){
                    $foto = $req->file('icon');
                    $filename = 'dua-'.time() . '.' . $foto->getClientOriginalExtension();
                    $destinationPath = 'image/';              
                      $foto->move($destinationPath, $filename);
                    }
                    $logo->icon = $filename;
                 }

                      $logo->nama = $req->nama;
                      $logo->isi = $req->isi;
                      $logo->save();
                   return redirect()->route('profil.logo.index')->with(['success' => 'Data Berhasil Di Simpan']);
               }
           
               public function logoDel($id) {
                  $logo = logo::find($id);
                  $logo->delete();
                 
                 return redirect('/profil/logo');
           }
           

             // Tampilan Depan sekolah

             public function navbar()
             {
                 $navbar = navbar::all();
                 return view('profil.navbar.index', ['navbar' => $navbar]);
             }
         
             public function navbarCreate()
             {
               return view('profil/navbar/create');
             }
           
             public function navbarEdit($id)
             {
               $navbar = navbar::find($id);
               return view('profil.navbar.edit', compact('navbar'));
             }
         
             public function navbarPost(Request $req)
             {
                 $id = $req->get('id');
                 if($id){
                     $navbar = navbar::find($id);
                 }else{
                     $navbar = new navbar;
                 }
                 if($req->gambar1){
                 if($req->hasFile('gambar1')){
                   $foto = $req->file('gambar1');
                   $filename = 'satu-'.time() . '.' . $foto->getClientOriginalExtension();
                   $destinationPath = 'image/';              
                     $foto->move($destinationPath, $filename);
                   }
                   $navbar->gambar1 = $filename;
               }

              if($req->gambar2){
              if($req->hasFile('gambar2')){
                $foto = $req->file('gambar2');
                $filename = 'dua-'.time() . '.' . $foto->getClientOriginalExtension();
                $destinationPath = 'image/';              
                  $foto->move($destinationPath, $filename);
                }
                $navbar->gambar2 = $filename;
             }

             if($req->gambar3){
              if($req->hasFile('gambar3')){
                $foto = $req->file('gambar3');
                $filename = 'tilu-'.time() . '.' . $foto->getClientOriginalExtension();
                $destinationPath = 'image/';              
                  $foto->move($destinationPath, $filename);
                }
                $navbar->gambar3 = $filename;
            }

           if($req->gambar4){
           if($req->hasFile('gambar4')){
             $foto = $req->file('gambar4');
             $filename = 'empat-'.time() . '.' . $foto->getClientOriginalExtension();
             $destinationPath = 'image/';              
               $foto->move($destinationPath, $filename);
             }
             $navbar->gambar4 = $filename;
          }

          if($req->gambar5){
            if($req->hasFile('gambar5')){
              $foto = $req->file('gambar5');
              $filename = 'lima-'.time() . '.' . $foto->getClientOriginalExtension();
              $destinationPath = 'image/';              
                $foto->move($destinationPath, $filename);
              }
              $navbar->gambar5 = $filename;
           }

                 
               $navbar->save();
               return redirect()->route('profil.navbar.index')->with(['success' => 'Data Berhasil Di Simpan']);
           }
       
           public function navbarDel($id) {
              $navbar = navbar::find($id);
              $navbar->delete();
             
             return redirect('/profil/navbar');
       }


       

}
