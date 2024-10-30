<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Data Karyawan</title>
</head>
<body>
    <h1>Edit Data Karyawan</h1>

    <form action="/karyawan/update" method="post">
        <input type="hidden" name="id_karyawan" value="<?= $DataKaryawan['id_karyawan'];?>">

        <label for="nama">Nama</label>
        <input type="text" name="nama" value="<?= $DataKaryawan['nama']; ?>">

        <label for="jabatan">Jabatan</label>
        <input type="text" name="jabatan" value="<?= $DataKaryawan['jabatan']; ?>">

        <label for="gaji">Gaji</label>
        <input type="text" name="gaji" value="<?= $DataKaryawan['gaji']; ?>">

        <label for="noHP">NO HP</label>
        <input type="text" name="noHP" value="<?= $DataKaryawan['noHP']; ?>">

        <label for="email">Email</label>
        <input type="text" name="email" value="<?= $DataKaryawan['email']; ?>">

        <label for="id_departemen">Departemen</label>
        <input type="text" name="id_departemen" value="<?= $DataKaryawan['id_departemen']; ?>">

        <button type="submit">Simpan</button>
    </form>
</body>
</html> -->