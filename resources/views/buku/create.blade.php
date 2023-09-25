@extends('master')

@section('content')
<div class='container'>
    <h4>Tambah Buku</h4>
    <form method="post" action="{{route('buku.store')}}">
        @csrf
        <div><input type="text" name="judul"></div>
        <div>penulis<input type="text" name="penulis"></div>
        <div>Harga<input type="text" name="harga"></div>
        <div>tgl_terbit<input type="text" name="tgl_terbit"></div>
        <div><button type="submit">Simpan</div>
        <a href="/buku">Batal</a>
    </form>
</div>
@endsection
