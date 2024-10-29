<!-- app/views/data_pelatihan/create.php -->
 <?php 
 require './app/controllers/UserController.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Input Data Pelatihan</title>

    <link href="style/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">

</head>

<body>
    <!-- <nav class="navbar navbar-default navbar-fixed-top">
						<div class="container-fluid">
								<div class="navbar-header">
										<a class="navbar-brand" href="index.php">
												<i class="glyphicon glyphicon-check"></i>
													Aplikasi CRUD PHP Menggunakan Metode MVC
										</a>
								</div>
						</div>
				</nav> -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h4>
                        <i class="glyphicon glyphicon-check"></i> Input Data Pelatihan
                    </h4>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Input Data Pelatihan</h3>
                    </div>

                    <div class="panel-body">
                        <div class="modal-body">
                            <form action="/data_pelatihan/store" method="POST">

                                <div class="form-group">
                                    <label>ID Pelatihan</label>
                                    <input type="number" class="form-control" name="id_pelatihan" maxlength="10" required />
                                </div>

                                <div class="form-group">
                                    <label>Nama Karyawan</label>
                                    <input type="text" class="form-control" name="nama" autocomplete="off" required />
                                </div>

                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <input type="text" class="form-control" name="keterangan" autocomplete="off" required />
                                </div>

                                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container-fluid">
            <p class="text-muted pull-left">&copy; 2017 <a href="https://www.linkedin.com/in/fattahul-akbar-80a109139/" target="_blank">Fattahul Akbar</a></p>
        </div>
    </footer>
</body>

</html>

<?php

if (isset($_POST['simpan'])) {
    $main = new UserController();
    $main->create();
}

?>