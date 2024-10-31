<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Karyawan</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body, html {
            height: 100%;
            display: flex;
            flex-direction: column;
            background-color: #f8f9fa;
        }

        .container-fluid {
            display: flex;
            flex: 1;
        }

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

        .nav-link i {
            font-size: 1.25rem;
            margin-right: 10px;
            color: #666;
        }

        .content {
            flex: 1;
            padding: 20px;
        }

        .welcome-message {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: #333;
        }

        .office-image {
            max-width: 100%; /* Responsif */
            height: auto; /* Jaga aspek rasio */
            margin-bottom: 20px; /* Jarak di bawah gambar */
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="sidebar">
            <h4>SI Karyawan</h4>
            <ul class="nav">
                <li class="nav-item">
                    <a href="dashboard/index" class="nav-link <?php echo (isset($page) && $page == 'dashboard') ? 'active' : ''; ?>">
                        <i class='bx bxs-dashboard'></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="karyawan/index" class="nav-link <?php echo (isset($page) && $page == 'karyawan') ? 'active' : ''; ?>">
                        <i class='bx bxs-user-detail'></i>
                        <span>Data Karyawan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="departemen/index" class="nav-link <?php echo (isset($page) && $page == 'departemen') ? 'active' : ''; ?>">
                        <i class='bx bxs-buildings'></i>
                        <span>Data Departemen</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="absensi/index" class="nav-link <?php echo (isset($page) && $page == 'absensi') ? 'active' : ''; ?>">
                        <i class='bx bxs-time-five'></i>
                        <span>Data Absensi</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="data_pelatihan/index" class="nav-link <?php echo (isset($page) && $page == 'data_pelatihan') ? 'active' : ''; ?>">
                        <i class='bx bxs-graduation'></i>
                        <span>Data Pelatihan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pelatihan_karyawan/index" class="nav-link <?php echo (isset($page) && $page == 'pelatihan_karyawan') ? 'active' : ''; ?>">
                        <i class='bx bxs-graduation'></i>
                        <span>Pelatihan Karyawan</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Content -->
        <div class="content">
            <div class="welcome-message">Selamat datang di Sistem Informasi Karyawan!</div>
            <img src="https://www.kantorkita.co.id/blog/wp-content/uploads/2022/10/\-Tata-Ruang-Kantor-dan-Jenisnya.jpg">
            
            <?php
            // Pastikan variabel $page didefinisikan
            if (!isset($page)) {
                $page = 'dashboard'; // Set default page
            }

            switch($page) {
                case 'karyawan':
                    include 'karyawan/index.php'; // Jalur file harus relatif dari file ini
                    break;
                case 'departemen':
                    include 'departemen/index.php'; // Jalur file harus relatif dari file ini
                    break;
                case 'absensi':
                    include 'absensi/index.php'; // Jalur file harus relatif dari file ini
                    break;
                case 'data_pelatihan':
                    include 'data_pelatihan/index.php'; // Jalur file harus relatif dari file ini
                    break;
                case 'pelatihan_karyawan':
                    include 'pelatihan_karyawan/index.php'; // Jalur file harus relatif dari file ini
                    break;
            }
            ?>
        </div>
    </div>
</body>
</html>
