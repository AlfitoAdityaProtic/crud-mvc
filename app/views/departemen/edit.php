<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Data Departemen</title>
</head>
<body>
    <h1>Edit Data Departemen</h1>

    <form action="/departemen/store" method="post">
        <label for="id_pelatihan">ID Departemen</label>
        <input type="text" name="id_departemen" value="<?= $data['id_departemen'];?>">

        <label for="nama_departemen">Nama Departemen</label>
        <input type="text" name="nama_departemen" value="<?= $data['nama_departemen']; ?>">
        
        <label for="job_desk">Tugas Departemen</label> 
        <input type="text" name="job_desk" value="<?= $data['job_desk']; ?>">

        <button type="submit">Simpan</button>
    </form>
</body>
</html>