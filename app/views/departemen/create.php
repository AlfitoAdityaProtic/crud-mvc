<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Departemen</title>
</head>
<body>
    <h1>Tambah Departemen Karyawan</h1>

    <form action="/departemen/store" method="post">
        <label for="id_departemen">ID Departemen</label>
        <input type="text" name="id_departemen" id="id_departemen" required>
        
        <label for="nama_departemen">Nama Departemen</label>
        <input type="text" name="nama_departemen" id="nama_departemen" required>
        
        <label for="job_desk">Tugas Departemen</label>
        <input type="text" name="job_desk" id="job_desk" required>
        
        <button type="submit">Simpan</button>

    </form>
</body>
</html>