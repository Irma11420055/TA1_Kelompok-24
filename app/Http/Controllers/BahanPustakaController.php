<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Buku;
use App\Models\CdDvd;
use App\Models\JudulBuku;
use App\Models\LinkLinkLainnya;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class BahanPustakaController extends Controller
{
    // Fungsi Get Buku
    public function buku(){

        $dataBuku = Buku::all();
        $dataJudulBuku = JudulBuku::all();

        $statusJudulBuku = 'tersedia';

        $totalBuku = Buku::count();
        $totalJudul = JudulBuku::count();
        
        // Fungsi Search (belum bisa)
        $keyword = request('table_search');
        $databuku = Buku::where('bahasa', 'LIKE', "%keyword%")
            ->orWhere('subjek', 'LIKE', "%keyword%")
            ->get();

        return view('/Admin/bahanpustaka.buku', [
            'data_buku' => $dataBuku,
            'data_judul_buku' => $dataJudulBuku,
            'total_buku' => $totalBuku, 
            'total_judul' => $totalJudul,
            'status_judul_buku' => $statusJudulBuku
        ]);
    }

    // Fungsi Get CD/DVD
    public function cddvd(){
        $dataCdDvd = CdDvd::all();

        return view('Admin/bahanpustaka.cddvd', [
            'data_cddvd' => $dataCdDvd
        ]);
    }

    // Fungsi Get Artikel
    public function artikel(){
        $dataArtikel = Artikel::all();

        return view('Admin/bahanpustaka.artikel', [
            'data_artikel' => $dataArtikel
        ]);
    }

    // Fungsi Tambah Buku
    public function store_buku(Request $request){
        $validated = $request->validate([
            'kode_buku' => 'required|unique:bukus|max:255',
            'bahasa' => 'required|max:255',
            'subjek' => 'required|max:255',
            'edisi' => 'required|max:255',
            'pengarang' => 'required|max:255',
            'deskripsi' => 'required',
            'jenis' => 'required|max:255',
            'penerbit' => 'required|max:255',
            'klasifikasi' => 'required|max:255',
            'lokasi' => 'required|max:255',
            'ISBN' => 'required|max:11',
            'tahun' => 'required|max:11',
            'status' => 'required|max:255',
            'cp_or' => 'required|max:255',
            'gambar' => 'required'
        ]);

        $tambahBuku = Buku::create($request->all());
        return redirect('admin/bahanpustaka/buku')->with('status', 'Buku Baru Berhasil Ditambahkan!');
    }

    // Fungsi Tambah CD/DVD
    public function store_cddvd(Request $request){
        $validated = $request->validate([
            'subjek' => 'required|max:255',
            'judul' => 'required|max:255',
            'tahun' => 'required|max:11',
            'pengarang' => 'required|max:255',
            'prodi' => 'required|max:255',
            'sumber' => 'required|max:255',
            'deskripsi' => 'required',
            'jenis_koleksi' => 'required|max:255',
            'gambar' => 'required',
        ]);

        $tambahCdDvd = CdDvd::create($request->all());
        return redirect('admin/bahanpustaka/cddvd')->with('status', 'CD/DVD Baru Berhasil Ditambahkan!');
    }

    // Fungsi Tambah Artikel
    public function store_artikel(Request $request){
        $validated = $request->validate([
            'judul' => 'required|max:255',
            'isi' => 'required'
        ]);

        $tambahArtikel = Artikel::create($request->all());
        return redirect('admin/bahanpustaka/artikel')->with('status', 'Artikel Baru Berhasil Ditambahkan');
    }

    // Fungsi Get Modal Edit Buku
    public function edit_buku($slug){

        $dataBuku = Buku::find($slug);
        return view('admin.modal-edit.buku', compact('bukus'));
    }

    // FUngsi Get Modal Edit CD/DVD
    public function edit_cddvd($id){
        $dataCdDvd = CdDvd::find($id);
        return view('admin.modal-edit.cddvd', compact('cd_dvds'));
    }

    // Fungsi Get Modal Edit Artikel
    public function edit_artikel($id){
        $dataArtikel = Artikel::find($id);
        return view('admin.modal-edit.artikel', compact('artikel'));
    }

    // Fungsi Simpan Edit Buku
    public function update_buku(Request $request, $id){

        $dataBuku = Buku::find($id);
    
        $dataBuku->kode_buku = $request->kode_buku;
        $dataBuku->bahasa = $request->bahasa;
        $dataBuku->subjek = $request->subjek;
        $dataBuku->edisi = $request->edisi;
        $dataBuku->pengarang = $request->pengarang;
        $dataBuku->deskripsi = $request->deskripsi;
        $dataBuku->jenis = $request->jenis;
        $dataBuku->penerbit = $request->penerbit;
        $dataBuku->klasifikasi = $request->klasifikasi;
        $dataBuku->lokasi = $request->lokasi;
        $dataBuku->ISBN = $request->ISBN;
        $dataBuku->tahun = $request->tahun;
        $dataBuku->status = $request->status;
        $dataBuku->cp_or = $request->cp_or;
        $dataBuku->gambar = $request->gambar;

        $dataBuku->save();
        
        return redirect('admin/bahanpustaka/buku')->with('status', 'Buku Berhasil Diedit!');
    }

    // Fungsi Simpan Edit CD/DVD
    public function update_cddvd(Request $request, $id){
        $dataCdDvd = CdDvd::find($id);

        $dataCdDvd->subjek = $request->subjek;
        $dataCdDvd->judul = $request->judul;
        $dataCdDvd->tahun = $request->tahun;
        $dataCdDvd->pengarang = $request->pengarang;
        $dataCdDvd->prodi = $request->prodi;
        $dataCdDvd->sumber = $request->sumber;
        $dataCdDvd->deskripsi = $request->deskripsi;
        $dataCdDvd->jenis_koleksi = $request->jenis_koleksi;
        $dataCdDvd->gambar = $request->gambar;

        $dataCdDvd->save();

        return redirect('admin/bahanpustaka/cddvd')->with('status', 'CD/DVD Berhasil Diedit');
    }

    // Fungsi Simpan Edit Artikel
    public function update_artikel(Request $request, $id){
        $dataArtikel = Artikel::find($id);

        $dataArtikel->judul = $request->judul;
        $dataArtikel->isi = $request->isi;
        $dataArtikel->gambar = $request->gambar;

        $dataArtikel->save();

        return redirect('admin/bahanpustaka/artikel')->with('status', 'Artikel Berhasil Diedit');
    }

     // Fungsi menambahkan judul buku baru
    public function tambahJudul(Request $request){
        $tambahJudulBuku = JudulBuku::create($request->all());
        return redirect('admin/bahanpustaka/buku');
    }

    // Fungsi Delete Buku
    public function delete_buku($id){

        $deleteBuku = Buku::find($id);

        if ($deleteBuku->delete()){
            return redirect()->back()->with('status', 'Buku Berhasil Dihapus');
        }
    }

    // Fungsi Delete CD/DVD
    public function delete_cddvd($id){

        $deleteCdDvd = CdDvd::find($id);

        if ($deleteCdDvd->delete()){
            return redirect()->back()->with('status', 'CD/DVD Berhasil Dihapus');
        }
    }

    // Fungsi Delete Artikel
    public function delete_artikel($id){

        $deleteArtikel = Artikel::find($id);

        if ($deleteArtikel->delete()){
            return redirect()->back()->with('status', 'Artikel Berhasil Dihapus');
        }
    }

}