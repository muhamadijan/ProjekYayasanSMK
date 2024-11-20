     
    //tentang
    public function tentang()
    {
        $tentang = tentang::all();
        return view('profil.tentang.index', ['tentang' => $tentang]);
    }

    public function tentangCreate()
    {
      return view('profil/tentang/create');
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