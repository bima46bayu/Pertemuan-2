<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <table class="table table-striped">
        <thead>
            <th>id</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Harga</th>
            <th>Tgl. Terbit</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            @foreach($data_buku as $buku)
                <tr>
                    <td>{{ $buku->id }}</td>
                    <td>{{ $buku->judul }}</td>
                    <td>{{ $buku->penulis}}</td>
                    <td>{{ "Rp ".number_format($buku->harga, 2, ',','.') }}</td>
                    <td>{{ $buku->tgl_terbit }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p align="right"><a href="{{route('buku.create')}}">Tambah Buku</a></p>
    <td>
        <form action="{{route('buku.destroy', $buku->id)}}" method="post">
            @csrf 
            <button onClick="return confirm('Yakin mau dihapus')">Hapus</button>
        </form>
    </td>
</body>
</html>