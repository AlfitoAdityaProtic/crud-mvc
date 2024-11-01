<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tampil Departemen Karyawan</title>
    <style>
        /* Gaya untuk dark mode */
        body.dark-mode {
            background-color: #343a40;
            color: white;
        }

        table.dark-mode {
            background-color: #495057;
            color: white;
        }

        h1 {
            font-weight: 700;
            /* Berat font untuk judul */
            font-size: 2rem;
            /* Ukuran font judul */
        }


        table.dark-mode th {
            background-color: #6c757d;
            color: white;
        }

        table.dark-mode td {
            border-color: #6c757d;
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

    <div class="container mt-4">
        <h1 class="pb-4 text-center">Data Departemen</h1>
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <a href="/departemen/create" class="btn btn-primary">Tambah Departemen</a>
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
                    <table class="table table-bordered table-striped table-hover" id="departemenTable">
                        <thead class="table-light">
                            <tr>
                                <th class="text-center">No.</th>
                                <th class="text-center">Nama Departemen</th>
                                <th class="text-center">Tugas Departemen</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($DataDepartemen as $row) {
                            ?>
                                <tr>
                                    <td class="text-center"><?php echo $no++; ?></td>
                                    <td class="text-center"><?php echo $row['nama_departemen']; ?></td>
                                    <td class="text-center"><?php echo $row['job_desk']; ?></td>
                                    <td class="text-center">
                                        <a href="/departemen/edit/<?php echo $row['id_departemen']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="/departemen/delete/<?php echo $row['id_departemen']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus Departemen ini?');">Delete</a>
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
        const departemenTable = document.getElementById('departemenTable');

        searchInput.addEventListener('keyup', function() {
            const filter = searchInput.value.toLowerCase();
            const rows = departemenTable.getElementsByTagName('tbody')[0].getElementsByTagName('tr');

            for (let i = 0; i < rows.length; i++) {
                const cells = rows[i].getElementsByTagName('td');
                let match = false;

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
</body>

</html>