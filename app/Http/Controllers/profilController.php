<?php

namespace App\Http\Controllers;

use App\Models\sambutan;
use App\Models\sarana;
use Illuminate\Http\Request;
use App\Models\visi;
use App\Models\sejarah;
use App\Models\strukturOrganisasi;
use App\Models\tentang;
use App\Models\weblink;
use App\Models\vidio;
class profilController extends Controller
{
    //
        //visi misi
        public function visi()
        {
            $visi = visi::all();
            return view('profil.visi-misi.index', ['visi' => $visi]);
        }
    
        public function visiCreate()
        {
          return view('profil/visi-misi/create');
        }
    
        public function visiDetail($id)
        {
          $visi = visi::find($id);
          return view('profil.visi-misi.detail', compact('visi'));
        }
        
        public function visiEdit($id)
        {
          $visi = visi::find($id);
          return view('profil.visi-misi.edit', compact('visi'));
        }
    
        public function visiPost(Request $req  , $id = null)
        {
            $id = $req->get('id');
            if($id){
                $visi = visi::find($id);
            }else{
                $visi = new visi;
            }
    
            $visi->visi = $req->visi;
            $visi->misi = $req->misi;
            $visi->tujuan = $req->tujuan;
            $visi->save();
            return redirect()->route('profil.visi-misi.index')->with(['success' => 'Data Berhasil Di Simpan']);
        }
    
          public function visiDel($id) {
            $visi = visi::findOrFail($id);
            $visi->delete();
          
              if($visi){
                  return response()->json([
                      'status' => 'success'
                  ]);
              }else{
                  return response()->json([
                      'status' => 'error'
                  ]);
              }
          }
          
      
      
    //sejarah
    public function sejarah()
    {
        $sejarah = sejarah::all();
        return view('profil.sejarah.index', ['sejarah' => $sejarah]);
    }

    public function sejarahCreate()
    {
      return view('profil/sejarah/create');
    }

    public function sejarahDetail($id)
    {
      $sejarah = sejarah::find($id);
      return view('profil.sejarah.detail', compact('sejarah'));
    }
    
    public function sejarahEdit($id)
    {
      $sejarah = sejarah::find($id);
      return view('profil.sejarah.edit', compact('sejarah'));
    }

    public function sejarahPost(Request $req)
    {
        $id = $req->get('id');
        if($id){
            $sejarah = sejarah::find($id);
        }else{
            $sejarah = new sejarah;
        }
        if($req->gambar){
          if($req->hasFile('gambar')){
            $foto = $req->file('gambar');
            $filename = time() . '.' . $foto->getClientOriginalExtension();
            $destinationPath = 'image/';              
             $foto->move($destinationPath, $filename);
            }
            $sejarah->gambar = $filename;
        }

        $sejarah->isi = $req->isi;
        $sejarah->save();
        return redirect()->route('profil.sejarah.index')->with(['success' => 'Data Berhasil Di Simpan']);
    }

    public function sejarahDel($id)
    {
      $sejarah = sejarah::findOrFail($id);
      $sejarah->delete();
    
        if($sejarah){
            return response()->json([
                'status' => 'success'
            ]);
        }else{
            return response()->json([
                'status' => 'error'
            ]);
        }
    }
    
         
    //tentang
    public function tentang()
    {
        $tentang = tentang::all();
        return view('profil.tentang.index', ['tentang' => $tentang]);
    }

    public function tentangCreate()
    {
      return view('profil.tentang.create');
    }

    public function tentangDetail($id)
    {
      $tentang = tentang::find($id);
      return view('profil.tentang.detail', compact('tentang'));
    }
    
    public function tentangEdit($id)
    {
      $tentang = tentang::find($id);
      return view('profil.tentang.edit', compact('tentang'));
    }

