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

        body,
        html {
            height: 100%;
            display: flex;
            flex-direction: column;
            background-color: #f8f9fa;
        }

        .container-fluid {
            display: flex;
            flex: 1;
            position: relative; /* Allows absolute positioning of child elements */
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
            display: flex;
            align-items: center; /* Center vertically */
            justify-content: center; /* Center horizontally */
            position: relative; /* Allows the welcome-container to position relative to this */
            overflow: hidden; /* Ensure content does not overflow */
        }

        .welcome-container {
            text-align: center;
            padding: 40px 20px;
            max-width: 800px; /* Adjusted max-width for better fit */
            margin: 0 auto;
            position: relative; /* Positioning for absolute children */
            z-index: 2; /* Ensure the text is above the image */
            background-color: rgba(255, 255, 255, 0.9); /* Slightly more opaque background */
            border-radius: 15px; /* Rounded corners */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .welcome-header {
            margin-bottom: 20px; /* Space below the header */
            padding: 20px; /* Padding inside the header */
            color: #333; /* Text color */
        }

        .welcome-title {
            font-size: 2.2rem; /* Title size */
            font-weight: 600; /* Bold */
            margin-bottom: 10px; /* Space below the title */
        }

        .welcome-subtitle {
            font-size: 1.5rem; /* Subtitle size */
            font-weight: 400; /* Normal weight */
            margin-bottom: 20px; /* Space below subtitle */
            color: #666; /* Slightly darker color for subtitle */
        }

        .footer {
            background-color: #f1f1f1;
            padding: 20px;
            text-align: center;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        .footer p {
            margin: 5px 0; /* Spacing between footer lines */
            font-size: 1rem;
            color: #555; /* Slightly darker text */
        }

        .welcome-image {
            position: absolute; /* Absolute positioning to place behind content */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover; /* Cover the entire container */
            z-index: 1; /* Behind the welcome-container */
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
            <img src="https://lh3.googleusercontent.com/p/AF1QipMF3QfzryLVOYJbAidMd18RQH7AHeqjkJW57E6v=s1360-w1360-h1020" alt="Welcome Image" class="welcome-image">
            <div class="welcome-container">
                <div class="welcome-header">
                    <h1 class="welcome-title">Selamat Datang</h1>
                    <h1 class="welcome-title">Sistem Informasi Karyawan</h1>
                    <h3 class="welcome-subtitle">Kelompok 3</h3> 
                    <h3 class="welcome-subtitle">Kelas Teknik Informatika 2A</h3>
                    <!-- Changed h1 to h3 for semantic correctness -->
                </div>

                <?php
                // Pastikan variabel $page didefinisikan
                if (!isset($page)) {
                    $page = 'dashboard'; // Set default page
                }

                switch ($page) {
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
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>Politeknik Negeri Cilacap</p>
        <p>Dibuat oleh:</p>
        <p>Afito Dwi Aditya, Muhamad Subhi Adzani, Alissya Iklima, Muhammad Rifandi</p>
    </div>
</body>

</html>
