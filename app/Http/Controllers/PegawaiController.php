<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    function index(){
        $data = Pegawai::all();
        return view('component.layout.pegawai', compact('data'));
    }

    function tambah(Request $request){
        $data = new Pegawai;
        $data->name = $request->name;
        $data->jabatan = $request->jabatan;
        $data->alamat = $request->alamat;
        $foto = $request->foto;
        $fotoName = time() . '.' . $foto->getClientoriginalExtension();
        $request->foto->move('pegawai', $fotoName);
        $data->foto=$fotoName;

    $data->save();

    return redirect()->back()->with('message', 'Pegawai Berhasil Ditambah');
    }

    function hapus($id){
        $data = Pegawai::find($id);
        $data->delete();
        return redirect()->back()->with('delete', 'Pegawai Berhasil Dihapus');
    }
    function edit($id){
        $data = Pegawai::find($id);
        return view('component.layout.edit-pegawai', compact('data'));
        
    }

    function update(Request $request, $id){
        $data = Pegawai::find($id);
        $data->name = $request->name;
        $data->jabatan = $request->jabatan;
        $data->alamat = $request->alamat;
        $foto = $request->foto;
        $fotoName = time() . '.' . $foto->getClientoriginalExtension();
        $request->foto->move('pegawai', $fotoName);
        $data->foto=$fotoName;

    $data->save();

    return redirect('/home/pegawai')->with('edit', 'Pegawai Berhasil Diedit');
    }
}