    public function tentangPost(Request $req)
    {
        $id = $req->get('id');
        if ($id) {
            $tentang = Tentang::find($id);
        } else {
            $tentang = new Tentang;
        }
    
        // Menyimpan data yang diterima dari form
        $tentang->judul = $req->judul;
        $tentang->isi = $req->isi;
        $tentang->siswa = $req->siswa;
        $tentang->tahun_berdiri = $req->tahun_berdiri;
        $tentang->guru_karyawan = $req->guru_karyawan;
        $tentang->lembaga = $req->lembaga;
    
        $tentang->save();
    
        return redirect()->route('profil.tentang.index')->with(['success' => 'Data Berhasil Disimpan']);
    }
    

    public function tentangDel($id)
    {
      $tentang = tentang::findOrFail($id);
      $tentang->delete();
    
        if($tentang){
            return response()->json([
                'status' => 'success'
            ]);
        }else{
            return response()->json([
                'status' => 'error'
            ]);
        }
    }

  
     //sarana
     public function sarana()
     {
         $sarana = sarana::all();
         return view('profil.sarana.index', ['sarana' => $sarana]);
     }
 
     public function saranaCreate()
     {
       return view('profil/sarana/create');
     }
 
     public function saranaDetail($id)
     {
       $sarana = sarana::find($id);
       return view('profil.sarana.detail', compact('sarana'));
     }
     
     public function saranaEdit($id)
     {
       $sarana = sarana::find($id);
       return view('profil.sarana.edit', compact('sarana'));
     }
 
     public function saranaPost(Request $req)
     {
         $id = $req->get('id');
         if($id){
             $sarana = sarana::find($id);
         }else{
             $sarana = new sarana;
         }
        
         $sarana->uraian = $req->uraian;
         $sarana->jumlah_ada = $req->jumlah_ada;
         $sarana->kondisi = $req->kondisi;
         $sarana->jumlah_yg_diperlukan = $req->jumlah_yg_diperlukan;
         $sarana->keterangan = $req->keterangan;
         $sarana->save();
         return redirect()->route('profil.sarana.index')->with(['success' => 'Data Berhasil Di Simpan']);
     }
 
       public function saranaDel($id)
        {
         $sarana = sarana::find($id);
         $sarana->delete();
       
         if($sarana){
          return response()->json([
              'status' => 'success'
          ]);
      }else{
          return response()->json([
              'status' => 'error'
          ]);
      }
  }


       //struktur
       public function strukturOrganisasi()
       {
         $strukturs = StrukturOrganisasi::latest()->get();
         return view('profil.struktur-organisasi.index', compact('strukturs'));
       }
  
       public function strukturCreate()
       {
         return view('profil/struktur-organisasi/create');
       }
  
       public function strukturEdit(StrukturOrganisasi $struktur)
       {
         return view('profil.struktur-organisasi.edit', compact('struktur'));
       }
  
       public function strukturPost(Request $req)
       {
         $id = $req->get('id');
         if($id){
           $struktur = StrukturOrganisasi::find($id);
         }else{
           $struktur = new StrukturOrganisasi;
         }
            if($req->gambar){
           if($req->hasFile('gambar')){
             $foto = $req->file('gambar');
             $filename = time() . '.' . $foto->getClientOriginalExtension();
             $destinationPath = 'image/';              
              $foto->move($destinationPath, $filename);
             }
             $struktur->gambar = $filename;
         }
  
         $struktur->judul = $req->judul;
         $struktur->save();
         return redirect()->route('profil.struktur-organisasi.index')->with(['success' => 'Data Berhasil Disimpan!']);
       }
  
       public function strukturDelete($id)
       {
           $struktur = StrukturOrganisasi::findOrFail($id);
           $struktur->delete();
   
           if($struktur){
            return response()->json([
                'status' => 'success'
            ]);
        }else{
            return response()->json([
                'status' => 'error'
            ]);
        }
    }
  
  
     //weblink


     public function weblink()
     {
         $weblink = weblink::all();
         return view('kontak.weblink.index', compact('weblink'));
     }
     public function weblinkCreate()
     {
       return view('kontak/weblink/create');
     }
     public function weblinkDetail($id)
     {
       $weblink = weblink::find($id);
       return view('kontak/weblink/detail', compact('weblink'));
     }
  
     public function weblinkEdit($id)
     {
       $weblink = weblink::find($id);
       return view('kontak.weblink.edit', compact('weblink'));
     }
  
