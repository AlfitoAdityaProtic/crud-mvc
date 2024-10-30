<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data Absensi</title>
</head>
<body>
    <h1>Tambah Data Absensi</h1>

    <form action="/absensi/store" method="post">

        <label for="id_karyawan">ID Karyawan</label>
        <input type="text" name="id_karyawan" id="id_karyawan" required>
        
        <label for="tanggal_dan_waktu">Tanggal dan Waktu</label>
        <input type="datetime-local" name="tanggal_dan_waktu" id="tanggal_dan_waktu" required>

        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="" disabled selected>Pilih Kehadiran</option>
            <option value="Hadir" >Hadir</option>
            <option value="Tidak Hadir" >Tidak Hadir</option>
            <option value="Izin" >Izin</option>
            <option value="Sakit" >Sakit</option>
        </select><br>

        
        <label for="keterangan">Keterangan</label>
        <input type="text" name="keterangan" id="keterangan" required>
        
        <button type="submit">Simpan</button>

    </form>
</body>
</html>