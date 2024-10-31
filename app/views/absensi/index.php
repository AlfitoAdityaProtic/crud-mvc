<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>Data Absensi</title>
    <style>
        /* Reset and Basic Styling */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body, html {
            height: 100%;
            display: flex;
            background-color: #f8f9fa;
        }

        .container-fluid {
            display: flex;
            width: 100%;
        }

        /* Sidebar Styling */
        .sidebar {
            width: 220px;
            min-height: 100vh;
            background-color: #fff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            padding: 20px;
        }

        .sidebar h4 {
            margin-bottom: 20px;
            font-size: 1.25rem;
            color: #333;
        }

        .nav {
            list-style-type: none;
        }

        .nav-item {
            width: 100%;
        }

        .nav-link {
            display: flex;
            align-items: center;
            color: #333;
            padding: 12px 15px;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .nav-link:hover {
            background-color: #f1f3f5;
        }

        .nav-link.active {
            background-color: #e9ecef;
            color: #0d6efd;
        }

        /* Content Area Styling */
        .content {
            flex: 1;
            padding: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-family: Verdana, sans-serif;
        }

        table, th, td {
            border: 1px solid #007bff;
            text-align: center;
            padding: 8px;
        }

        th {
            background-color: #d4edda;
            color: #333;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .btn-warning, .btn-danger {
            color: #333;
            padding: 5px 10px;
            border-radius: 3px;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        .btn-warning {
            background-color: #fff3cd;
        }

        .btn-danger {
            background-color: #f8d7da;
        }

        .btn-warning:hover {
            background-color: #ffeeba;
        }

        .btn-danger:hover {
            background-color: #f5c6cb;
        }
    </style>
</head>

<body>
<div class="container-fluid">
        <!-- Sidebar -->
        <div class="sidebar">
            <h4>SI Karyawan</h4>
            <ul class="nav">
                <li class="nav-item">
                    <a href="/dashboard/index" class="nav-link">
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/karyawan/index" class="nav-link">
                        <span>Data Karyawan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/departemen/index" class="nav-link">
                        <span>Data Departemen</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/absensi/index" class="nav-link active">
                        <span>Data Absensi</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/data_pelatihan/index" class="nav-link">
                        <span>Data Pelatihan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/pelatihan_karyawan/index" class="nav-link">
                        <span>Pelatihan Karyawan</span>
                    </a>
                </li>
            </ul>
        </div>

    <!-- Content Start -->
    <div class="container mt-4">
        <h1 class="pb-4 text-center">Data Absensi</h1>
        <div class="card">
            <div class="card-body align-items-end">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <a href="/absensi/create" class="btn btn-primary">Tambah Data Absensi</a>
                </div>

                <div class="table-responsive">
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