     public function weblinkPost(Request $req)
     {
         $id = $req->get('id');
         if($id)
         {
             $weblink = weblink::find($id);
         }else
         {
             $weblink = new weblink;
         }
         $weblink->fb = $req->fb;
         $weblink->ig = $req->ig;
         $weblink->yt = $req->yt;
         $weblink->save();
         return redirect()->route('kontak.weblink.index')->with(['success' => 'Data Berhasil Di Simpan']);
     }
     public function weblinkDel($id)
     {
     $weblink = weblink::find($id);
     $weblink->delete();
  
       if($weblink){
           return response()->json([
               'status' => 'success'
           ]);
       }else{
           return response()->json([
               'status' => 'error'
           ]);
       }
     }

            //Vidio

            public function vidio()
            {
                $vidio = vidio::all();
                return view('profil.vidio.index', ['vidio' => $vidio]);
            }
        
            public function vidioCreate()
            {
              return view('profil/vidio/create');
            }
        
            public function vidioDetail($id)
            {
              $vidio = vidio::find($id);
              return view('profil.vidio.detail', compact('vidio'));
            }
            
            public function vidioEdit($id)
            {
              $vidio = vidio::find($id);
              return view('profil.vidio.edit', compact('vidio'));
            }
        
            public function vidioPost(Request $req)
                {
                  $this->validate($req, [ 
                    'video' => 'required|file|mimetypes:video/mp4',
                    ]);

                    $id = $req->get('id');
                    if($id){
                        $vidio = vidio::find($id);
                    }else{
                      $vidio = new vidio;
                    }
                      if($req->video){
                        if($req->hasFile('video')){
                          $foto = $req->file('video');
                          $filename = time() . '.' . $foto->getClientOriginalExtension();
                          $destinationPath = 'image/';              
                           $foto->move($destinationPath, $filename);
                          }
                          $vidio->video = $filename;
                      }
                    $vidio->judul = $req->judul;
                    $vidio->isi = $req->isi;
                    $vidio->save();
                return redirect()->route('profil.vidio.index')->with(['success' => 'Data Berhasil Di Simpan']);
            }
        
              public function vidioDel($id) {
                $vidio = vidio::find($id);
                $vidio->delete();
              
                if($vidio){
                  return response()->json([
                      'status' => 'success'
                  ]);
              }else{
                  return response()->json([
                      'status' => 'error'
                  ]);
              }
            }

               //sambutan kepala yayasan

          public function sambutan()
          {
              $sambutan = sambutan::all();
              return view('profil.kepala-yayasan.index', ['sambutan' => $sambutan]);
          }
      
          public function sambutanCreate()
          {
            return view('profil/kepala-yayasan/create');
          }
      
          public function sambutanDetail($id)
          {
            $sambutan = sambutan::find($id);
            return view('profil.kepala-yayasan.detail', compact('sambutan'));
          }
          
          public function sambutanEdit($id)
          {
            $sambutan = sambutan::find($id);
            return view('profil.kepala-yayasan.edit', compact('sambutan'));
          }
      
          public function sambutanPost(Request $req)
          {
              $id = $req->get('id');
              if($id){
                  $sambutan = sambutan::find($id);
              }else{
                  $sambutan = new sambutan;
              }
              if($req->gambar){
                if($req->hasFile('gambar')){
                  $foto = $req->file('gambar');
                  $filename = time() . '.' . $foto->getClientOriginalExtension();
                  $destinationPath = 'image/';              
                   $foto->move($destinationPath, $filename);
                  }
                  $sambutan->gambar = $filename;
              }
      
              $sambutan->judul = $req->judul;
              $sambutan->isi = $req->isi;
              $sambutan->save();
              return redirect()->route('profil.kepala-yayasan.index')->with(['success' => 'Data Berhasil Di Simpan']);
          }
      
            public function sambutanDel($id) {
              $sambutan = sambutan::find($id);
              $sambutan->delete();
            
              if($sambutan){
                return response()->json([
                    'status' => 'success'
                ]);
            }else{
                return response()->json([
                    'status' => 'error'
                ]);
            }
          }
            

}
