<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Data Karyawan</title>
</head>
<body>
    <h1>Edit Data Karyawan</h1>

    <form action="/karyawan/store" method="post">
    <input type="hidden" name="id_karyawan" value="<?php echo $karyawan['id_karyawan']; ?>">
    <label>Nama:</label>
    <input type="text" name="nama" required>
    <label>Jabatan:</label>
    <input type="text" name="jabatan" required>
    <label for="gaji">Gaji:</label>
    <input type="number" name="gaji" required>
    <label>No HP:</label>
    <input type="text" name="noHP" required>
    <label>Email:</label>
    <input type="email" name="email" required>
    <label>ID Departemen:</label>
    <input type="number" name="id_departemen" required>
    <button type="submit">Update</button>
</form>

</body>
</html>