<?php

namespace App\Http\Controllers; //package

use Illuminate\Http\Request; //import

class DosenController extends Controller
{
    //
    public function index(){
        return "<h2>Halo ini adalah method index, dalam controller DosenController. - www.malasngoding.com</h2>";
    }

    public function biodata(){
        //biasanya ada logika pemrograman disini
        $nama = "Panji Wiradharma";
        $alamat = "Bali";
        $umur = 19;
    	$pelajaran = ["Algoritma & Struktur Data","Riset Operasi","Pemrograman Web","Manajemen Proses Bisnis","Struktur Basis Data"];
    	// return view('biodata',['nama'=$nama]); --> ga boleh kyk gini
        return view('biodata',['nama'=>$nama,'alamat'=>$alamat,'umur'=>$umur, 'matkul' => $pelajaran]); // --> ini baru bener
    }

    public function showjam($jam){ // data disini untuk data yang dinamis

    	return "<h3>Sekarang jam".$jam."</h3>"; // "." untuk menambah atau "+" dlm java

    }

    public function proses(Request $request){
            $nama = $request->input('nama');
            $alamat = $request->input('alamat');
            $nrp = $request->input('nrp');
            return "Anda telah mengisikan <br> Nama : ".$nama.", Alamat : ".$alamat.", NRP : ".$nrp.
            "<br> Isi asli clas Request : ".$request;
    }

    public function formulir(){
        return view('formulir');
    }

    public function home(){
		return view('home');
	}

	public function tentang(){
		return view('tentang');
	}

	public function kontak(){
		return view('kontak');
	}
}
