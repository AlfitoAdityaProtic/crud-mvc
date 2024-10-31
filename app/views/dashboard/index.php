<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Sistem Informasi Karyawan</title>
    <style>
        /* CSS Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            display: flex;
        }

        .container-fluid {
            width: 100%;
            display: flex;
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

        .content {
            flex: 1;
            padding: 20px;
        }

        h1 {
            margin-top: 20px;
            font-size: 2rem;
            color: #333;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 20px;
        }

        .col-md-4 {
            flex: 1;
            min-width: 280px;
        }

        .card {
            border-radius: 8px;
            color: #fff;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 120px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .bg-primary {
            background-color: #007bff;
        }

        .bg-success {
            background-color: #28a745;
        }

        .bg-warning {
            background-color: #ffc107;
        }

        .card-header {
            font-size: 1.25rem;
            margin-bottom: 10px;
        }

        .card-title {
            font-size: 2rem;
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
                    <a href="/dashboard/index" class="nav-link <?php echo $page == 'dashboard' ? 'active' : ''; ?>">
                        <i class='bx bxs-dashboard'></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/karyawan/index" class="nav-link <?php echo $page == 'karyawan' ? 'active' : ''; ?>">
                        <i class='bx bxs-user-detail'></i>
                        <span>Data Karyawan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/departemen/index" class="nav-link <?php echo $page == 'departemen' ? 'active' : ''; ?>">
                        <i class='bx bxs-buildings'></i>
                        <span>Data Departemen</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/absensi/index" class="nav-link <?php echo $page == 'absensi' ? 'active' : ''; ?>">
                        <i class='bx bxs-time-five'></i>
                        <span>Data Absensi</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/data_pelatihan/index" class="nav-link <?php echo $page == 'data_pelatihan' ? 'active' : ''; ?>">
                        <i class='bx bxs-graduation'></i>
                        <span>Data Pelatihan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/pelatihan_karyawan/index" class="nav-link <?php echo $page == 'pelatihan' ? 'active' : ''; ?>">
                        <i class='bx bxs-graduation'></i>
                        <span>Pelatihan Karyawan</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Content -->
        <div class="content">
            <h1>Dashboard</h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="card bg-primary">
                        <div class="card-header">Total Karyawan</div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $totalKaryawan; ?></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-success">
                        <div class="card-header">Total Departemen</div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $totalDepartemen; ?></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-warning">
                        <div class="card-header">Total Data Pelatihan</div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $totalDataPelatihan; ?></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
