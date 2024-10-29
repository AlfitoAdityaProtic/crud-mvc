<!-- app/views/user/index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>tampil Data Pelatihan</title>
</head>
<body>
<a href="/data_pelatihan/create">Tambah Pelatihan</a>

    <table style="font-family: verdana"  class="table table-bordered border-primary">
        <tr class="table-active table-success">
            <th class="text-center">No.</th>
			<th class="text-center">Id Pelatihan</th>
			<th class="text-center">Nama</th>
			<th class="text-center">Keterangan</th>
			<th class="text-center">Aksi</th>

        </tr>
        <?php
        $no = 1;
        foreach($DataPelatihan as $row){
        ?>
        <tr>
            <td class="text-center"><?php echo $no++; ?></td>
            <td class="text-center"><?php echo $row['id_pelatihan']; ?></td>
            <td class="text-center"><?php echo $row['nama']; ?></td>
            <td class="text-center"><?php echo $row['keterangan']; ?></td>
            <td>
                <a href="/data_pelatihan/edit?id=<?php echo $row['id_pelatihan']; ?>" class="btn btn-warning">Edit</a>
                <a href="/data_pelatihan/delete?id=<?php echo $row['id_pelatihan']; ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        <?php 
        } 
        ?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>