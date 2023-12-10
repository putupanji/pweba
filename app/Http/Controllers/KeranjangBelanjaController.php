<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KeranjangBelanjaController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		// $pegawai = DB::table('pegawai')->get(); // get tidak bisa menggunakan paginate
        $keranjangbelanja = DB::table('keranjangbelanja')->get(); // buat ambil jumlah data di tabel disini cuma 10 data kebawah,

    	// mengirim data pegawai ke view index
		return view('keranjangbelanjaIndex',['keranjangbelanja' => $keranjangbelanja]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahBelanja');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('keranjangbelanja')->insert([
			'KodeBarang' => $request->kodebarang,
			'Jumlah' => $request->jumlah,
			'Harga' => $request->harga,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanjaIndex');

	}
    	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanjaIndex');
	}

    // public function update(Request $request)
	// {
	// 	// update data pegawai
	// 	DB::table('pegawai')->where('pegawai_id',$request->id)->update([
	// 		'pegawai_nama' => $request->nama,
	// 		'pegawai_jabatan' => $request->jabatan,
	// 		'pegawai_umur' => $request->umur,
	// 		'pegawai_alamat' => $request->alamat
	// 	]);
	// 	// alihkan halaman ke halaman pegawai
	// 	return redirect('/pegawai');
	// }
}
