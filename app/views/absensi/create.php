<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>Form Tambah Data Absensi</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 600px;
            margin-top: 50px;
        }

        .form-label {
            font-weight: 500;
        }

        h1 {
            font-weight: 700;
            font-size: 1.8rem;
            margin-bottom: 20px;
            text-align: center;
        }

        .btn-primary {
            font-weight: 500;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Tambah Data Absensi</h1>
        <div class="card">
            <div class="card-body">
                <form action="/absensi/store" method="post">

                    <div class="mb-3">
                        <label for="id_karyawan" class="form-label">Karyawan</label>
                        <select name="id_karyawan" id="id_karyawan" class="form-control">
                            <option value="">Pilih Karyawan</option>
                            <?php foreach ($DataKaryawan as $Karyawan) : ?>
                                <option value="<?= $Karyawan['id_karyawan'] ?>"><?= $Karyawan['nama'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_dan_waktu" class="form-label">Tanggal dan Waktu</label>
                        <input type="datetime-local" name="tanggal_dan_waktu" id="tanggal_dan_waktu" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select id="status" name="status" class="form-select" required>
                            <option value="" disabled selected>Pilih Kehadiran</option>
                            <option value="Hadir">Hadir</option>
                            <option value="Tidak Hadir">Tidak Hadir</option>
                            <option value="Izin">Izin</option>
                            <option value="Sakit">Sakit</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <input type="text" name="keterangan" id="keterangan" class="form-control" required>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="/absensi/index" class="btn btn-secondary ms-2">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>