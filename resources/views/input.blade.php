<!DOCTYPE html>
<html>
<head>
    <title>Input</title>
</head>
<body>

    <h3>Input Buku</h3>

    <a href="/buku"> Kembali</a>
    
    <br/>
    <br/>

    <form action="/buku/data" method="post">
        {{ csrf_field() }}
        Judul <input type="text" name="judul" required="required"> <br/>
        Penerbit <input type="text" name="penerbit" required="required"> <br/>
        Tahun Terbit <input type="year" name="tahun_terbit" required="required"> <br/>
        Pengarang <input type="text" name="pengarang" required="required"> <br/>
        <input type="submit" value="Simpan Data">
    </form>

</body>
</html>