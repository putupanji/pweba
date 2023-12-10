@extends('master2')
@section('title', 'View Pegawai')
@section('konten')

    <br />
    <h2>Putu Panji Wiradharma</h2>
    <h3>PWEB A - 5026221170</h3>

    <br />
    <br />
    <div class="container align-center">
        <div class="row bg-light d-flex align-item-center justify-content-center">
            <div class="col-2 d-flex justify-content-center m-3" style="border-style: solid;">

            </div>
            <div class="col-8 d-flex flex-column m-3">
                @foreach ($laptop as $l)
                    <input type="hidden" name="id" value="{{ $l->kodelaptop }}">
                    <p>Merk Laptop: {{ $l->merklaptop }}</p>
                    <p>Stock Laptop: {{ $l->stocklaptop }}</p>
                    <p>Tersedia: {{ $l->tersedia }}</p>

                    <div class="d-flex justify-content-between align-item-center">
                        <a href="/laptop" class="btn btn-primary">Kembali</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
