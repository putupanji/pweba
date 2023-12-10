@extends('master2')
@section('title', 'Data Pegawai')
@section('konten')
    {{-- <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Data Pegawai</h3> --}}

    <a href="/keranjangbelanjaIndex"> Kembali</a>

    {{-- <div class="form-group row">
        <label for="first_name" class="col-xs-3 col-form-label mr-2">First Name</label>
        <div class="col-xs-9">
        <input type="text" class="form-control" id="first_name" name="first_name">
        </div>
        </div> --}}

    <br />
    <br />

    <form action="/keranjangbelanjaIndex/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="kodebarang" class="col-sm-1 col-form-label">Kode Barang</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="kodebarang" name="kodebarang">
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlah" class="col-sm-1 col-form-label">Jumlah</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="jumlah" name="jumlah">
            </div>
        </div>
        <div class="form-group row">
            <label for="harga" class="col-sm-1 col-form-label">Harga</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" id="harga" name="harga">
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Simpan Data">
        {{-- Nama <input type="text" name="nama"> <br /> --}}
        {{-- Jabatan <input type="text" name="jabatan"> <br /> --}}
        {{-- Umur <input type="number" name="umur"> <br /> --}}
        {{-- Alamat
        <textarea name="alamat"></textarea> <br />
        <input type="submit" value="Simpan Data"> --}}
    </form>
@endsection
