<!-- app/views/user/index.php -->
<?php
session_start(); // Pastikan session sudah dimulai
if (isset($_SESSION['message'])) {
    echo "<script>alert('" . htmlspecialchars($_SESSION['message']) . "');</script>";
    unset($_SESSION['message']); // Hapus pesan setelah ditampilkan
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Departemen Karyawan</title>
    <style>
        /* Reset and Basic Styling */
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

        .nav-link i {
            font-size: 1.25rem;
            margin-right: 10px;
            color: #666;
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

        table,
        th,
        td {
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

        .btn-warning,
        .btn-danger {
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
                    <a href="/departemen/index" class="nav-link active <?php echo $page == 'departemen' ? 'active' : ''; ?>">
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
            <a href="/departemen/create" class="btn">Tambah Departemen</a>

            <table>
                <tr>
                    <th>No.</th>
                    <th>Id Departeman</th>
                    <th>Nama Departemen</th>
                    <th>Tugas Departemen</th>
                    <th>Aksi</th>
                </tr>
                <?php
                $no = 1;
                foreach ($DataDepartemen as $row) {
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['id_departemen']; ?></td>
                        <td><?php echo $row['nama_departemen']; ?></td>
                        <td><?php echo $row['job_desk']; ?></td>
                        <td>
                            <a href="/departemen/edit/<?php echo $row['id_departemen']; ?>" class="btn-warning">Edit</a>
                            <a href="/departemen/delete/<?php echo $row['id_departemen']; ?>" class="btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>