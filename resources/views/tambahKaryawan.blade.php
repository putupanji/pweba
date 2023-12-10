@extends('master2')
@section('title', 'Data Pegawai')
@section('konten')
    <br />
    <h2>Putu Panji Wiradharma</h2>
    <h3>PWEB A - 5026221170</h3>

    <br />
    <br />

    <a href="/karyawan"> Kembali</a>

    {{-- <div class="form-group row">
        <label for="first_name" class="col-xs-3 col-form-label mr-2">First Name</label>
        <div class="col-xs-9">
        <input type="text" class="form-control" id="first_name" name="first_name">
        </div>
        </div> --}}

    <br />
    <br />

    <form action="/karyawan/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="nama" class="col-sm-1 col-form-label">Nama Lengkap </label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
        </div>
        <div class="form-group row">
            <label for="divisi" class="col-sm-1 col-form-label">Divisi</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="divisi" name="divisi">
            </div>
        </div>
        <div class="form-group row">
            <label for="departemen" class="col-sm-1 col-form-label">Departemen</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="departemen" name="departemen">
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
