<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Data Karyawan</title>
</head>
<body>
    <h1>Edit Data Karyawan</h1>

    <form action="/data_karyawan/update" method="post">
        <label for="id_karyawan">Id Karyawan:</label>
        <input type="number" name="id_karyawan" value="<?= $data_karyawan['id_karyawan'];?>">

        <label for="nama">Nama</label>
        <input type="text" name="nama" value="<?= $data_karyawan['nama']; ?>">
        
        <label for="gaji">Gaji</label> 
        <input type="number" name="gaji" value="<?= $data_karyawan['gaji']; ?>">

        <label for="no_hp">No HP</label> 
        <input type="number" name="no_hp" value="<?= $data_karyawan['no_hp']; ?>">

        <label for="email">Email</label> 
        <input type="text" name="email" value="<?= $data_karyawan['email']; ?>">

        <label for="id_departemen">Id departemen</label> 
        <input type="number" name="number" value="<?= $data_karyawan['id_departemen']; ?>">

        <label for="id_pelatihanKaryawan">Id pelatihan karyawan</label> 
        <input type="number" name="id_pelatihanKaryawan" value="<?= $data_karyawan['id_pelatihanKaryawan']; ?>">

        <button type="submit">Simpan</button>
    </form>
</body>
</html>