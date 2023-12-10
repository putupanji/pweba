@extends('master2')

@section('title', 'Data Pegawai')
@section('konten')

<br/>
<h2>Putu Panji Wiradharma</h2>
<h3>PWEB A - 5026221170</h3>

<br/>
<br/>

<a href="/laptop/tambahLaptop" class="btn btn-primary"> + Tambah Laptop Baru</a>

<br/>
<br/>
<p>Cari Data Laptop :</p>
	<form action="/laptop/cari" method="GET" class="form-inline">
		<input class="form-control" type="text" name="cari" placeholder="Cari Merk Laptop .." value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input type="submit" value="CARI" class="btn btn-info">
	</form>
<br/>

<table class="table table-striped table-hover">
    <tr>
        <th>Kode Laptop</th>
        <th>Merk Laptop</th>
        <th>Stock Laptop</th>
        <th>Tersedia</th>
        <th>Opsi</th>
    </tr>
    @foreach ($laptop as $l)
        <tr>
            <td>{{ $l->kodelaptop }}</td>
            <td>{{ $l->merklaptop }}</td>
            <td>{{ $l->stocklaptop }}</td>
            <td>{{$l->tersedia}} </td>
            <td>
                <a href="/laptop/view/{{ $l->kodelaptop }}" class="btn btn-success">View</a>
                |
                <a href="/laptop/editLaptop/{{ $l->kodelaptop }}" class="btn btn-warning">Edit</a>
                |
                <a href="/laptop/hapus/{{ $l->kodelaptop }}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
    @endforeach
</table>

{{$laptop->links()}} <!-- kita buat link otomatis buat pagination  -->

@endsection
