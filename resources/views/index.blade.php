<html>
<head>
    <title>Home</title>
</head>
<body>
    <h3>Buku</h3>
 
    <a href="/buku/input"> + Tambah Buku Baru</a>
    
    <br/>
    <br/>
 
    <table border="1">
        <tr>
            <th>id</th>
            <th>judul</th>
            <th>penerbit</th>
            <th>tahun terbit</th>
            <th>pengarang</th>
        </tr>
        @foreach($buku as $b)
        <tr>
            <td>{{ $b->id }}</td>
            <td>{{ $b->judul }}</td>
            <td>{{ $b->penerbit }}</td>
            <td>{{ $b->tahun_terbit }}</td>
            <td>{{ $b->pengarang }}</td>
            <td>
                <a href="/buku/edit/{{ $b->id }}">Edit</a>
                |
                <a href="/buku/hapus/{{ $b->id }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
 
 
</body>
</html>