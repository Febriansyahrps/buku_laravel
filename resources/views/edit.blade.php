<!DOCTYPE html>
<html>
<head>
    <title>Edit</title>
</head>
<body>

    <h3>Edit Buku</h3>

    <a href="/buku"> Kembali</a>
    
    <br/>
    <br/>

    @foreach($buku as $b)
    <form action="/buku/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $b->id }}"> <br/>
        Judul <input type="text" required="required" name="judul" value="{{ $b->judul }}"> <br/>
        Penerbit <input type="text" required="required" name="penerbit" value="{{ $b->penerbit }}"> <br/>
        Tahun Terbit <input type="year" required="required" name="tahun_terbit" value="{{ $b->tahun_terbit }}"> <br/>
        Pengarang <input type="text" required="required" name="pengarang" value="{{ $b->pengarang }}"> <br/>
        <input type="submit" value="Simpan Data">
    </form>
    @endforeach
        
 
</body>
</html> 