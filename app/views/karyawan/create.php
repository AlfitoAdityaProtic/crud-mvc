<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>
</head>
<body>
    <h2>Data Karyawan</h2>
    <form action="/karyawan/store" method="post">
        <input type="hidden" id="id_karyawan" name="id_karyawan"><br>

        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br>

        <label for="jabatan">Jabatan:</label>
        <input type="text" id="jabatan" name="jabatan" required><br>

        <label for="gaji">Gaji:</label>
        <input type="number" id="gaji" name="gaji" required><br>

        <label for="noHP">No HP:</label>
        <input type="number" id="noHP" name="noHP" required><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required><br>

        <label for="id_departemen">ID Departemen:</label>
        <input type="number" id="id_departemen" name="id_departemen" required><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
