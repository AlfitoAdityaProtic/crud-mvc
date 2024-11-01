<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>Kelompok 3</title>
    <style>
        body.dark-mode {
            background-color: #081024;
            color: white;
            font-family: 'Roboto', sans-serif;
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

        body {
            font-family: 'Roboto', sans-serif;
        }

        h1 {
            font-weight: 700;
            font-size: 2rem;
        }

        .table th,
        .table td {
            font-weight: 400;
        }

        .btn {
            font-weight: 700;
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
        <div class="card transparent">
            <h1 class="pb-4 text-center">Kelompok 3 Karyawan</h1>
            <div class="card-body">
                <h1 class="welcome-title text-center">Selamat Datang</h1>
                <h1 class="welcome-title text-center">Sistem Informasi Karyawan</h1>
                <div class="container text-center" data-aos="fade-up" data-aos-delay="100">
                    <span class="typed" data-typed-items="Kelompok 3, Alfito Dwi Aditya, Alissya Iklima Nur Ramadani, Muhammad Subhi Adzani, Muhammad Rifandi">Kelompok 3
                    </span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span><span
                        class="typed-cursor typed-cursor--blink" aria-hidden="true"></span>
                </div>
                <h3 class="welcome-subtitle text-center">Kelas Teknik Informatika 2A</h3>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>

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
        new Typed('.typed', {
            strings: ["Kelompok 3", "Alfito Dwi Aditya", "Alissya Iklima Nur Ramadani", "Muhammad Subhi Adzani", "Muhammad Rifandi"],
            typeSpeed: 100,
            backSpeed: 50,
            loop: true
        });
    </script>
</body>

</html>