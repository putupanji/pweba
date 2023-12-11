@extends('master2')
@section('title', 'Kategori')

@section('konten')
    <h3>Pilih Kategori</h3>

    <form action="/hasilcombo" method="GET">
        <select name="selectedCategory" id="selectedCategory" class="form-control">
            @foreach($kategori as $k)
                <option value="{{ $k->ID }}">{{ $k->Nama }}</option>
            @endforeach
        </select>
        <br>
        <input type="submit" value="Kirim" class="btn btn-primary">
    </form>



    <!-- Tambahkan tombol atau logika yang sesuai di sini -->
@endsection
