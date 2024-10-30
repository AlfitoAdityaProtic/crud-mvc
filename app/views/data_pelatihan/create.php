<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data Pelatihan</title>
</head>
<body>
    <h1>Tambah Data Pelatihan</h1>

    <form action="/data_pelatihan/store" method="post">
        <label for="id_pelatihan">ID Pelatihan</label>
        <input type="text" name="id_pelatihan" id="id_pelatihan" required>
        
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" required>
        
        <label for="keterangan">Keterangan</label>
        <input type="text" name="keterangan" id="keterangan" required>
        
        <button type="submit">Simpan</button>

    </form>
</body>
</html>