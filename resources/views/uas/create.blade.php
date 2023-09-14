@extends('layout.master')

@section('judul')
	Tambah Mahasiswa
@endsection

@section('content')
<form method="post" action="/uas">
    @csrf
    <div class="form-group">
        <label>Npm</label>
        <input type="number" name="npm" value="" class="form-control">
    </div>
    @error('Npm')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" value="" class="form-control">
    </div>
    @error('Nama')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label>Alamat</label>
        <input name="text" value="alamat" class="form-control">
    </div>
    @error('Alamat')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <button type="submit" class=" btn btn-primary">Simpan</button>
</form>

@endsection