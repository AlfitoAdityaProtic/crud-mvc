<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>Form Tambah Departemen</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 600px;
            margin-top: 50px;
        }

        h1 {
            font-weight: 700;
            font-size: 1.8rem;
            margin-bottom: 30px;
            text-align: center;
        }

        .btn-primary {
            font-weight: 500;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Tambah Departemen Karyawan</h1>
        <div class="card">
            <div class="card-body">
                <form action="/departemen/store" method="post">
                    <div class="mb-3">
                        <label for="nama_departemen" class="form-label">Nama Departemen</label>
                        <input type="text" name="nama_departemen" id="nama_departemen" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="job_desk" class="form-label">Tugas Departemen</label>
                        <input type="text" name="job_desk" id="job_desk" class="form-control" required>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="/departemen/index" class="btn btn-secondary ms-2">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
