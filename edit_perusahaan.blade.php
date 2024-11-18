@extends('layouts.app')

@section('title', 'Edit Perusahaan')
@section('header', 'Edit Perusahaan')

@section('content')
<form action="{{ route('perusahaan.update', $perusahaan->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="nama">Nama Perusahaan:</label>
        <input type="text" name="nama" value="{{ $perusahaan->nama }}" required>
    </div>
    <div>
        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" value="{{ $perusahaan->alamat }}" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ $perusahaan->email }}" required>
    </div>
    <div>
        <label for="telepon">Telepon:</label>
        <input type="text" name="telepon" value="{{ $perusahaan->telepon }}" required>
    </div>
    <div>
        <label for="jumlah_karyawan">Jumlah Karyawan:</label>
        <input type="number" name="jumlah_karyawan" value="{{ $perusahaan->jumlah_karyawan }}" required>
    </div>
    <button type="submit" class="btn btn-success">Perbarui</button>
</form>
@endsection
