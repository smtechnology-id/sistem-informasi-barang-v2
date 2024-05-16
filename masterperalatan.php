<?php
require 'function.php';
session_start();
if (!isset($_SESSION['log'])) {
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>PERALATAN</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html">Start Bootstrap</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Activity Log</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <?php include 'navbar.php'; ?>

                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">PERALATAN</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">SISTEM INFORMASI INVENTARISASI BMD</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <!-- Button to Open the Modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                Tambah Data
                            </button>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Barang</th>
                                            <th>Nomor Register</th>
                                            <th>Merk/Tipe</th>
                                            <th>Bahan</th>
                                            <th>Harga</th>
                                            <th>Tahun Perolehan</th>
                                            <th>Riwayat Perolehan</th>
                                            <th>Kondisi</th>
                                            <th>Aspek Legal</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $ambilsemuadataperalatan = mysqli_query($conn, "select * from peralatan");
                                        $i = 1;
                                        while ($data = mysqli_fetch_array($ambilsemuadataperalatan)) {
                                            $namabarang = $data['namabarang'];
                                            $nomorregister = $data['nomorregister'];
                                            $merk = $data['merk'];
                                            $bahan = $data['bahan'];
                                            $harga = $data['harga'];
                                            $tahunperolehan = $data['tahunperolehan'];
                                            $riwayatperolehan = $data['riwayatperolehan'];
                                            $kondisi = $data['kondisi'];
                                            $aspeklegal = $data['aspeklegal'];
                                            $keterangan = $data['keterangan'];
                                            $idb = $data['idbarang'];


                                        ?>

                                            <tr>
                                                <td><?= $i++; ?></td>
                                                <td><?= $namabarang; ?></td>
                                                <td><?= $nomorregister; ?></td>
                                                <td><?= $merk; ?></td>
                                                <td><?= $bahan; ?></td>
                                                <td><?= $harga; ?></td>
                                                <td><?= $tahunperolehan; ?></td>
                                                <td><?= $riwayatperolehan; ?></td>
                                                <td><?= $kondisi; ?></td>
                                                <td><?= $aspeklegal; ?></td>
                                                <td><?= $keterangan; ?></td>
                                                <td>
                                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?= $idb; ?>">
                                                        Edit
                                                    </button>
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?= $idb; ?>">
                                                        Delete
                                                    </button>
                                                    <div class="modal fade" id="edit<?= $idb; ?>">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">

                                                                <form method="post">
                                                                    <div class="modal-body">
                                                                        <input type="text" name="namabarang" value="<?= $namabarang; ?>" class="form-control" required>
                                                                        <input type="hidden" name="idbarang" value="<?= $idb; ?>" class="form-control" required>
                                                                        <br>
                                                                        <input type="text" name="nomorregister" placeholder="Merk/Tipe" class="form-control" required value="<?= $merk; ?>">
                                                                        <br>
                                                                        <input type="text" name="merk" placeholder="Merk/Tipe" class="form-control" required value="<?= $nomorregister; ?>">
                                                                        <br>
                                                                        <input type="text" name="bahan" placeholder="Bahan" class="form-control" required value="<?= $bahan; ?>">
                                                                        <br>
                                                                        <input type="text" name="harga" placeholder="Harga" class="form-control" required value="<?= $harga; ?>">
                                                                        <br>
                                                                        <input type="text" name="tahunperolehan" placeholder="Tahun Perolehan" class="form-control" required value="<?= $tahunperolehan; ?>">
                                                                        <br>
                                                                        <input type="text" name="riwayatperolehan" placeholder="Riwayat Perolehan" class="form-control" required value="<?= $riwayatperolehan; ?>">
                                                                        <br>
                                                                        <select name="kondisi" class="form-control">
                                                                            <option value="Baik">Baik</option>
                                                                            <option value="Rusak Ringan">Rusak Ringan</option>
                                                                            <option value="Rusak Berat">Rusak Berat</option>
                                                                        </select>
                                                                        <br>
                                                                        <input type="text" name="aspeklegal" placeholder="Aspek Legal" class="form-control" required value="<?= $aspeklegal; ?>">
                                                                        <br>
                                                                        <input type="text" name="keterangan" placeholder="Keterangan" class="form-control" required value="<?= $keterangan; ?>">
                                                                        <br>
                                                                        <button type="submit" class="btn btn-primary" name="updateDataPeralatan">Submit</button>
                                                                    </div>
                                                                </form>


                                                                <!-- Modal body -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal fade" id="delete<?= $idb; ?>">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content p-5">
                                                                <!-- Modal body -->
                                                                <p>Anda Yakin Ingin Menghapus Data Ini ? </p>
                                                                <form method="post">
                                                                    <input type="hidden" name="idbarang" value="<?= $idb; ?>">
                                                                    <button type="submit" class="btn btn-danger" name="deletePeralatan">Delete</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php

                                        };

                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2020</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
</body>

<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <form method="post">
                <div class="modal-body">
                    <input type="text" name="namabarang" placeholder="Nama Barang" class="form-control" required>
                    <br>
                    <input type="text" name="nomorregister" placeholder="nomor register" class="form-control" required>
                    <br>
                    <input type="text" name="merk" placeholder="Merk/Tipe" class="form-control" required>
                    <br>
                    <input type="text" name="bahan" placeholder="Bahan" class="form-control" required>
                    <br>
                    <input type="text" name="harga" placeholder="Harga" class="form-control" required>
                    <br>
                    <input type="text" name="tahunperolehan" placeholder="Tahun Perolehan" class="form-control" required>
                    <br>
                    <input type="text" name="riwayatperolehan" placeholder="Riwayat Perolehan" class="form-control" required>
                    <br>
                    <select name="kondisi" class="form-control">
                        <option value="Baik">Baik</option>
                        <option value="Rusak Ringan">Rusak Ringan</option>
                        <option value="Rusak Berat">Rusak Berat</option>
                        <select>
                            <br>
                            <input type="text" name="aspeklegal" placeholder="Aspek Legal" class="form-control" required>
                            <br>
                            <input type="text" name="keterangan" placeholder="Keterangan" class="form-control" required>
                            <br>
                            <button type="submit" class="btn btn-primary" name="addnewdata">Submit</button>
                </div>
                <form>

        </div>
    </div>
</div>

</html>