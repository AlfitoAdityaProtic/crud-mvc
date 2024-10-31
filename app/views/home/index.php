<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>Kelompok 3</title>
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
        <h1 class="pb-4 text-start">Kelompok 4 Karyawan</h1>
        <div class="card">
            <div class="card-body">
                
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