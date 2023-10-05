<?php

namespace App\Http\Controllers;

use App\Models\Istri;
use App\Models\Suami;
use App\Models\Lokasi;
use App\Models\Dokumen;
use App\Models\ibuIstri;
use App\Models\ibuSuami;
use App\Models\ayahIstri;
use App\Models\ayahSuami;
use App\Models\waliNikah;
use App\Models\DaftarNikah;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DaftarController extends Controller
{
    function index(){
        return view('component.layout.daftar');
    }

    function jadwalPost(Request $request){
        $jadwal = new DaftarNikah();
        $jadwal -> provinsi = $request -> provinsi;
        $jadwal -> kabupaten = $request -> kabupaten;
        $jadwal -> kecamatan = $request -> kecamatan;
        $jadwal -> kua = $request -> kua;
        $jadwal -> nikah_di = $request -> nikah_di;
        $jadwal -> tanggal_akad = $request -> tanggal_akad;
        $jadwal -> surat = $request -> surat;
        $jadwal -> user_id = $request -> user() -> id;
        $jadwal -> save();
        

        return view('component.layout.lokasi');
    }
    function lokasiPost(Request $request){
        $data = new Lokasi();
        $data -> desa = $request -> desa;
        $data -> alamat = $request -> alamat;
        $data -> user_id = $request -> user() -> id;
        $data -> save();
        return view('component.layout.calon_suami');
    }

    function suamiPost(Request $request){
        $suami = new Suami();
        $suami -> warganegara = $request -> warganegara;
        $suami -> negara_asal = $request -> negara_asal;
        $suami -> paspor = $request -> paspor;
        $suami -> nik = $request -> nik;
        $suami -> nama = $request -> nama;
        $suami -> tempat_lahir = $request -> tempat_lahir;
        $suami -> tanggal_lahir = $request -> tanggal_lahir;
        $suami -> umur = $request -> umur;
        $suami -> status = $request -> status;
        $suami -> agama = $request -> agama;
        $suami -> pendidikan = $request -> pendidikan;
        $suami -> pekerjaan = $request -> pekerjaan;
        $suami -> telp = $request -> telp;
        $suami -> email = $request -> email;
        $suami -> alamat = $request -> alamat;
        $suami -> user_id = $request -> user() ->id;
        $request->validate([
            'foto' => 'required|image|max:500',
        ]);
        $image = $request -> foto;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request -> foto -> move('FotoSuami', $imagename);
        $suami -> foto=$imagename;
        $suami->save();

        return view('component.layout.ayahsuami');
    }

    function ayahSuami(Request $request){
        $data = new ayahSuami();
        $data -> warganegara = $request -> warganegara;
        $data -> negara_asal = $request -> negara_asal;
        $data -> paspor = $request -> paspor;
        $data -> nik = $request -> nik;
        $data -> nama = $request -> nama;
        $data -> tempat_lahir = $request -> tempat_lahir;
        $data -> tanggal_lahir = $request -> tanggal_lahir;
        $data -> umur = $request -> umur;
        $data -> agama = $request -> agama;
        $data -> pekerjaan = $request -> pekerjaan;
        $data -> alamat = $request -> alamat;
        $data -> user_id = $request -> user() ->id;
        $data->save();

        return view('component.layout.ibusuami');
    }

    function ibuSuami(Request $request){
        $data = new ibuSuami();
        $data -> warganegara = $request -> warganegara;
        $data -> negara_asal = $request -> negara_asal;
        $data -> paspor = $request -> paspor;
        $data -> nik = $request -> nik;
        $data -> nama = $request -> nama;
        $data -> tempat_lahir = $request -> tempat_lahir;
        $data -> tanggal_lahir = $request -> tanggal_lahir;
        $data -> umur = $request -> umur;
        $data -> agama = $request -> agama;
        $data -> pekerjaan = $request -> pekerjaan;
        $data -> alamat = $request -> alamat;
        $data -> user_id = $request -> user() ->id;
        $data->save();

        return view('component.layout.calon_istri');
    }

    function istriPost(Request $request){
        $istri = new Istri();
        $istri -> warganegara = $request -> warganegara;
        $istri -> negara_asal = $request -> negara_asal;
        $istri -> paspor = $request -> paspor;
        $istri -> nik = $request -> nik;
        $istri -> nama = $request -> nama;
        $istri -> tempat_lahir = $request -> tempat_lahir;
        $istri -> tanggal_lahir = $request -> tanggal_lahir;
        $istri -> umur = $request -> umur;
        $istri -> status = $request -> status;
        $istri -> agama = $request -> agama;
        $istri -> pendidikan = $request -> pendidikan;
        $istri -> pekerjaan = $request -> pekerjaan;
        $istri -> telp = $request -> telp;
        $istri -> email = $request -> email;
        $istri -> alamat = $request -> alamat;
        $istri -> user_id = $request -> user() ->id;
        $request->validate([
            'foto' => 'required|image|max:500',
        ]);
        $image = $request -> foto;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request -> foto -> move('FotoIstri', $imagename);
        $istri -> foto=$imagename;
        $istri->save();

        return view('component.layout.ayahistri');
    }

    function ayahIstri(Request $request){
        $data = new ayahIstri();
        $data -> warganegara = $request -> warganegara;
        $data -> negara_asal = $request -> negara_asal;
        $data -> paspor = $request -> paspor;
        $data -> nik = $request -> nik;
        $data -> nama = $request -> nama;
        $data -> tempat_lahir = $request -> tempat_lahir;
        $data -> tanggal_lahir = $request -> tanggal_lahir;
        $data -> umur = $request -> umur;
        $data -> agama = $request -> agama;
        $data -> pekerjaan = $request -> pekerjaan;
        $data -> alamat = $request -> alamat;
        $data -> user_id = $request -> user() ->id;
        $data->save();

        return view('component.layout.ibuistri');
    }

    function ibuIstri(Request $request){
        $data = new ibuIstri();
        $data -> warganegara = $request -> warganegara;
        $data -> negara_asal = $request -> negara_asal;
        $data -> paspor = $request -> paspor;
        $data -> nik = $request -> nik;
        $data -> nama = $request -> nama;
        $data -> tempat_lahir = $request -> tempat_lahir;
        $data -> tanggal_lahir = $request -> tanggal_lahir;
        $data -> umur = $request -> umur;
        $data -> agama = $request -> agama;
        $data -> pekerjaan = $request -> pekerjaan;
        $data -> alamat = $request -> alamat;
        $data -> user_id = $request -> user() ->id;
        $data->save();

        return view('component.layout.wali_nikah');
    }

    function waliPost(Request $request){
        $data = new waliNikah();
        $data -> warganegara = $request -> warganegara;
        $data -> negara_asal = $request -> negara_asal;
        $data -> paspor = $request -> paspor;
        $data -> nik = $request -> nik;
        $data -> nama = $request -> nama;
        $data -> ayah_wali = $request -> ayah_wali;
        $data -> tempat_lahir = $request -> tempat_lahir;
        $data -> tanggal_lahir = $request -> tanggal_lahir;
        $data -> umur = $request -> umur;
        $data -> status = $request -> status;
        $data -> hubungan = $request -> hubungan;
        $data -> sebab_wali_hakim = $request -> sebab_wali_hakim;
        $data -> agama = $request -> agama;
        $data -> pekerjaan = $request -> pekerjaan;
        $data -> telp = $request -> telp;
        $data -> alamat = $request -> alamat;
        $data -> user_id = $request -> user() ->id;
        $data->save();

        return view('component.layout.dokumen');
    }

    function postDaftar(Request $request){
        $data = new Dokumen();
        $data -> suratketerangan_suami = $request -> input('suratketerangan_suami');
        $data -> persetujuan_suami = $request -> input('persetujuan_suami');
        $data -> akta_suami = $request -> input('akta_suami');
        $data -> ktp_suami = $request -> input('ktp_suami');
        $data -> kk_suami = $request -> input('kk_suami');
        $data -> paspoto2x3_suami = $request -> input('paspoto2x3_suami');
        $data -> paspoto4x6_suami = $request -> input('paspoto4x6_suami');
        $data -> surat_izin_suami = $request -> input('surat_izin_suami');
        $data -> surat_dispen_suami = $request -> input('surat_dispen_suami');
        $data -> surat_cerai_suami = $request -> input('surat_cerai_suami');
        $data -> surat_komandan_suami = $request -> input('surat_komandan_suami');
        $data -> surat_kematian_suami = $request -> input('surat_kematian_suami');
        $data -> surat_wna_suami = $request -> input('surat_wna_suami');
        $data -> surat_rekomendasi_suami = $request -> input('surat_rekomendasi_suami');
        $data -> suratketerangan_istri = $request -> input('suratketerangan_istri');
        $data -> persetujuan_istri = $request -> input('persetujuan_istri');
        $data -> akta_istri = $request -> input('akta_istri');
        $data -> ktp_istri = $request -> input('ktp_istri');
        $data -> kk_istri = $request -> input('kk_istri');
        $data -> paspoto2x3_istri = $request -> input('paspoto2x3_istri');
        $data -> paspoto4x6_istri = $request -> input('paspoto4x6_istri');
        $data -> surat_izin_istri = $request -> input('surat_izin_istri');
        $data -> surat_dispen_istri = $request -> input('surat_dispen_istri');
        $data -> surat_cerai_istri = $request -> input('surat_cerai_istri');
        $data -> surat_komandan_istri = $request -> input('surat_komandan_istri');
        $data -> surat_kematian_istri = $request -> input('surat_kematian_istri');
        $data -> surat_wna_istri = $request -> input('surat_wna_istri');
        $data -> surat_rekomendasi_istri = $request -> input('surat_rekomendasi_istri');
        $data -> pedoman = $request -> input('pedoman');
        $data -> user_id = $request -> user() ->id;
        $data->save();
        // Mengambil user yang saat ini masuk (auth user)
        $user = auth()->user();
        
        // Mengambil ID Suami, Istri, dan Jadwal yang sesuai dengan user ID
        $suamiId = Suami::where('user_id', $user->id)->value('id');
        $istriId = Istri::where('user_id', $user->id)->value('id');
        $jadwalId = DaftarNikah::where('user_id', $user->id)->value('id');
        $pendaftaran = new Pendaftaran([
            'suami_id' => $suamiId,
            'istri_id' => $istriId,
            'jadwal_id' => $jadwalId,
            'user_id' => $user->id,
            'kode_pendaftaran' => Pendaftaran::generateNomorPendaftaran(),
        ]);
        $pendaftaran ->save();

        return redirect('/home')->with('success', 'Anda Berhasil Mendaftar Nikah Online');;
    }

    function delete($id){
        $data = Pendaftaran::find($id);
        $data -> delete(); 
        return redirect('/home')->with('delete', 'Anda Berhasil Menghapus Data.');;
    }
    function verif($id){
        $data = Pendaftaran::find($id);
        $data -> status = 'Diverifikasi';
        $data -> save();
        return redirect('/home')->with('verif', 'Data Berhasil Diverifikasi.');;
    }
    function tolak($id){
        $data = Pendaftaran::find($id);
        $data -> status = 'Ditolak';
        $data -> save();
        return redirect('/home')->with('tolak', 'Data Ditolak.');;
    }
}
