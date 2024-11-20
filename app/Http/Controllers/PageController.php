<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logo;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\sambutan;
use App\Models\visi;
use App\Models\vidio;
use App\Models\weblink;
use App\Models\kontak;
use App\Models\ma;
use App\Models\mts;
use App\Models\pesantren;
use App\Models\sarana;
use App\Models\sejarah;
use App\Models\smk;
use App\Models\StrukturOrganisasi;

class PageController extends Controller
{

    public function sejarah()
    {
        $sejarah = sejarah::paginate(10);
        $logo = Logo::paginate(10);
        $kontak = kontak::paginate(10);
        $weblink = weblink::paginate(10);
        $smk = smk::paginate(10);
        $ma = ma::paginate(10);
        $mts = mts::paginate(10);
        $pesantren = pesantren::paginate(10);
        return view('page.sejarah-yayasan', [
            'sejarah' => $sejarah,
            'logo' => $logo,
            'kontak' => $kontak,
            'weblink' => $weblink,
            'smk' => $smk,
            'ma' => $ma,
            'mts' => $mts,
            'pesantren' => $pesantren,
        ]);
    }
    


   
    public function sambutan()
    {
        $sambutan = sambutan::paginate(10);
        return view('page.sambutan-kepala-sekolah', ['sambutan' => $sambutan]);
    }

   

    public function berita()
    {
        $galeri = Galeri::all();
        $berita = Berita::paginate(10);
        $logo = Logo::paginate(10);
        $kontak = kontak::paginate(10);
        $weblink = weblink::paginate(10);
        $smk = smk::paginate(10);
        $ma = ma::paginate(10);
        $mts = mts::paginate(10);
        $visi = visi::paginate(10);
        $pesantren = pesantren::paginate(10);
        return view('page.berita', [
            'galeri' => $galeri,
            'berita' => $berita,
            'logo' => $logo,
            'kontak' => $kontak,
            'weblink' => $weblink,
            'smk' => $smk,
            'ma' => $ma,
            'mts' => $mts,
            'visi' => $visi,
            'pesantren' => $pesantren,
        ]);
    }
    
    public function galeri()
    {
        $galeri = Galeri::all();
        $strukturs = StrukturOrganisasi::paginate(10);
        $logo = Logo::paginate(10);
        $kontak = kontak::paginate(10);
        $weblink = weblink::paginate(10);
        $smk = smk::paginate(10);
        $ma = ma::paginate(10);
        $mts = mts::paginate(10);
        $visi = visi::paginate(10);
        $pesantren = pesantren::paginate(10);
        return view('page.photo', [
            'galeri' => $galeri,
            'strukturs' => $strukturs,
            'logo' => $logo,
            'kontak' => $kontak,
            'weblink' => $weblink,
            'smk' => $smk,
            'ma' => $ma,
            'mts' => $mts,
            'visi' => $visi,
            'pesantren' => $pesantren,
        ]);
    }

    public function video()
    {
        $video = vidio::paginate(10);
        $galeri = Galeri::all();
        $strukturs = StrukturOrganisasi::paginate(10);
        $logo = Logo::paginate(10);
        $kontak = kontak::paginate(10);
        $weblink = weblink::paginate(10);
        $smk = smk::paginate(10);
        $ma = ma::paginate(10);
        $mts = mts::paginate(10);
        $visi = visi::paginate(10);
        $pesantren = pesantren::paginate(10);
        return view('page.video', [
            'video' => $video,
            'galeri' => $galeri,
            'strukturs' => $strukturs,
            'logo' => $logo,
            'kontak' => $kontak,
            'weblink' => $weblink,
            'smk' => $smk,
            'ma' => $ma,
            'mts' => $mts,
            'visi' => $visi,
            'pesantren' => $pesantren,
        ]);
    }

    public function weblink()
    {
        $weblink = weblink::paginate(10);
        return view('welcome', ['weblink' => $weblink]);
    }

    public function kontak()
    {
        $galeri = Galeri::all();
        $strukturs = StrukturOrganisasi::paginate(10);
        $logo = Logo::paginate(10);
        $kontak = kontak::paginate(10);
        $weblink = weblink::paginate(10);
        $smk = smk::paginate(10);
        $ma = ma::paginate(10);
        $mts = mts::paginate(10);
        $visi = visi::paginate(10);
        $pesantren = pesantren::paginate(10);
        return view('page.kontak', [
            'galeri' => $galeri,
            'strukturs' => $strukturs,
            'logo' => $logo,
            'kontak' => $kontak,
            'weblink' => $weblink,
            'smk' => $smk,
            'ma' => $ma,
            'mts' => $mts,
            'visi' => $visi,
            'pesantren' => $pesantren,
        ]);
    }
    public function lihatBerita($id)
    {
        $berita = Berita::find($id);
        return view('page.detail.lihat-berita', ['berita' => $berita]);
    }

    public function visiMisi()
    {

        $sejarah = sejarah::paginate(10);
        $logo = Logo::paginate(10);
        $kontak = kontak::paginate(10);
        $weblink = weblink::paginate(10);
        $smk = smk::paginate(10);
        $ma = ma::paginate(10);
        $mts = mts::paginate(10);
        $visi = visi::paginate(10);
        $pesantren = pesantren::paginate(10);
        return view('page.visi-misi', [
            'sejarah' => $sejarah,
            'logo' => $logo,
            'kontak' => $kontak,
            'weblink' => $weblink,
            'smk' => $smk,
            'ma' => $ma,
            'mts' => $mts,
            'visi' => $visi,
            'pesantren' => $pesantren,
        ]);
    }

    public function strukturOrganisasi()
    {
        $strukturs = StrukturOrganisasi::paginate(10);
        $logo = Logo::paginate(10);
        $kontak = kontak::paginate(10);
        $weblink = weblink::paginate(10);
        $smk = smk::paginate(10);
        $ma = ma::paginate(10);
        $mts = mts::paginate(10);
        $visi = visi::paginate(10);
        $pesantren = pesantren::paginate(10);
        return view('page.struktur-organisasi', [
            'strukturs' => $strukturs,
            'logo' => $logo,
            'kontak' => $kontak,
            'weblink' => $weblink,
            'smk' => $smk,
            'ma' => $ma,
            'mts' => $mts,
            'visi' => $visi,
            'pesantren' => $pesantren,
        ]);
    }

    public function sarana()
    {
        $strukturs = StrukturOrganisasi::paginate(10);
        $sarana = sarana::paginate(10);
        $logo = Logo::paginate(10);
        $kontak = kontak::paginate(10);
        $weblink = weblink::paginate(10);
        $smk = smk::paginate(10);
        $ma = ma::paginate(10);
        $mts = mts::paginate(10);
        $visi = visi::paginate(10);
        $pesantren = pesantren::paginate(10);
        return view('page.sarana-prasarana', [
            'strukturs' => $strukturs,
            'sarana' => $sarana,
            'logo' => $logo,
            'kontak' => $kontak,
            'weblink' => $weblink,
            'smk' => $smk,
            'ma' => $ma,
            'mts' => $mts,
            'visi' => $visi,
            'pesantren' => $pesantren,
        ]);
    }

}
