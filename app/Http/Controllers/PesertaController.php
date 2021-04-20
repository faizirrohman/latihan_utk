<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function index()
    {
        $peserta = Peserta::latest()->get();
        return view('formulir.index', compact('peserta'));
    }

    public function pendaftar()
    {
        $peserta = Peserta::latest()->get();
        return view('formulir.pendaftar', compact('peserta'));
    }

    public function create()
    {
        $number = Peserta::count();
        if($number > 0)
        {
            $number = Peserta::max('no_reg');
            $strnum = substr($number, 2, 3);
            $strnum = $strnum + 1;
            if (strlen($strnum) == 3) {
                $no_reg = $strnum;
            } else if (strlen($strnum) == 3) {
                $no_reg = "0" . $strnum;
            } else if (strlen($strnum) == 2) {
                $no_reg = "00" . $strnum;
            } else if (strlen($strnum) == 1) {
                $no_reg = "000" . $strnum;
            }
        } else {
            $no_reg = "0001";
        }
        return view('formulir.create', compact('no_reg'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_reg' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'asal_sekolah' => 'required',
            'minat_jurusan' => 'required',
        ]);
        Peserta::create($request->all());
        return redirect()->route('formulir.index')->with('success', 'Selamat, Anda
        sudah terdaftar di SMK Merdeka Belajar');
    }

    public function edit($id)
    {
        $peserta = Peserta::findOrFail($id);
        return view('formulir.edit', compact('peserta'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'no_reg' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'asal_sekolah' => 'required',
            'minat_jurusan' => 'required',
        ]);
        Peserta::findOrFail($id)->update($request->all());
        return redirect()->route('formulir.pendaftar')->with('success', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        $data = Peserta::findOrFail($id);
        $data->delete();
        return redirect()->route('formulir.pendaftar')->with('success', 'Data
        sudah dihapus');
    }
}
