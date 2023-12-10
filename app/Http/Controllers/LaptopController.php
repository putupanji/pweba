<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LaptopController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		// $pegawai = DB::table('pegawai')->get(); // get tidak bisa menggunakan paginate
        $laptop = DB::table('laptop')->paginate(10); // buat ambil jumlah data di tabel disini cuma 10 data kebawah,

    	// mengirim data pegawai ke view index
		return view('indexLaptop',['laptop' => $laptop]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahLaptop');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('laptop')->insert([
			'merklaptop' => $request->merk,
			'stocklaptop' => $request->stok,
			'tersedia' => $request->tersedia,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/laptop');

	}

	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$laptop = DB::table('laptop')->where('kodelaptop',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editLaptop',['laptop' => $laptop]);

	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('laptop')->where('kodelaptop',$request->id)->update([
			'merklaptop' => $request->merk,
			'stocklaptop' => $request->stok,
			'tersedia' => $request->tersedia,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/laptop');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('laptop')->where('kodelaptop',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/laptop');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$laptop = DB::table('laptop')
		    ->where('merklaptop','like',"%".$cari."%")
		    ->paginate();

    		// mengirim data pegawai ke view index
		return view('indexLaptop',['laptop' => $laptop, 'cari' => $cari]);

	}

    public function view($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		$laptop = DB::table('laptop')->where('kodelaptop',$id)->get();

		// passing data pegawai yang didapat ke view edit.blade.php
		return view('lihatLaptop',['laptop' => $laptop]);
	}
}
