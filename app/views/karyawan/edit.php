<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>Form Edit Data Karyawan</title>
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
        <h1>Edit Data Karyawan</h1>
        <div class="card">
            <div class="card-body">
                <form action="/karyawan/update" method="post">
                    <input type="hidden" name="id_karyawan" value="<?= $data_karyawan['id_karyawan'] ?>" required>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" value="<?= $data_karyawan['nama'] ?>" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="jabatan" class="form-label">Jabatan</label>
                        <input type="text" name="jabatan" value="<?= $data_karyawan['jabatan'] ?>" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="gaji" class="form-label">Gaji</label>
                        <input type="text" name="gaji" value="<?= $data_karyawan['gaji'] ?>" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="noHP" class="form-label">No HP</label>
                        <input type="text" name="noHP" value="<?= $data_karyawan['noHP'] ?>" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" value="<?= $data_karyawan['email']  ?>" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="id_departemen" class="form-label">Departemen</label>
                        <select name="id_departemen" id="id_departemen" class="form-control">
                            <option value="">Pilih Departemen</option>
                            <?php foreach ($data_departement as $Departemen) : ?>
                                <option value="<?= $Departemen['id_departemen'] ?>"
                                    <?php if ($Departemen['id_departemen'] == $data_karyawan['id_departemen']) echo 'selected'; ?>>
                                    <?= $Departemen['nama_departemen'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="/karyawan/index" class="btn btn-secondary ms-2">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>