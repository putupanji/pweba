<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = DB::table('kategori')->get(); // Fetch all categories

        return view('indexKategori', compact('kategori'));
    }

    public function hasil(Request $request)
    {
        $selectedKategori = $request->input('kategori');

        // Fetch pegawai based on the selected category
        $pegawai = DB::table('pegawai')->where('kategori', $selectedKategori)->get();

        return view('hasilKategori', compact('pegawai', 'selectedKategori'));
    }
}
