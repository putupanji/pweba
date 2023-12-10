@extends('master2')

@section('title', 'Data Pegawai')
@section('konten')

    <br />
    <h2>Putu Panji Wiradharma</h2>
    <h3>PWEB A - 5026221170</h3>

    <br />
    <br />

    <a href="/karyawan/tambahKaryawan" class="btn btn-primary"> + Tambah Karyawan Baru</a>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Opsi</th>
        </tr>
        @foreach ($karyawan as $k)
            <tr>
                <td>{{ $k->kodepegawai }}</td>
                <td>
                    <?php
                    echo strtoupper($k->namalengkap);
                    ?>
                </td>
                <td>
                    <?php
                    echo strtolower($k->divisi);
                    ?>
                </td>
                <td>{{ $k->departemen }}</td>
                <td>
                    <a href="/karyawan/hapus/{{ $k->kodepegawai }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
