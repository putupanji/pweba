@extends('master2')
@section('title', 'Data Pegawai')
@section('konten')
    <br />
    <h2>Putu Panji Wiradharma</h2>
    <h3>PWEB A - 5026221170</h3>

    <br />
    <br />

    <a href="/laptop"> Kembali</a>

    {{-- <div class="form-group row">
        <label for="first_name" class="col-xs-3 col-form-label mr-2">First Name</label>
        <div class="col-xs-9">
        <input type="text" class="form-control" id="first_name" name="first_name">
        </div>
        </div> --}}

    <br />
    <br />

    <form action="/laptop/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="merk" class="col-sm-1 col-form-label">Merk Laptop</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="merk" name="merk">
            </div>
        </div>
        <div class="form-group row">
            <label for="stok" class="col-sm-1 col-form-label">Stock Laptop</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="stok" name="stok">
            </div>
        </div>
        <div class="form-group row">
            <label for="tersedia" class="col-sm-1 col-form-label">Tersedia</label>
            <div class="col-sm-9">
                <input class="form-control" type="text" pattern="[YyNn]" title="Hanya boleh Y atau N" id="tersedia" name="tersedia">
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
