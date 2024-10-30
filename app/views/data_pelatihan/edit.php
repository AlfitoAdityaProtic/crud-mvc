<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Data Pelatihan</title>
</head>
<body>
    <h1>Edit Data Pelatihan</h1>

    <form action="/data_pelatihan/update" method="post">
        <label for="id_pelatihan">ID Pelatihan</label>
        <input type="text" name="id_pelatihan" value="<?= $DataPelatihan['id_pelatihan'];?>">

        <label for="nama">Nama</label>
        <input type="text" name="nama" value="<?= $DataPelatihan['nama']; ?>">
        
        <label for="keterangan">Keterangan</label> 
        <input type="text" name="keterangan" value="<?= $DataPelatihan['keterangan']; ?>">

        <button type="submit">Simpan</button>
    </form>
</body>
</html>