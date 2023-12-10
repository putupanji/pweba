<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CounterController extends Controller
{
    // public function index()
    // {
    //     $counter = DB::table('counter')->get();
    //     return view('indexCounter', ['counter' => $counter]);
    // }

    public function index()
    {
        $this->updateCounter(); // Panggil fungsi updateCounter sebelum menampilkan halaman
        $jumlahPengunjung = $this->getCounter();

        return view('indexcounter', compact('jumlahPengunjung'));
    }

    private function updateCounter()
    {
        // Update jumlah pengunjung
        DB::table('counter')->where('ID', 1)->increment('Jumlah');
    }

    private function getCounter()
    {
        // Ambil nilai Jumlah
        return DB::table('counter')->where('ID', 1)->value('Jumlah');
    }

}
