<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;

class PrintController extends Controller
{
    public function dataSiswa($id) {
        $dataSiswa = Peserta::findOrFail($id);
        return view('formulir.print',  compact('dataSiswa'));
    }

    public function dataSemua() {
        $dataSemua = Peserta::latest()->get();
        return view('formulir.printSemua',  compact('dataSemua'));
    }
}
