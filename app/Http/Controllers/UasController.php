<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UasController extends Controller
{
    public function edit($id)
{
    $mahasiswa = Mahasiswa::find($id);
    return view('mahasiswa.edit', compact('mahasiswa'));
}

public function hapus($id)
{
    $mahasiswa = Mahasiswa::find($id);
    $mahasiswa->delete();
    return redirect('/mahasiswa')->with('success', 'Data mahasiswa berhasil dihapus');
}

}
