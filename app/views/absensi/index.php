<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>Data Absensi</title>
    <style>
        /* Gaya untuk dark mode */
        body.dark-mode {
            background-color: #081024;
            color: white;
            font-family: 'Roboto', sans-serif;
            /* Terapkan font Roboto */
        }

        table.dark-mode {
            background-color: #081024;
            color: white;
        }

        table.dark-mode th {
            background-color: #6c757d;
            color: white;
        }

        table.dark-mode td {
            border-color: #6c757d;
        }

        /* Gaya umum untuk halaman */
        body {
            font-family: 'Roboto', sans-serif;
            /* Terapkan font Roboto */
        }

        h1 {
            font-weight: 700;
            /* Berat font untuk judul */
            font-size: 2rem;
            /* Ukuran font judul */
        }

        .table th,
        .table td {
            font-weight: 400;
            /* Berat font untuk tabel */
        }

        .btn {
            font-weight: 700;
            /* Berat font untuk tombol */
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="/home/index">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="/absensi/index">Absensi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="/karyawan/index">Karyawan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="/departemen/index">Departemen</a>
                    </li>
                </ul>
                <button id="darkModeToggle" class="btn btn-secondary ms-auto">Dark Mode</button>
            </div>
        </div>
    </nav>

    <!-- Content Start -->
    <div class="container mt-4">
        <h1 class="pb-4 text-center">Data Absensi</h1>
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <a href="/absensi/create" class="btn btn-primary">Tambah Data Absensi</a>
                </div>

                <div class="table-responsive">
                <?php
                    if (isset($_SESSION['flash_message'])) {
                        if ($_SESSION['flash_message']['type'] == 'success') {
                            echo '<div class="alert alert-success" role="alert">' . $_SESSION['flash_message']['pesan'] . '</div>';
                            unset($_SESSION['flash_message']);
                        } elseif ($_SESSION['flash_message']['type'] == 'danger') {
                            echo '<div class="alert alert-danger" role="alert">' . $_SESSION['flash_message']['pesan'] . '</div>';
                            unset($_SESSION['flash_message']);
                        }
                    }
                    ?>
                    <table class="table table-striped table-bordered" id="absensiTable">
                        <thead class="table-light">
                            <tr>
                                <th class="text-center">No.</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Jabatan</th>
                                <th class="text-center">No HP</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Departemen</th>
                                <th class="text-center">Tanggal dan Waktu</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Keterangan</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($DataAbsensi as $row) {
                            ?>
                                <tr>
                                    <td class="text-center"><?php echo $no++; ?></td>
                                    <td class="text-center"><?php echo $row['nama']; ?></td>
                                    <td class="text-center"><?php echo $row['jabatan']; ?></td>
                                    <td class="text-center"><?php echo $row['noHP']; ?></td>
                                    <td class="text-center"><?php echo $row['email']; ?></td>
                                    <td class="text-center"><?php echo $row['nama_departemen']; ?></td>
                                    <td class="text-center"><?php echo $row['tanggal_dan_waktu']; ?></td>
                                    <td class="text-center"><?php echo $row['status']; ?></td>
                                    <td class="text-center"><?php echo $row['keterangan']; ?></td>
                                    <td class="text-center">
                                        <a href="/absensi/edit/<?php echo $row['id_absensi']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="/absensi/delete/<?php echo $row['id_absensi']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus Data Absen ini?');">Delete</a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        // Toggle Dark Mode
        const toggleButton = document.getElementById('darkModeToggle');
        const body = document.body;
        const table = document.querySelector('table');

        toggleButton.addEventListener('click', () => {
            body.classList.toggle('dark-mode');
            table.classList.toggle('dark-mode');

            // Ubah teks tombol sesuai dengan mode
            if (body.classList.contains('dark-mode')) {
                toggleButton.innerText = 'Light Mode';
            } else {
                toggleButton.innerText = 'Dark Mode';
            }
        });

        // Search Functionality
        const searchInput = document.getElementById('searchInput');
        const absensiTable = document.getElementById('absensiTable');

        searchInput.addEventListener('keyup', function() {
            const filter = searchInput.value.toLowerCase();
            const rows = absensiTable.getElementsByTagName('tbody')[0].getElementsByTagName('tr');

            for (let i = 0; i < rows.length; i++) {
                const cells = rows[i].getElementsByTagName('td');
                for (let j = 1; j < cells.length - 1; j++) { // Mulai dari 1 untuk melewati No. dan Aksi
                    if (cells[j].textContent.toLowerCase().includes(filter)) {
                        match = true;
                        break;
                    }
                }

                rows[i].style.display = match ? '' : 'none'; // Tampilkan atau sembunyikan baris
            }
        });
    </script>