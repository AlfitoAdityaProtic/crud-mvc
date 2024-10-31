<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Pelatihan Karyawan</title>
</head>
<body>
    <h1>Tambah Pelatihan Karyawan</h1>

    <form action="/pelatihan_karyawan/update" method="post">
        <label for="id_pelatihanKaryawan">ID Pelatihan Karyawan</label>
        <input type="integer" name="id_pelatihanKaryawan" id="id_pelatihanKaryawan" required>
        
        <label for="id_karyawan">ID Karyawan</label>
        <input type="text" name="id_karyawan" id="id_karyawan" required>
        
        <label for="id_pelatihan">ID Pelatihan</label>
        <input type="text" name="id_pelatihan" id="id_pelatihan" required>

        <label for="tanggal">Tanggal</label>
        <input type="datetime-local" name="tanggal" required placeholder="2024-10-30T10:00">

        <label for="keterangan">Keterangan</label>
        <input type="text" name="keterangan" required>
        
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
