<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>Form Tambah Pelatihan Karyawan</title>
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
        <h1>Edit Pelatihan Karyawan</h1>
        <div class="card">
            <div class="card-body">

                <form action="/pelatihan_karyawan/update" method="post">
                    <input type="hidden" name="id_pelatihanKaryawan" value="<?= $pelatihan['id_pelatihanKaryawan'] ?>" require>

                    <div class="mb-3">
                        <label for="id_karyawan" class="form-label">Karyawan</label>
                        <select name="id_karyawan" id="id_karyawan" class="form-control">
                            <option value="">Pilih Karyawan</option>
                            <?php foreach ($data_karyawan as $karyawan) : ?>
                                <option value="<?= $karyawan['id_karyawan'] ?>" <?php if ($karyawan['id_karyawan'] == $pelatihan['id_karyawan']) echo 'selected'; ?>><?= $karyawan['nama'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="id_pelatihan" class="form-label">Pelatihan</label>
                        <select name="id_pelatihan" id="id_pelatihan" class="form-control">
                            <option value="">Pilih Pelatihan</option>
                            <?php foreach ($data_pelatihan as $pelatihans) : ?>
                                <option value="<?= $pelatihans['id_pelatihan'] ?>" <?php if ($pelatihans['id_pelatihan'] == $pelatihan['id_pelatihan']) echo 'selected' ?>><?= $pelatihans['nama'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="tanggal_dan_waktu" class="form-label">Tanggal dan Waktu</label>
                        <input type="datetime-local" name="tanggal" id="tanggal" class="form-control" value="<?= $pelatihan['tanggal'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <input type="keterangan" name="keterangan" id="keterangan" class="form-control" value="<?= $pelatihan['keterangan'] ?>" required>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="/pelatihan_karyawan/index" class="btn btn-secondary ms-2">Kembali</a>
                    </div>
                </form>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>