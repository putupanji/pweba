@extends('master2')
@section('title', 'Edit Pegawai')
@section('konten')
    <br />
    <h2>Putu Panji Wiradharma</h2>
    <h3>PWEB A - 5026221170</h3>

    <br />
    <br />
    <a href="/laptop"> Kembali</a>

    <br />
    <br />

    @foreach ($laptop as $l)
        <form action="/laptop/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $l->kodelaptop }}">
            <div class="form-group row">
                <label for="merk" class="col-sm-1 col-form-label">Merk Laptop</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="merk" name="merk" required="required"
                        value="{{ $l->merklaptop }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="stok" class="col-sm-1 col-form-label">Jabatan</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="stok" name="stok" required="required"
                        value="{{ $l->stocklaptop }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="tersedia" class="col-sm-1 col-form-label">Tersedia</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="tersedia" name="tersedia" required="required"
                        value="{{ $l->tersedia }}">
                </div>
            </div>

            <input type="submit" class="btn btn-primary" value="Simpan Data">
            {{-- {{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
		<input type="submit" value="Simpan Data"> --}}
        </form>
    @endforeach
@endsection
