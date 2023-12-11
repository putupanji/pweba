@extends('master2')

@section('title', 'Data Pegawai')
@section('konten')

    <label for="kategori" class="col-md-4 control-label">Pilih Kategori</label>

    <div class="col-md-6">
        <select id="kategori" class="form-control" name="kategori" required autofocus>
            @foreach ($kategori as $k)
                <option value="{{$k->Nama}}">{{$k->Nama}}</option>
            @endforeach
        </select>

        @if ($errors->has('kategori'))
            <span class="help-block">
                <strong>{{ $errors->first('kategori') }}</strong>
            </span>
        @endif

        <a href="/kategori/hasilKategori" class="btn btn-primary">Kirim</a>
    </div>
</div>

@endsection
