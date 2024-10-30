<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Absensi</title>
</head>
<body>
    <h1>Edit Absensi Karyawan</h1>

    <form action="/absensi/update" method="post">
        <input type="hidden" name="id_absensi" value="<?= $DataAbsensi['id_absensi'];?>">

        <label for="id_karyawan">Masukan Id Karyawan</label>
        <input type="text" name="id_karyawan" value="<?= $DataAbsensi['id_karyawan']; ?>">

        <label for="tanggal_dan_waktu">Tanggal dan Waktu Absensi</label>
        <input type="datetime-local" name="tanggal_dan_waktu" value="<?= $DataAbsensi['tanggal_dan_waktu']; ?>">
        
        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="Hadir" <?php echo ($DataAbsensi['status'] == 'Hadir') ? 'selected' : ''; ?>>Hadir</option>
            <option value="Tidak Hadir" <?php echo ($DataAbsensi['status'] == 'Tidak Hadir') ? 'selected' : ''; ?>>Tidak Hadir</option>
            <option value="Izin" <?php echo ($DataAbsensi['status'] == 'Izin') ? 'selected' : ''; ?>>Izin</option>
            <option value="Sakit" <?php echo ($DataAbsensi['status'] == 'Sakit') ? 'selected' : ''; ?>>Sakit</option>
        </select><br>

        <label for="keterangan"Keterangan></label>
        <input type="text" name="keterangan" value="<?= $DataAbsensi['keterangan']; ?>">

        <button type="submit">Simpan</button>
    </form>
</body>
</html>