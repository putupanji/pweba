@extends('master2')
@section('title', 'Keranjang Belanja')
@section('konten')

<br>
<br>


<a href="/keranjangbelanjaIndex/tambahBelanja" class="btn btn-primary"> Beli</a>

<br>
<br>


<table class="table table-striped table-hover">
    <tr>
        <th>Kode Pembelian</th>
        <th>Kode Barang</th>
        <th>Jumlah Pembelian</th>
        <th>Harga per item</th>
        <th>Total</th>
        <th>Action</th>
    </tr>
    @foreach ($keranjangbelanja as $kb)
        <tr>
            <td>{{ $kb->ID }}</td>
            <td>{{ $kb->KodeBarang }}</td>
            <td>{{ $kb->Jumlah }}</td>
            <td>
                <?php
                    echo number_format($kb->Harga,2);
                    // echo "Rp. " . number_format($kb->Harga) . ",-"
                ?>
            </td>
            <td>
                <?php
                    echo number_format($kb->Jumlah*$kb->Harga,2);
                    // echo "Rp. " . number_format($kb->Jumlah*$kb->Harga) . ",-"
                ?>
                {{-- {{$kb->Jumlah*$kb->Harga}} --}}
                {{-- @if ($n->Jumlah <= 40)
                    D
                @elseif ($n->NilaiAngka<=60)
                    C
                @elseif ($n->NilaiAngka<=80)
                    B
                @elseif ($n->NilaiAngka=>81)
                    A
                @endif --}}
            </td>
            <td>
                {{-- <a href="/keranjangbelanja/tambahBelanja{{ $kb->ID }}" class="btn btn-success">Beli</a> --}}
                <a href="/keranjangbelanjaIndex/hapus/{{ $kb->ID }}" class="btn btn-danger">Batal</a>
                {{-- {{$n->NilaiAngka*$n->SKS}} --}}
            </td>
        </tr>

    @endforeach
</table>


@endsection
