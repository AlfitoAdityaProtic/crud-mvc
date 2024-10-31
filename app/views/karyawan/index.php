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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tampil Data Karyawan</title>
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
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/karyawan/index" class="nav-link active <?php echo $page == 'karyawan' ? 'active' : ''; ?>">
                        <span>Data Karyawan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/departemen/index" class="nav-link <?php echo $page == 'departemen' ? 'active' : ''; ?>">
                        <span>Data Departemen</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/absensi/index" class="nav-link <?php echo $page == 'absensi' ? 'active' : ''; ?>">
                        <span>Data Absensi</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/data_pelatihan/index" class="nav-link <?php echo $page == 'data_pelatihan' ? 'active' : ''; ?>">
                        <span>Data Pelatihan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/pelatihan_karyawan/index" class="nav-link <?php echo $page == 'pelatihan' ? 'active' : ''; ?>">
                        <span>Pelatihan Karyawan</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Content -->
        <div class="content">
            <a href="/karyawan/create" class="btn btn-primary">Tambah Data Karyawan</a>

            <table>
                <thead>
                    <tr class="table-active table-success">
                        <th>No</th>
                        <th>Id Karyawan</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Gaji</th>
                        <th>No Hp</th>
                        <th>Email</th>
                        <th>Nama Departeman</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($data_karyawan as $row): ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo htmlspecialchars($row['id_karyawan']); ?></td>
                            <td><?php echo htmlspecialchars($row['nama']); ?></td>
                            <td><?php echo htmlspecialchars($row['jabatan']); ?></td>
                            <td><?php echo htmlspecialchars($row['gaji']); ?></td>
                            <td><?php echo htmlspecialchars($row['noHP']); ?></td>
                            <td><?php echo htmlspecialchars($row['email']); ?></td>
                            <td><?php echo htmlspecialchars($this->DepartemenModels->getNamaDepartement($row['id_departemen'])); ?></td>
                            <td>
                                <a href="/karyawan/edit/<?php echo $row['id_karyawan']; ?>" class="btn-warning">Edit</a>
                                <a href="/karyawan/delete/<?php echo $row['id_karyawan']; ?>" class="btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>